<?php
require_once 'conn.php';

$blog_id = $_POST['blog_id'];
$blog_title = $_POST['blog_title'];
$blog_body = $_POST['blog_body'];

if ($_FILES['blog_img']['error'] === 4) {
  $simpan = mysqli_query($conn, "UPDATE `blog` SET `blog_title` = '$blog_title', `blog_body` = '$blog_body' WHERE `blog`.`blog_id` = $blog_id");

  if ($simpan) {
    echo '<script>alert(\'Data Berhasil Diubah\')</script>';
    echo '<script>window.location.href = "../blog.php"</script>';
  } else {
    echo '<script>alert(\'Data Gagal Diubah\')</script>';
    echo '<script>window.location.href = "../blog.php"</script>';
  }
} else {
  $nameFile = $_FILES["blog_img"]["name"];
  $sizeFile = $_FILES["blog_img"]["size"];
  $errorFile = $_FILES["blog_img"]["error"];
  $tempFile = $_FILES["blog_img"]["tmp_name"];

  // Cek ekstensi gambar
  $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
  $ekstensiGambar = explode('.', $nameFile);
  $ekstensiGambar = strtolower(end($ekstensiGambar));

  if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
    echo "
            <script>
                alert ('Your Uploaded is not a Photo!');
            </script>
        ";
    echo
    '<script>window.location.href = "../product.php"</script>';
    return false;
  }

  // Generate name gambar
  $nameNewGambar = 'Image-' . uniqid() . '.' . $ekstensiGambar;

  $simpan = mysqli_query($conn, "UPDATE `blog` SET `blog_title` = '$blog_title',  `blog_img` = '$nameNewGambar',  `blog_body` = '$blog_body' WHERE `blog`.`blog_id` = $blog_id");

  if ($simpan) {
    move_uploaded_file($tempFile, '../assets/img/upload/' . $nameNewGambar);
    echo '<script>alert(\'Data Berhasil Diubah\')</script>';
    echo '<script>window.location.href = "../blog.php"</script>';
  } else {
    echo '<script>alert(\'Data Gagal Diubah\')</script>';
    echo '<script>window.location.href = "../blog.php"</script>';
  }
}

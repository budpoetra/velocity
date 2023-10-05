<?php
require_once 'conn.php';

$gallery_id = $_POST['gallery_id'];
$gallery_name = $_POST['gallery_name'];

if ($_FILES['gallery_img']['error'] === 4) {
  $simpan = mysqli_query($conn, "UPDATE `gallery` SET `gallery_name` = '$gallery_name' WHERE `gallery`.`gallery_id` = $gallery_id");

  if ($simpan) {
    echo '<script>alert(\'Data Berhasil Diubah\')</script>';
    echo '<script>window.location.href = "../gallery-foto.php"</script>';
  } else {
    echo '<script>alert(\'Data Gagal Diubah\')</script>';
    echo '<script>window.location.href = "../gallery-foto.php"</script>';
  }
} else {
  $nameFile = $_FILES["gallery_img"]["name"];
  $sizeFile = $_FILES["gallery_img"]["size"];
  $errorFile = $_FILES["gallery_img"]["error"];
  $tempFile = $_FILES["gallery_img"]["tmp_name"];

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

  $simpan = mysqli_query($conn, "UPDATE `gallery` SET `gallery_name` = '$gallery_name',  `gallery_img` = '$nameNewGambar' WHERE `gallery`.`gallery_id` = $gallery_id");

  if ($simpan) {
    move_uploaded_file($tempFile, '../assets/img/upload/' . $nameNewGambar);
    echo '<script>alert(\'Data Berhasil Diubah\')</script>';
    echo '<script>window.location.href = "../gallery-foto.php"</script>';
  } else {
    echo '<script>alert(\'Data Gagal Diubah\')</script>';
    echo '<script>window.location.href = "../gallery-foto.php"</script>';
  }
}

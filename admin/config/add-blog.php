<?php
require_once 'conn.php';

$blog_title = $_POST['blog_title'];
$blog_body = $_POST['blog_body'];
$blog_post = date('Y-m-d');

$nameFile = $_FILES["blog_img"]["name"];
$sizeFile = $_FILES["blog_img"]["size"];
$errorFile = $_FILES["blog_img"]["error"];
$tempFile = $_FILES["blog_img"]["tmp_name"];

// Cek ketersediaan gambar
if ($errorFile === 4) {
  echo "
            <script>
                alert ('Please Upload Your Photo!');
            </script>
        ";
  return false;
}

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

$simpan = mysqli_query($conn, "INSERT INTO blog VALUES(NULL, '$blog_body', '$blog_title', '$nameNewGambar', '$blog_post')");

if ($simpan) {
  move_uploaded_file($tempFile, '../assets/img/upload/' . $nameNewGambar);
  echo '<script>alert(\'Data Berhasil Ditambahkan\')</script>';
  echo '<script>window.location.href = "../blog.php"</script>';
} else {
  echo '<script>alert(\'Data Gagal Ditambahkan\')</script>';
  echo '<script>window.location.href = "../blog.php"</script>';
}

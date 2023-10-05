<?php
require_once 'conn.php';

$gallery_name = $_POST['gallery_name'];

$nameFile = $_FILES["gallery_img"]["name"];
$sizeFile = $_FILES["gallery_img"]["size"];
$errorFile = $_FILES["gallery_img"]["error"];
$tempFile = $_FILES["gallery_img"]["tmp_name"];

// Cek ketersediaan gambar
if ($errorFile === 4) {
  echo "
            <script>
                alert ('Please Upload Your Photo!');
            </script>
        ";
  echo
  '<script>window.location.href = "../product.php"</script>';
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
  return false;
}

// Generate name gambar
$nameNewGambar = 'Image-' . uniqid() . '.' . $ekstensiGambar;

$simpan = mysqli_query($conn, "INSERT INTO gallery VALUES(NULL, '$gallery_name', '$nameNewGambar')");

if ($simpan) {
  move_uploaded_file($tempFile, '../assets/img/upload/' . $nameNewGambar);
  echo '<script>alert(\'Data Berhasil Ditambahkan\')</script>';
  echo '<script>window.location.href = "../gallery-foto.php"</script>';
} else {
  echo '<script>alert(\'Data Gagal Ditambahkan\')</script>';
  echo '<script>window.location.href = "../gallery-foto.php"</script>';
}

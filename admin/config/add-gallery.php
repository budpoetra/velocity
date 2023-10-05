<?php
require_once 'conn.php';

$gallery_name = $_POST['gallery_name'];
$gallery_img = $_POST['gallery_img'];

$simpan = mysqli_query($conn, "INSERT INTO gallery VALUES(NULL, '$gallery_name', '$gallery_img')");

if ($simpan) {
  echo '<script>alert(\'Data Berhasil Ditambahkan\')</script>';
  echo '<script>window.location.href = "../gallery-foto.php"</script>';
} else {
  echo '<script>alert(\'Data Gagal Ditambahkan\')</script>';
  echo '<script>window.location.href = "../gallery-foto.php"</script>';
}

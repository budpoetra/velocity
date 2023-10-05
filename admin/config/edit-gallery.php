<?php
require_once 'conn.php';

$gallery_id = $_POST['gallery_id'];
$gallery_name = $_POST['gallery_name'];
$gallery_img = $_POST['gallery_img'];

$simpan = mysqli_query($conn, "UPDATE `gallery` SET `gallery_name` = '$gallery_name',  `gallery_img` = '$gallery_img' WHERE `gallery`.`gallery_id` = $gallery_id");

if ($simpan) {
  echo '<script>alert(\'Data Berhasil Diubah\')</script>';
  echo '<script>window.location.href = "../gallery-foto.php"</script>';
} else {
  echo '<script>alert(\'Data Gagal Diubah\')</script>';
  echo '<script>window.location.href = "../gallery-foto.php"</script>';
}

<?php
require_once 'conn.php';

$blog_id = $_POST['blog_id'];
$blog_title = $_POST['blog_title'];
$blog_body = $_POST['blog_body'];
$blog_img = $_POST['blog_img'];

$simpan = mysqli_query($conn, "UPDATE `blog` SET `blog_title` = '$blog_title',  `blog_img` = '$blog_img',  `blog_body` = '$blog_body' WHERE `blog`.`blog_id` = $blog_id");

if ($simpan) {
  echo '<script>alert(\'Data Berhasil Diubah\')</script>';
  echo '<script>window.location.href = "../blog.php"</script>';
} else {
  echo '<script>alert(\'Data Gagal Diubah\')</script>';
  echo '<script>window.location.href = "../blog.php"</script>';
}

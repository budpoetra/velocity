<?php
require_once 'conn.php';

$blog_title = $_POST['blog_title'];
$blog_body = $_POST['blog_body'];
$blog_img = $_POST['blog_img'];
$blog_post = date('Y-m-d');

$simpan = mysqli_query($conn, "INSERT INTO blog VALUES(NULL, '$blog_body', '$blog_title', '$blog_img', '$blog_post')");

if ($simpan) {
  echo '<script>alert(\'Data Berhasil Ditambahkan\')</script>';
  echo '<script>window.location.href = "../blog.php"</script>';
} else {
  echo '<script>alert(\'Data Gagal Ditambahkan\')</script>';
  echo '<script>window.location.href = "../blog.php"</script>';
}

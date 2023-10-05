<?php
require_once 'conn.php';

$blog_id = $_GET['id'];

$delete = mysqli_query($conn, "DELETE FROM blog WHERE blog_id=$blog_id");

if ($delete) {
  echo '<script>alert(\'Data Berhasil Dihapus\')</script>';
  echo '<script>window.location.href = "../blog.php"</script>';
} else {
  echo '<script>alert(\'Data Gagal Dihapus\')</script>';
  echo '<script>window.location.href = "../blog.php"</script>';
}

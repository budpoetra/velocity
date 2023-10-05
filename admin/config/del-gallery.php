<?php
require_once 'conn.php';

$gallery_id = $_GET['id'];

$delete = mysqli_query($conn, "DELETE FROM gallery WHERE gallery_id=$gallery_id");

if ($delete) {
  echo '<script>alert(\'Data Berhasil Dihapus\')</script>';
  echo '<script>window.location.href = "../gallery-foto.php"</script>';
} else {
  echo '<script>alert(\'Data Gagal Dihapus\')</script>';
  echo '<script>window.location.href = "../gallery-foto.php"</script>';
}

<?php
require_once 'conn.php';

$id_message = $_GET['id'];

$delete = mysqli_query($conn, "DELETE FROM message WHERE id_message=$id_message");

if ($delete) {
  echo '<script>alert(\'Data Berhasil Dihapus\')</script>';
  echo '<script>window.location.href = "../message.php"</script>';
} else {
  echo '<script>alert(\'Data Gagal Dihapus\')</script>';
  echo '<script>window.location.href = "../message.php"</script>';
}

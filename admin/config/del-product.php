<?php
require_once 'conn.php';

$product_id = $_GET['id'];

$delete = mysqli_query($conn, "DELETE FROM product WHERE product_id=$product_id");

if ($delete) {
  echo '<script>alert(\'Data Berhasil Dihapus\')</script>';
  echo '<script>window.location.href = "../product.php"</script>';
} else {
  echo '<script>alert(\'Data Gagal Dihapus\')</script>';
  echo '<script>window.location.href = "../product.php"</script>';
}

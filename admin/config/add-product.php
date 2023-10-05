<?php
require_once 'conn.php';

$product_name = $_POST['product_name'];
$quantity = $_POST['quantity'];
$price = $_POST['price'];
$type = $_POST['type'];
$product_img = $_POST['product_img'];

$simpan = mysqli_query($conn, "INSERT INTO product VALUES(NULL, '$product_name', '$quantity', '$price', '$type', '$product_img')");

if ($simpan) {
  echo '<script>alert(\'Data Berhasil Ditambahkan\')</script>';
  echo '<script>window.location.href = "../product.php"</script>';
} else {
  echo '<script>alert(\'Data Gagal Ditambahkan\')</script>';
  echo '<script>window.location.href = "../product.php"</script>';
}

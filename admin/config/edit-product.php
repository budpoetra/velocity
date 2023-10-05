<?php
require_once 'conn.php';

$product_id = $_POST['product_id'];
$product_name = $_POST['product_name'];
$quantity = $_POST['quantity'];
$price = $_POST['price'];
$type = $_POST['type'];
$product_img = $_POST['product_img'];

$simpan = mysqli_query($conn, "UPDATE `product` SET `product_name` = '$product_name', `product_quantity` = '$quantity', `product_price` = '$price', `product_type` = '$type', `product_img` = '$product_img' WHERE `product`.`product_id` = $product_id");

if ($simpan) {
  echo '<script>alert(\'Data Berhasil Diubah\')</script>';
  echo '<script>window.location.href = "../product.php"</script>';
} else {
  echo '<script>alert(\'Data Gagal Diubah\')</script>';
  echo '<script>window.location.href = "../product.php"</script>';
}

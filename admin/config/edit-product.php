<?php
require_once 'conn.php';

$product_id = $_POST['product_id'];
$product_name = $_POST['product_name'];
$quantity = $_POST['quantity'];
$price = $_POST['price'];
$type = $_POST['type'];

if ($_FILES['product_img']['error'] === 4) {
  $simpan = mysqli_query($conn, "UPDATE `product` SET `product_name` = '$product_name', `product_quantity` = '$quantity', `product_price` = '$price', `product_type` = '$type' WHERE `product`.`product_id` = $product_id");

  if ($simpan) {
    echo '<script>alert(\'Data Berhasil Diubah\')</script>';
    echo '<script>window.location.href = "../product.php"</script>';
  } else {
    echo '<script>alert(\'Data Gagal Diubah\')</script>';
    echo '<script>window.location.href = "../product.php"</script>';
  }
} else {
  $nameFile = $_FILES["product_img"]["name"];
  $sizeFile = $_FILES["product_img"]["size"];
  $errorFile = $_FILES["product_img"]["error"];
  $tempFile = $_FILES["product_img"]["tmp_name"];

  // Cek ekstensi gambar
  $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
  $ekstensiGambar = explode('.', $nameFile);
  $ekstensiGambar = strtolower(end($ekstensiGambar));

  if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
    echo "
            <script>
                alert ('Your Uploaded is not a Photo!');
            </script>
        ";
    echo '<script>window.location.href = "../product.php"</script>';
    return false;
  }

  // Generate name gambar
  $nameNewGambar = 'Image-' . uniqid() . '.' . $ekstensiGambar;
  $simpan = mysqli_query($conn, "UPDATE `product` SET `product_name` = '$product_name', `product_quantity` = '$quantity', `product_price` = '$price', `product_type` = '$type', `product_img` = '$nameNewGambar' WHERE `product`.`product_id` = $product_id");

  if ($simpan) {
    move_uploaded_file($tempFile, '../assets/img/upload/' . $nameNewGambar);
    echo '<script>alert(\'Data Berhasil Diubah\')</script>';
    echo '<script>window.location.href = "../product.php"</script>';
  } else {
    echo '<script>alert(\'Data Gagal Diubah\')</script>';
    echo '<script>window.location.href = "../product.php"</script>';
  }
}

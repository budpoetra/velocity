<?php
require_once '../admin/config/conn.php';

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$time = date('Y-m-d');

$simpan = mysqli_query($conn, "INSERT INTO message VALUES(NULL, '$name', '$email', '$subject', '$message', '$time')");

if ($simpan) {
  echo '<script>alert(\'Pesan Berhasil Dikirimkan\')</script>';
  echo '<script>window.location.href = "../index.php"</script>';
} else {
  echo '<script>alert(\'Pesan Gagal Dikirimkan\')</script>';
  echo '<script>window.location.href = "../index.php"</script>';
}

<?php 
  $conn = mysqli_connect("localhost", "root", "", "velocity_db");

  if (!$conn) {
    echo "Koneksi Gagal";
  }
?>
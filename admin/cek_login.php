<?php 
  session_start();

  require_once 'config/conn.php';

  $email = $_POST['email'];
  $password = md5($_POST['password']);

  $login = mysqli_query($conn, "SELECT * FROM accounts WHERE email='$email' AND password='$password'");

  if (mysqli_num_rows($login) > 0) {
    $_SESSION['Login'] = true;
    header('Location: index.php');
  } else {
    echo '<script>alert("Email atau Password Tidak Terdaftar")</script>';
    echo '<script>window.location.href = "../login.php"</script>';
  }
?>
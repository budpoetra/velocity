<?php
session_start();

if (!$_SESSION['Login']) {
  header('Location: ../login.php');
}

if (!$_GET['id']) {
  header('Location: message.php');
} else {
  $id_message = $_GET['id'];

  require_once 'config/conn.php';
  $message = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM message WHERE id_message=$id_message"));
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Reading - Velocity</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">Velocity</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li>
        <!-- End Search Icon-->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">Admin</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Velocity</h6>
              <span>Motor Club</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="logout.php">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">
      <li class="nav-item">
        <a class="nav-link collapsed" href="index.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <!-- Product -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="product.php">
          <i class="bi bi-truck"></i>
          <span>Product</span>
        </a>
      </li>

      <!-- Gallery Foto -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="gallery-foto.php">
          <i class="bi bi-image"></i>
          <span>Gallery Foto</span>
        </a>
      </li>

      <!-- Blog -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="blog.php">
          <i class="bi bi-file-earmark-post"></i>
          <span>Blog</span>
        </a>
      </li>

      <!-- Message -->
      <li class="nav-item">
        <a class="nav-link " href="message.php">
          <i class="bi bi-chat-dots"></i>
          <span>Message</span>
        </a>
      </li>
    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Reading</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item"><a href="message.php">Message</a></li>
          <li class="breadcrumb-item active">Reading</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">

            <!-- Recent Sales -->
            <div class="col-12">
              <div class="card recent-sales overflow-auto">

                <div class="card-body">

                  <center>
                    <h5 class="card-title">Detail <span>| Message</span></h5>
                  </center>

                  <div class="row">
                    <h3>From:</h3>
                    <div class="col-2">
                      <h5 class="card-title">Name</h5>
                    </div>
                    <div class="col-1">
                      <h5 class="card-title">:</h5>
                    </div>
                    <div class="col-9">
                      <h5 class="card-title"><?= $message['name'] ?></h5>
                    </div>
                    <div class="col-2" style="margin-top: -25px;">
                      <h5 class="card-title">Email</h5>
                    </div>
                    <div class="col-1" style="margin-top: -25px;">
                      <h5 class="card-title">:</h5>
                    </div>
                    <div class="col-9" style="margin-top: -25px;">
                      <h5 class="card-title"><?= $message['email'] ?></h5>
                    </div>
                    <div class="col-2" style="margin-top: -25px;">
                      <h5 class="card-title">Subject</h5>
                    </div>
                    <div class="col-1" style="margin-top: -25px;">
                      <h5 class="card-title">:</h5>
                    </div>
                    <div class="col-9" style="margin-top: -25px;">
                      <h5 class="card-title"><?= $message['subject'] ?></h5>
                    </div>
                    <div class="col-2" style="margin-top: -25px;">
                      <h5 class="card-title">Message</h5>
                    </div>
                    <div class="col-1" style="margin-top: -25px;">
                      <h5 class="card-title">:</h5>
                    </div>
                    <div class="col-12" style="margin-top: -25px;">
                      <h5 class="card-title"><?= $message['message'] ?></h5>
                    </div>
                  </div>

                </div>

              </div>
            </div><!-- End Recent Sales -->

          </div>
        </div><!-- End Left side columns -->

      </div>
    </section>

  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
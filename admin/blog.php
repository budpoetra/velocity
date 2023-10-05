<?php
session_start();

if (!$_SESSION['Login']) {
  header('Location: ../login.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Blog - Velocity</title>
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

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

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
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
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
        <a class="nav-link " href="blog.php">
          <i class="bi bi-file-earmark-post"></i>
          <span>Blog</span>
        </a>
      </li>
    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Blog</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Blog</li>
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
                  <div class="mt-3">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
                      Add Blog
                    </button>

                    <form action="config/add-blog.php" method="post">
                      <!-- Modal -->
                      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h1 class="modal-title fs-5" id="exampleModalLabel">Add New Blog</h1>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <div class="mb-3">
                                <label for="blog_img" class="form-label">Foto</label>
                                <input type="file" class="form-control" id="blog_img" name="blog_img" accept="image/png, image/jpeg, image/jpg">
                              </div>
                              <div class="mb-3">
                                <label for="blog_title" class="form-label">Blog Title</label>
                                <input type="text" class="form-control" id="blog_title" name="blog_title" required>
                              </div>
                              <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" name="blog_body" style="height: 300px"></textarea>
                                <label for="floatingTextarea2">Blog Body</label>
                              </div>
                            </div>
                            <div class=" modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                  <center>
                    <h5 class="card-title">Gallery <span>| Table</span></h5>
                  </center>
                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Blog Title</th>
                        <th scope="col">Blog Post</th>
                        <th scope="col">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      require_once 'config/conn.php';
                      $no = 1;

                      $blogs = mysqli_query($conn, "SELECT * FROM blog");

                      foreach ($blogs as $blog) {
                      ?>
                        <tr>
                          <th scope="row"><?= $no++ ?></th>
                          <td><?= $blog['blog_title'] ?></td>
                          <td><?= $blog['blog_post'] ?></td>
                          <td>
                            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModalEdit<?= $blog['blog_id'] ?>">
                              <i class="bi bi-pencil-square"></i>
                            </button>
                            <a href="config/del-gallery.php?id=<?= $blog['blog_id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Menghapus Data ?')">
                              <i class="bi bi-trash"></i>
                            </a>
                            <!-- Modal -->
                            <form action="config/edit-blog.php" method="post">
                              <input type="hidden" class="form-control" id="blog_id" name="blog_id" value="<?= $blog['blog_id'] ?>">
                              <div class="modal fade" id="exampleModalEdit<?= $blog['blog_id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-xl">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Blog</h1>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                      <div class="mb-3">
                                        <label for="blog_img" class="form-label">Foto</label>
                                        <input type="file" class="form-control" id="blog_img" name="blog_img" accept="image/png, image/jpeg, image/jpg" value="<?= $blog['blog_img'] ?>">
                                      </div>
                                      <div class="mb-3">
                                        <label for="blog_title" class="form-label">Blog Title</label>
                                        <input type="text" class="form-control" id="blog_title" name="blog_title" value="<?= $blog['blog_title'] ?>">
                                      </div>
                                      <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" name="blog_body" style="height: 300px"><?= $blog['blog_body'] ?></textarea>
                                        <label for="floatingTextarea2">Blog Body</label>
                                      </div>
                                    </div>
                                    <div class=" modal-footer">
                                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                      <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </form>
                          </td>
                        </tr>
                      <?php } ?>
                    </tbody>
                  </table>

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
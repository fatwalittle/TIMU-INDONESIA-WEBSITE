<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Timu Indonesia</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="<?= base_url('frontend/timu/'); ?>img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href=">https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?= base_url('frontend/timu/'); ?>lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?= base_url('frontend/timu/'); ?>lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= base_url('frontend/timu/'); ?>css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?= base_url('frontend/timu/'); ?>css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <!-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div> -->
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow border-top border-5 border-primary sticky-top p-0">
        <a href="<?= base_url('home/index'); ?>" class="navbar-brand bg-white d-flex align-items-center px-4 px-lg-5">
            <img src="<?= base_url('frontend/timu/img/logo_sip.png') ?>">
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="<?= base_url('home/index'); ?>" class="nav-item nav-link active">Home</a>
                <a href="<?= base_url('home/about'); ?>" class="nav-item nav-link">About</a>
                <a href="<?= base_url('home/scope_of_work'); ?>" class="nav-item nav-link">Scope Of Work</a>
            </div>
            <div class="nav-item dropdown">
                <h4 class="m-0 pe-lg-5 d-none d-lg-block"><i class="fa fa-headphones text-primary me-3" data-bs-toggle="dropdown"></i>Contact</h4>
                <div class="dropdown-menu fade-up m-0">
                    <a href="https://wa.me/628118885758" class="dropdown-item">Whatapp</a>
                    <a href="https://mail.google.com/mail/?view=cm&fs=1&to=info@timu-indonesia.com&su=&body=&bcc=" class="dropdown-item">Email</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->
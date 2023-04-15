<?php
    
?>
<!DOCTYPE html>
<html lang="en" translate="no">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <meta name="google" content="notranslate">
    <title>GohCamp Admin | <?= $title ?> </title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="assets/modules/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/vendor/datatables.min.css">
    <link rel="stylesheet" href="assets/vendor/responsive.dataTables.min.css">
    <link rel="stylesheet" href="assets/vendor/jquery.dataTables.min.css">
    <link rel="shortcut icon" href="../assets/icon/logo-rapor.svg" type="image/x-icon">


    <!-- CSS Libraries -->
    <link rel="stylesheet" href="cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">

    <!-- Js Library -->
    <script src="../assets/vendor/ckeditor/ckeditor.js"></script>

    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/components.css">
    <script src="https://kit.fontawesome.com/1b52eac799.js" crossorigin="anonymous"></script>
</head>

<body>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <nav class="navbar navbar-expand-lg main-navbar">
                <form class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
                    </ul>
                    <p class="text-md text-light my-auto font-weight-semibold"><?= $title ?></h1>
                </form>
                <ul class="navbar-nav navbar-right">
                    <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <img alt="image" src="assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
                            <div class="d-sm-none d-lg-inline-block">Hi, <?= $_SESSION['name'] ?></div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="/lks_sumedang/auth/logout.php" class="dropdown-item has-icon text-danger">
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>
            <div class="main-sidebar sidebar-style-2">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand bg-primary">
                        <a class="text-light" href="../">GohCamp</a>
                    </div>
                    <div class="sidebar-brand sidebar-brand-sm">
                        <a class="text-light" href="../">GC</a>
                    </div>
                    <ul class="sidebar-menu mt-2">
                        <li class="menu-header">Menu</li>

                            <li class="<?php if ($title == "Home") {
                                            echo "active";
                                        } else {
                                            echo "";
                                        } ?>"><a class="nav-link" href="dashboard.php"><i class="fa-solid fa-house-chimney-window"></i><span>Dashboard</span></a></li>
                            <li class="menu-header">Management</li>
                            <li class="<?php if ($title == "Artikel") {
                                            echo "active";
                                        } else {
                                            echo "";
                                        } ?>"><a class="nav-link" href="article.php"><i class="fa-regular fa-newspaper"></i><span>Artikel</span></a></li>
                            <li class="<?php if ($title == "Galeri") {
                                            echo "active";
                                        } else {
                                            echo "";
                                        } ?>"><a class="nav-link" href="galery.php"><i class="fa-regular fa-images"></i></i><span>Galery</span></a></li>
                            <li class="menu-header">Setting</li>
                            <li class="<?php if ($title == "Statistic") {
                                            echo "active";
                                        } else {
                                            echo "";
                                        } ?>"><a class="nav-link" href="statistic.php"><i class="fa-sharp fa-solid fa-chart-simple"></i><span>Statistic</span></a></li>
                            <li class="<?php if ($title == "Setting") {
                                            echo "active";
                                        } else {
                                            echo "";
                                        } ?>"><a class="nav-link" href="setting.php"><i class="fa-solid fa-gear"></i><span>Setting</span></a></li>
                    </ul>
                </aside>
            </div>
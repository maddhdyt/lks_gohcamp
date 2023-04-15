<?php
include '../admin/core/conn.php';

// setting data
$setting = mysqli_query($conn, "SELECT * FROM setting WHERE id_setting = 1");
$data3 = mysqli_fetch_assoc($setting);

$id = $_GET['id'];
$show = mysqli_query($conn, "SELECT * FROM article WHERE id_article = $id");
$data = mysqli_fetch_assoc($show);

$latest = mysqli_query($conn, "SELECT * FROM article ORDER BY id_article DESC LIMIT 4");
?>

<!DOCTYPE html>
<html lang="en" translate="no">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= strip_tags(htmlspecialchars_decode(substr($data['description'], "0", "155") . "...")); ?>">
    <meta name="keywords" content="<?= $data['keyword'] ?>">
    <meta name="author" content="John Doe">
    <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
    <meta name="google" content="notranslate">
    <link rel="stylesheet" href="/lks_sumedang/assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;900&family=Poppins&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Samalengoh Camp Sumedang</title>
</head>

<body>
    <div class="wrapper">
        <header class="news-page-header">
            <nav class="navbar white-navbar">
                <div class="container">
                    <a href="/lks_sumedang/" class="logo">
                        Goh<span class="text-primary">Camp</span>
                    </a>
                    <ul class="nav-menu">
                    <li><a href="/lks_sumedang/">Beranda</a></li>
                        <li><a href="/lks_sumedang/index.php#about">Tentang</a></li>
                        <li><a href="/lks_sumedang/index.php#testimonial">Testimonial</a></li>
                        <li><a href="/lks_sumedang/index.php#galery">Galeri</a></li>
                        <li><a href="/lks_sumedang/index.php#news">Berita</a></li>
                        <li><a href="https://wa.me/6283192103301?text=halo%20kak,%20aku%20mau%20booking%20tempat%20camping!" class="icon-box"><i class='bx bx-phone-call'></i></a></li>
                    </ul>
                    <div class="nav-toggle">
                        <i class='bx bx-menu'></i>
                    </div>
                </div>
            </nav>
        </header>
        <section>
            <div class="container">
                <div class="news-detail-wrapper">
                    <div class="col-1">
                        <div class="news-img">
                            <a href="<?= $data['img_src'] ?>"></a>
                            <img src="/lks_sumedang/assets/img/<?= $data['image'] ?>" alt="">
                        </div>
                        <div class="news-title">
                            <p><?= $data['date'] ?></p>
                            <h1><?= $data['title'] ?></h1>
                        </div>
                        <div class="news-desc">
                            <p>
                                <?= htmlspecialchars_decode($data['description']) ?>
                            </p>
                            <p class="writer">Ditulis oleh <?= $data['writer_name'] ?></p>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="side-title">
                            <div class="highlight"></div>
                            <h2>Berita Terkini</h2>
                        </div>
                        <div class="side-news-wrapper">
                            <?php
                            while ($data2 = mysqli_fetch_assoc($latest)) :
                            ?>
                                <div class="side-news">
                                    <div class="img">
                                        <a href="/lks_sumedang/artikel/<?= $data2['id_article'] ?>/<?= $data2['slug'] ?>"></a>
                                        <img src="/lks_sumedang/assets/img/<?= $data2['image'] ?>" alt="">
                                    </div>
                                    <div class="desc">
                                        <a href="/lks_sumedang/artikel/<?= $data2['id_article'] ?>/<?= $data2['slug'] ?>"><?= $data2['title'] ?></a>
                                        <span><?= $data2['date'] ?></span>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                            <a href="/lks_sumedang/public/article.php" class="btn-back">
                                <i class='bx bx-left-arrow-alt'></i>Daftar Berita
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer>
            <div class="container">
                <div class="footer-wrapper">
                    <div class="col-1">
                        <a href="/lks_sumedang/" class="logo">
                            Goh<span class="text-primary">Camp</span>
                        </a>
                        <div class="icon-group">
                            <a href="<?= $data3['med_facebook'] ?>" class="icon"><i class='bx bxl-facebook'></i></a>
                            <a href="<?= $data3['med_instagram'] ?>" class="icon"><i class='bx bxl-instagram'></i></a>
                            <a href="<?= $data3['med_tiktok'] ?>" class="icon"><i class='bx bxl-tiktok'></i></a>
                            <a href="<?= $data3['med_youtube'] ?>" class="icon"><i class='bx bxl-youtube'></i></a>
                        </div>
                    </div>
                    <div class="col-2">
                        <ul>
                            <li class="nav-title">Navigasi Cepat</li>
                            <li><a href="/lks_sumedang/">Beranda</a></li>
                            <li><a href="/lks_sumedang/index.php#about">Tentang</a></li>
                            <li><a href="/lks_sumedang/index.php#galery">Galeri</a></li>
                            <li><a href="/lks_sumedang/index.php#news">Berita</a></li>
                        </ul>
                        <ul>
                            <li class="nav-title">Layanan Kami</li>
                            <li><a href="/lks_sumedang/index.php#about">Profil Wisata</a></li>
                            <li><a href="/lks_sumedang/public/article.php">Berita</a></li>
                        </ul>
                        <ul>
                            <li class="nav-title">Hubungi Kami</li>
                            <li><p><?= $data3['address'] ?></p></li>
                            <li><p>Phone : <?= $data3['contact'] ?></p></li>
                            <li><p>Email : <?= $data3['email'] ?></p></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="copy">
                <div class="container">
                    <p>&copy;Copyright <script>document.write(new Date().getFullYear())</script>, GohCamp LKS Sumedang</p>
                </div>
            </div>
        </footer>
    </div>
    <script>
        <?php
        include '../assets/js/main.js';
        ?>
    </script>
</body>

</html>
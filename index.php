<?php
include 'admin/core/conn.php';

$setting = mysqli_query($conn, "SELECT * FROM setting WHERE id_setting = 1");
$article = mysqli_query($conn, "SELECT * FROM article ORDER BY id_article DESC LIMIT 4");
$galery = mysqli_query($conn, "SELECT * FROM galery ORDER BY id DESC LIMIT 10");
$statistic = mysqli_query($conn, "SELECT * FROM statistic WHERE id = 1");

$data = mysqli_fetch_assoc($setting);
$data4 = mysqli_fetch_assoc($statistic);
?>

<!DOCTYPE html>
<html lang="en" translate="no">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= substr($data['profil_desc'], "0", "155") . "..."; ?>">
    <meta name="keywords" content="Samalengoh, Samalengoh Camp, Samalengoh Sumedang, Tempat Camping di Sumedang, Wisata Alam Sumedang, Wisata di Sumedang, Kemping di Sumedang">
    <meta name="author" content="Ahmad Hidayat">
    <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
    <meta name="google" content="notranslate">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;900&family=Poppins&display=swap" rel="stylesheet">
    <!-- Library -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="assets/vendor/fancybox/fancy.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <title>Samalengoh Camp Sumedang</title>
</head>
<body>
    <div class="wrapper">
        <header>
            <img class="bg-banner" src="assets/img/<?= $data['bg_banner'] ?>" alt="">
            <nav class="navbar">
                <div class="container">
                    <a href="#" class="logo">
                        Goh<span class="text-primary">Camp</span>
                    </a>
                    <ul class="nav-menu">
                        <li><a onclick="hideNavbar()" href="#">Beranda</a></li>
                        <li><a onclick="hideNavbar()" href="#about">Tentang</a></li>
                        <li><a onclick="hideNavbar()" href="#testimonial">Testimonial</a></li>
                        <li><a onclick="hideNavbar()" href="#galery">Galeri</a></li>
                        <li><a onclick="hideNavbar()" href="/lks_sumedang/public/article.php">Berita</a></li>
                        <li><a onclick="hideNavbar()" href="https://wa.me/6283192103301?text=halo%20kak,%20aku%20mau%20booking%20tempat%20camping!" class="icon-box"><i class='bx bx-phone-call'></i></a></li>
                    </ul>
                    <div class="nav-toggle">
                        <i class='bx bx-menu'></i>
                    </div>
                </div>
            </nav>
            <div class="header-content">
                <div class="header-title">
                    <h1>Samalengoh Camp</h1>
                    <div class="highlight"></div>
                </div>
                <p><?= $data['head_desc']; ?></p>
                <a href="#about" class="icon-box">
                    <i class='bx bx-toggle-left'></i>
                </a>
                <span class="banner-source">source: <?= $data['source_banner'] ?></span>
            </div>
        </header>
        <section id="about">
            <div class="container">
                <div class="section-title">
                    <p>Tentang</p>
                    <h2>Profil Samalengoh</h2>
                    <div class="highlight"></div>
                </div>
                <div class="about-wrapper">
                    <div class="col-1">
                        <p><?= $data['profil_desc'] ?></p>
                        <div class="statistic-card">
                            <div class="col">
                                <p>Pengunjung</p>
                                <h4><?= $data4['visitors'] ?></h4>
                            </div>
                            <div class="col">
                                <p>Jumlah Tenda</p>
                                <h4><?= $data4['tent'] ?></h4>
                            </div>
                            <div class="col">
                                <p>Status</p>
                                <h4><?php if ($data4['status'] == 'tersedia') {
                                    echo "Tersedia";
                                } else if ($data4['status'] == 'penuh') {
                                    echo "Penuh";
                                }
                                 ?></h4>
                            </div>
                        </div>
                        <a href="https://wa.me/6283192103301?text=halo%20kak,%20aku%20mau%20booking%20tempat%20camping!" class="btn">
                            Booking Sekarang!
                        </a>
                    </div>
                    <div class="col-2">
                        <iframe src="<?= $data['profil_video'] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </section>
        <section id="testimonial">
            <div class="container">
                <div class="section-title">
                    <p>Testimonial</p>
                        <h2>Kesan Pengunjung</h2>
                        <div class="highlight"></div>
                    </div>
                <div class="testimonial-wrapper">
                    <div class="card">
                        <div class="icon">
                            <img src="assets/icon/Frame (1).svg">
                        </div>
                        <h2>Ahmad Hidayat</h2>
                        <p>Tempatnya enak banget, apalagi pas liat sunrise viewnya bagus banget. Jadi pengen lagi kumpul disana bareng temen - temen, gokill sih murah lagi.</p>
                    </div>
                    <div class="card">
                        <div class="icon">
                            <img src="assets/icon/Frame (1).svg">
                        </div>
                        <h2>Ceu Edoh</h2>
                        <p>Meni enakeun pisan jaba bareresih, seueur tempat paragi poto deuih. Instagramebel pisan lahh</p>
                    </div>
                    <div class="card">
                        <div class="icon">
                            <img src="assets/icon/Frame (1).svg">
                        </div>
                        <h2>Steven John</h2>
                        <p>Here's perfect place to camp or chill with your friends, i usually going here because the ticket is very cheap but still worth it</p>
                    </div>
                </div>
            </div>
        </section>
        <section id="galery">
            <div class="container">
                <div class="section-title title-center">
                    <p>Galeri</p>
                    <h2>Fotografi Samalengoh</h2>
                    <div class="highlight"></div>
                </div>
                <div class="galery-wrapper">
                    <?php
                    while ($data2 = mysqli_fetch_assoc($galery)) :
                    ?>
                        <div class="img-box">
                            <a href="assets/img/<?= $data2['image'] ?>" data-fancybox="gallery" data-caption="<?= $data2['source'] ?>">
                                <img src="assets/img/<?= $data2['image'] ?>">
                            </a>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </section>
        <section id="news">
            <div class="container">
                <div class="section-title">
                    <p>Berita</p>
                    <h2>Berita Terkini</h2>
                    <div class="highlight"></div>
                </div>
                <div class="news-wrapper">
                    <?php
                    while ($data3 = mysqli_fetch_assoc($article)) :
                    ?>
                        <div class="news-card">
                            <div class="img">
                                <a href="artikel/<?= $data3['id_article'] ?>/<?= $data3['slug'] ?>" class="news-link"></a>
                                <img src="assets/img/<?= $data3['image'] ?>">
                            </div>
                            <div class="desc">
                                <h6><?= $data3['date'] ?></h6>
                                <a href="artikel/<?= $data3['id_article'] ?>/<?= $data3['slug'] ?>" class="title_link">
                                    <h4><?= $data3['title'] ?></h4>
                                </a>
                            </div>
                        </div>
                    <?php endwhile; ?>

                </div>
                <a href="public/article.php" class="btn-expand-centered">
                    Selengkapnya
                </a>
            </div>
        </section>
        <section class="maps-wrapper">
            <div class="container">
                <div class="maps">
                    <div class="col-1">
                        <h2>Kontak Kami</h2>
                        <div class="contact-group">
                            <i class='bx bx-map-alt'></i><p><?= $data['address'] ?></p>
                        </div>
                        <div class="contact-group">
                        <i class='bx bx-envelope' ></i><p><?= $data['email'] ?></p>
                        </div>
                        <div class="contact-group">
                        <i class='bx bxs-phone'></i></i><p><?= $data['contact'] ?></p>
                        </div>
                        <a href="https://wa.me/6283192103301?text=halo%20kak,%20aku%20mau%20booking%20tempat%20camping!" class="btn"><p>Hubungi via</p> <i class='bx bxl-whatsapp'></i></a>
                    </div>
                    <div class="col-2">
                        <iframe frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=Samalengoh+Camp,+Gunturmekar,+Sumedang+Regency,+West+Java,+Indonesia&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe>
                    </div>
                </div>
            </div>
        </section>
        <footer class="m-0">
            <div class="container">
                <div class="footer-wrapper">
                    <div class="col-1">
                        <a href="#" class="logo">
                            Goh<span class="text-primary">Camp</span>
                        </a>
                        <div class="icon-group">
                            <a href="<?= $data['med_facebook'] ?>" class="icon"><i class='bx bxl-facebook'></i></a>
                            <a href="<?= $data['med_instagram'] ?>" class="icon"><i class='bx bxl-instagram'></i></a>
                            <a href="<?= $data['med_tiktok'] ?>" class="icon"><i class='bx bxl-tiktok'></i></a>
                            <a href="<?= $data['med_youtube'] ?>" class="icon"><i class='bx bxl-youtube'></i></a>
                        </div>
                    </div>
                    <div class="col-2">
                        <ul>
                            <li class="nav-title">Navigasi Cepat</li>
                            <li><a href="#">Beranda</a></li>
                            <li><a href="#about">Tentang</a></li>
                            <li><a href="#galery">Galeri</a></li>
                            <li><a href="#news">Berita</a></li>
                        </ul>
                        <ul>
                            <li class="nav-title">Layanan Kami</li>
                            <li><a href="#about">Profil Wisata</a></li>
                            <li><a href="/lks_sumedang/public/article.php">Berita</a></li>
                        </ul>
                        <ul>
                            <li class="nav-title">Hubungi Kami</li>
                            <li><p><?= $data['address'] ?></p></li>
                            <li><p>Phone : <?= $data['contact'] ?></p></li>
                            <li><p>Email : <?= $data['email'] ?></p></li>
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
    <script src="assets/vendor/fancybox/fancy.umd.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="assets/js/swiper.js"></script>
    <script>
        <?php
        include 'assets/js/main.js';
        ?>
    </script>
</body>

</html>
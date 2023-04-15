<?php
include '../admin/core/conn.php';

// setting data
$setting = mysqli_query($conn, "SELECT * FROM setting WHERE id_setting = 1");
$data2 = mysqli_fetch_assoc($setting);

$perPage = 8; //perhalaman
$page = isset($_GET["page"]) ? (int)$_GET["page"] : 1;
$start = ($page > 1) ? ($page * $perPage) - $perPage : 0;

$show = mysqli_query($conn, "SELECT * FROM article ORDER BY id_article DESC LIMIT $start, $perPage");

$all = mysqli_query($conn, "SELECT * FROM article");
$total = mysqli_num_rows($all);

$pages = ceil($total / $perPage);

$jumlahLink = 2;
$start_num = $page;
if ($page < ($pages - $jumlahLink)) {
    $end_num = $page + $jumlahLink;
} else {
    $end_num = $pages;
}
?>

<!DOCTYPE html>
<html lang="en" translate="no">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Berita Samalengoh wisata alam yang tepatnya berada di Kabupaten Sumedang">
    <meta name="keywords" content="Artikel, Artikel Sumedang, Berita, Berita Sumedang, Samalengoh Camp, Samalengoh Sumedang, Tempat Camping di Sumedang, Wisata Alam Sumedang, Wisata di Sumedang, Kemping di Sumedang">
    <meta name="author" content="Ahmad Hidayat">
    <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
    <meta name="google" content="notranslate">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;900&family=Poppins&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Samalengoh Camp Sumedang</title>
</head>

<body>
    <div class="wrapper">
        <header class="page-header">
            <img class="bg-banner" src="../assets/img/12-1-Agrowisata-Kampung-Nangorak-By-www.nangorakcamp.com_.jpg" alt="">
            <nav class="navbar">
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
            <div class="header-content">
                <div class="header-title">
                    <h2>Berita</h2>
                </div>
            </div>
        </header>
        <section>
            <div class="container">
                <form class="search-box" action="search.php" method="GET">
                    <div class="form-group">
                        <input type="search" name="q" class="form-control" placeholder="Cari berita">
                        <input type="submit" class="btn-search" value="">
                        <i class='bx bx-search-alt'></i>
                    </div>
                </form>

                <div class="news-page-wrapper">
                    <?php
                    while ($data = mysqli_fetch_assoc($show)) :
                    ?>
                        <div class="news-card">
                            <div class="img">
                                <a href="artikel/<?= $data['id_article'] ?>/<?= $data['slug'] ?>" class="news-link"></a>
                                <img src="../assets/img/<?= $data['image'] ?>">
                            </div>
                            <div class="desc">
                                <h6><?= $data['date'] ?></h6>
                                <a href="artikel/<?= $data['id_article'] ?>/<?= $data['slug'] ?>" class="title_link">
                                    <h4><?= $data['title'] ?></h4>
                                </a>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>

                <div class="pagination">
                    <div class="btn_control back">
                        <i class="bx bx-chevron-left"></i>
                        <?php if ($page > 1) : ?>
                            <a href="?page=<?= $page - 1 ?>"></a>
                        <?php endif; ?>
                    </div>
                    <?php for ($i = $start_num; $i <= $end_num; $i++) : ?>
                        <?php if ($i == $page) : ?>
                            <div class="page active"><a href="?page=<?php echo $i ?>"><?php echo $i ?></a></div>
                        <?php else : ?>
                            <div class="page"><a href="?page=<?php echo $i ?>"><?php echo $i ?></a></div>
                        <?php endif; ?>
                    <?php endfor; ?>
                    <div class="btn_control next">
                        <i class="bx bx-chevron-right"></i>
                        <?php if ($page < $pages) : ?>
                            <a href="?page=<?= $page + 1 ?>"></a>
                        <?php endif; ?>
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
                            <a href="<?= $data2['med_facebook'] ?>" class="icon"><i class='bx bxl-facebook'></i></a>
                            <a href="<?= $data2['med_instagram'] ?>" class="icon"><i class='bx bxl-instagram'></i></a>
                            <a href="<?= $data2['med_tiktok'] ?>" class="icon"><i class='bx bxl-tiktok'></i></a>
                            <a href="<?= $data2['med_youtube'] ?>" class="icon"><i class='bx bxl-youtube'></i></a>
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
                            <li><p><?= $data2['address'] ?></p></li>
                            <li><p>Phone : <?= $data2['contact'] ?></p></li>
                            <li><p>Email : <?= $data2['email'] ?></p></li>
                        </ul>
                    </div>
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
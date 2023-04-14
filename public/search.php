<?php
include '../admin/core/conn.php';

$perPage = 8; //perhalaman
$page = isset($_GET["page"]) ? (int)$_GET["page"] : 1;
$start = ($page > 1) ? ($page * $perPage) - $perPage : 0;

//search

if (isset($_GET['q'])) {
    $q = $_GET['q'];
    $show = mysqli_query($conn, "SELECT * FROM article WHERE title LIKE '%" . $q . "%' ORDER BY id_article  DESC LIMIT $start, $perPage");

    $all = mysqli_query($conn, "SELECT * FROM article  WHERE title LIKE '%" . $q . "%'");
} else {
    $show = mysqli_query($conn, "SELECT * FROM article ORDER BY id_article DESC LIMIT $start, $perPage");

    $all = mysqli_query($conn, "SELECT * FROM article");
}


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
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                    <div class="logo">
                        Goh<span class="text-primary">Camp</span>
                    </div>
                    <ul class="nav-menu">
                        <li><a href="/lks_sumedang/">Beranda</a></li>
                        <li><a href="/lks_sumedang/index#about">Tentang</a></li>
                        <li><a href="/lks_sumedang/index#galery">Galeri</a></li>
                        <li><a href="/lks_sumedang/index#news">Berita</a></li>
                        <li><a href="" class="icon-box"><i class='bx bx-phone-call'></i></a></li>
                    </ul>
                    <div class="nav-toggle">
                        <i class='bx bx-menu'></i>
                    </div>
                </div>
            </nav>
            <div class="header-content">
                <div class="header-title">
                    <h2>Berita Samalengoh</h2>
                </div>
            </div>
        </header>
        <section>
            <div class="container">
                <form class="search-box" action="search.php" method="GET">
                    <div class="form-group">
                        <input value="<?= $_GET['q'] ?? '' ?>" type="search" name="q" class="form-control" placeholder="Cari berita">
                        <input type="submit" class="btn-search" value="">
                        <i class='bx bx-search-alt'></i>
                    </div>
                </form>

                <div class="news-page-wrapper">
                    <?php if ($total === 0) : ?>
                        <div class="null-alert">
                            <div class="img-box">
                                <img src="../assets/icon/not-found.gif" alt="">
                            </div>
                            <h2>Tidak ada berita dengan keyword <span>"<?= $_GET['q'] ?? '' ?>"</span></h2>
                        </div>
                    <?php else : ?>
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
                    <?php endif; ?>
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
                        <div class="logo">
                            Sama<span class="text-primary">Camp</span>
                        </div>
                        <div class="icon-group">
                            <div class="icon"><i class='bx bxl-facebook'></i></div>
                            <div class="icon"><i class='bx bxl-instagram'></i></div>
                            <div class="icon"><i class='bx bxl-tiktok'></i></div>
                            <div class="icon"><i class='bx bxl-youtube'></i></div>
                        </div>
                    </div>
                    <div class="col-2">
                        <ul>
                            <li class="nav-title">Navigasi Cepat</li>
                            <li><a href="">Beranda</a></li>
                            <li><a href="">Tentang</a></li>
                            <li><a href="">Galeri</a></li>
                            <li><a href="">Berita</a></li>
                        </ul>
                        <ul>
                            <li class="nav-title">Layanan Kami</li>
                            <li><a href="">Profil Wisata</a></li>
                            <li><a href="">Berita</a></li>
                        </ul>
                        <ul>
                            <li class="nav-title">Hubungi Kami</li>
                            <li><a href="">Ds. Gunturmekar, Kec. Tanjungkerta, Kab. Sumedang, Jawa Barat</a></li>
                            <li><a href="">Phone : +6283126902110</a></li>
                            <li><a href="">Email : samalengoh.camp@gmail.com</a></li>
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
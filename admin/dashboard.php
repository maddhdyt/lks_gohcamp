<?php

include 'core/init.php';
$title = "Home";

$article = mysqli_query($conn, "SELECT * FROM article");
$galery = mysqli_query($conn, "SELECT * FROM galery");
$total_article = mysqli_num_rows($article);
$total_galery = mysqli_num_rows($galery);

include 'partials/header.php';

?>

<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="row mt-4">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1" style="border-radius: 8px;">
                    <div class="card-icon bg-primary">
                        <i class="far fa-newspaper"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Jumlah Artikel</h4>
                        </div>
                        <div class="card-body">
                            <?= $total_article ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1" style="border-radius: 8px;">
                    <div class="card-icon bg-primary">
                        <i class="fas fa-images"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Jumlah Galery</h4>
                        </div>
                        <div class="card-body">
                            <?= $total_galery ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>


<?php include 'partials/footer.php'; ?>
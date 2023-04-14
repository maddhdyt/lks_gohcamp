<?php 
include 'core/conn.php';
$title = "Statistic";

$show = mysqli_query($conn, "SELECT * FROM statistic WHERE id = 1");

$data = mysqli_fetch_assoc($show);

include 'partials/header.php'; ?>
<!-- Main Content -->
<div class="main-content">
<div class="row mt-3">
        <div class="col-12 col-md-6 col-lg-12">
            <div class="card">
                <form action="func/statisticFunc.php" method="post" enctype="multipart/form-data" class="card-body">
                    <input type="hidden" name="id" value="<?= $data['id'] ?>">
                    <h5>Statistic</h5>
                    <div class="form-group">
                        <label>Jumlah Pengunjung</label>
                        <input type="text" name="visitors" class="form-control" value="<?= $data['visitors'] ?>">
                    </div>
                    <div class="form-group">
                        <label>Jumlah Tenda</label>
                        <input type="text" name="tent" class="form-control" value="<?= $data['tent'] ?>">
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <select name="status" class="form-control">
                            <option value="tersedia" <?= $data['status'] == 'tersedia' ? 'selected' : '' ?>>Tersedia</option>
                            <option value="penuh" <?= $data['status'] == 'penuh' ? 'selected' : '' ?>>Penuh</option>
                        </select>
                    </div>
                    <div class="card-footer text-right mr-3">
                    <input name="btnUpdate" type="submit" class="btn btn-primary ml-2" value="Simpan Perubahan">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include 'partials/footer.php'; ?>
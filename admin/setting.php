<?php 
include 'core/conn.php';
$title = "Setting";

$show = mysqli_query($conn, "SELECT * FROM setting WHERE id_setting = 1");

$data = mysqli_fetch_assoc($show);

include 'partials/header.php'; ?>
<!-- Main Content -->
<div class="main-content">
<div class="row mt-3">
        <div class="col-12 col-md-6 col-lg-12">
            <div class="card">
                <form action="func/settingFunc.php" method="post" enctype="multipart/form-data" class="card-body">
                    <input type="hidden" name="id" value="<?= $data['id_setting'] ?>">
                    <h5>Header</h5>
                    <div class="form-group">
                        <label>Background Banner</label>
                        <div class="banner-img-box">
                            <img src="../assets/img/<?= $data['bg_banner'] ?>" alt="">
                        </div>
                        <input type="hidden" name="bgBanner" value="<?= $data['bg_banner'] ?>">
                        <input name="gambar" type="file" class="form-control" accept="image/*">
                    </div>
                    <div class="form-group">
                        <label>Source Banner</label>
                        <input name="bannerSource" type="text" class="form-control" value="<?= $data['source_banner'] ?? null ?>">
                    </div>
                    <div class="form-group">
                        <label>Deskripsi Header</label>
                        <input name="headDesc" type="text" class="form-control" value="<?= $data['head_desc'] ?>">
                    </div>
                    <h5>Content</h5>
                    <div class="form-group">
                        <label>Deskripsi Profil</label>
                        <textarea name="profilDesc" class="form-control"><?= $data['profil_desc'] ?></textarea>
                    </div>
                    <div class="form-group">
                        <label>Link Video Profil<i class="fa-solid fa-link ml-1"></i></label>
                        <input name="profilVideo" type="text" class="form-control" value="<?= $data['profil_video'] ?>" placeholder="Youtube Embed">
                    </div>
                    <div class="form-group">
                        <label>Link Google Maps<i class="fa-solid fa-link ml-1"></i></label>
                        <input name="gmaps" type="text" class="form-control" value="<?= $data['gmaps'] ?>">
                    </div>
                    <h5>Footer</h5>
                    <div class="form-group">
                        <label>Alamat</label>
                        <input name="address" type="text" class="form-control" value="<?= $data['address'] ?>">
                    </div>
                    <div class="form-group">
                        <label>No. Telp</label>
                        <input name="contact" type="text" class="form-control" value="<?= $data['contact'] ?>">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input name="email" type="text" class="form-control" value="<?= $data['email'] ?>">
                    </div>
                    <div class="form-group">
                        <label>Facebook<i class="fa-solid fa-link ml-1"></i></label>
                        <input name="medFacebook" type="text" class="form-control" value="<?= $data['med_facebook'] ?>">
                    </div>
                    <div class="form-group">
                        <label>Instagram<i class="fa-solid fa-link ml-1"></i></label>
                        <input name="medInstagram" type="text" class="form-control" value="<?= $data['med_instagram'] ?>">
                    </div>
                    <div class="form-group">
                        <label>Tiktok<i class="fa-solid fa-link ml-1"></i></label>
                        <input name="medTiktok" type="text" class="form-control" value="<?= $data['med_tiktok'] ?>">
                    </div>
                    <div class="form-group">
                        <label>Youtube<i class="fa-solid fa-link ml-1"></i></label>
                        <input name="medYoutube" type="text" class="form-control" value="<?= $data['med_youtube'] ?>">
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
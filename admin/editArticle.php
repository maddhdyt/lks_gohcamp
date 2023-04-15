<?php
include 'core/init.php';

$title = "Artikel";

$id = $_GET['id'];

$show = mysqli_query($conn, "SELECT * FROM article WHERE id_article = $id");

$data = mysqli_fetch_assoc($show);

include 'partials/header.php'; ?>
<!-- Main Content -->
<style>
    .ck-editor__editable[role="textbox"] {
        /* editing area */
        min-height: 200px;
    }

    .ck-content .image {
        /* block images */
        max-width: 80%;
        margin: 20px auto;
    }
</style>
<div class="main-content">
    <div class="row mt-3">
        <div class="col-12 col-md-6 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4>Edit Artikel</h4>
                </div>
                <form action="func/articleFunc.php" method="post" enctype="multipart/form-data" class="card-body">
                    <input type="hidden" name="id" value="<?= $id ?>">
                    <input type="hidden" name="imageOld" value="<?= $data['image'] ?>">
                    <div class="form-group">
                        <label>Judul</label>
                        <input name="title" type="text" class="form-control" value="<?= $data['title'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Deskripsi</label>
                        <textarea name="description" id="ckeditor"><?= $data['description'] ?></textarea>
                    </div>
                    <div class="form-group">
                        <label>Nama Penulis</label>
                        <input name="writerName" type="text" class="form-control" value="<?= $data['writer_name'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Gambar</label>
                        <input name="image" type="file" class="form-control" value="" accept="image/*" required>
                    </div>
                    <div class="form-group">
                        <label>Sumber</label>
                        <input name="source" type="text" class="form-control" value="<?= $data['img_src'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Keyword</label>
                        <input name="keyword" type="text" class="form-control" value="<?= $data['keyword'] ?>" required>
                    </div>
                    <div class="card-footer text-right">
                        <button type="button" class="btn btn-danger" onclick="history.back()">Cancel</button>
                        <input name="btnUpdate" type="submit" class="btn btn-primary ml-2" value="Submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    ClassicEditor
        .create(document.querySelector('#ckeditor'))
        .catch(error => {
            console.error(error);
        });
</script>
<?php include 'partials/footer.php'; ?>
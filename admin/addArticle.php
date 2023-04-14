<?php
include 'core/conn.php';
$title = "Artikel";
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
                    <h4>Tambah Artikel</h4>
                </div>
                <form action="func/articleFunc.php" method="post" enctype="multipart/form-data" class="card-body">
                    <div class="form-group">
                        <label>Judul</label>
                        <input name="title" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Isi</label>
                        <textarea name="description" id="ckeditor" style="height: 500px;"></textarea>
                        <!-- <input name="description" type="text" class="form-control"> -->
                    </div>
                    <div class="form-group">
                        <label>Nama Penulis</label>
                        <input name="writerName" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Gambar</label>
                        <input name="image" type="file" class="form-control" accept="image/*">
                    </div>
                    <div class="form-group">
                        <label>Sumber</label>
                        <input name="source" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Keyword</label>
                        <input name="keyword" type="text" class="form-control">
                    </div>
                    <!-- <div class="form-group">
                        <label>Slug</label>
                        <input name="slug" type="text" class="form-control">
                    </div> -->
                    <div class="card-footer text-right">
                        <a href="data_petugas.php" class="btn btn-danger">Cancel</a>
                        <input name="btnSave" type="submit" class="btn btn-primary ml-2" value="Submit">
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
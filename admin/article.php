<?php 
include 'core/conn.php';
$title = "Artikel";
include 'partials/header.php'; ?>
<!-- Main Content -->
<div class="main-content">
    <div class="card mt-3" style="border-radius: 8px !important;">
        <div class="card-body">
        <a href="addArticle.php" class="btn btn-primary mb-4">Tambah Artikel</a>
            <table id="raporTable" class="display nowrap" style="width: 100%;">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Isi</th>
                        <th>Tanggal</th>
                        <th>Nama Penyunting</th>
                        <th>Gambar</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <?php
                    $no = 1;
                    $show = mysqli_query($conn, "SELECT * FROM article ORDER BY id_article DESC");
                    while ($data = mysqli_fetch_assoc($show)) :
                    ?>
                <tbody>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= substr($data['title'], "0", "20") . "..."; ?></td>
                            <td><?= substr($data['description'], "0", "20") . "..."; ?></td>
                            <td><?= $data['date'] ?></td>
                            <td><?= $data['writer_name'] ?></td>
                            <td><a href="../assets/img/<?= $data['image'] ?>" target="_blank"><img class="rounded" src="../assets/img/<?= $data['image'] ?>" alt="" width="80px" height="50px"></a></td>
                            <td>
                                <form action="func/articleFunc.php" method="POST">
                                    <div class="d-flex" style="gap: 10px;">
                                        <input type="hidden" name="id" value="<?= $data['id_article'] ?> ">
                                        <input type="hidden" name="image" value="<?= $data['image'] ?> ">
                                        <a href="editArticle.php?id=<?= $data['id_article'] ?>" class="btn_control primary text-white"><i class="fa-regular fa-pen-to-square"></i></a>
                                        <button type="submit" name="btnDelete" class="btn_control secondary text-white" onclick="return confirm('Yakin untuk menghapus?')"><i class="fa-solid fa-trash"></i></button>
                                    </div>
                                </form>
                            </td>
                        </tr>
                </tbody>
                <?php endwhile; ?>
            </table>
        </div>
    </div>
</div>

<?php include 'partials/footer.php'; ?>
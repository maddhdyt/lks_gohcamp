<?php
include '../core/conn.php';

if (isset($_POST['btnSave'])) {
    $title = $_POST['title'];
    $description = htmlspecialchars($_POST['description']);
    $date = date('Y-m-d');
    $writerName = $_POST['writerName'];
    $source = $_POST['source'];
    $keyword = $_POST['keyword'];
    $slug = trim(str_replace(' ','-',$title),'-');
    $namafile = $_FILES['image']['name'] ;
    $dir = "../../assets/img/";
    $random = rand();
    $tmpFile = $_FILES['image']['tmp_name'];

    move_uploaded_file($tmpFile, $dir . $random . '_' . $namafile);
    $image = $random . '_' . $namafile;
    $add = mysqli_query($conn, "INSERT INTO article (id_article, title, description, image, img_src, date, writer_name, keyword, slug) VALUES('', '$title', '$description', '$image', '$source', '$date', '$writerName', '$keyword', '$slug')")  or die(mysqli_error($conn));
    if ($add) {
        echo "<script>alert('Artikel berhasil ditambahkan!')</script>";
        header("refresh:1; url=../article.php");
    } else {
        echo "<script>alert('Gagal menyimpan')</script>";
    }
    
}

if (isset($_POST['btnUpdate'])) {
    $id = $_POST['id'];
    $imageOld = $_POST['imageOld'];
    $title = $_POST['title'];
    $description = htmlspecialchars($_POST['description']);
    $date = date('Y-m-d');
    $writerName = $_POST['writerName'];
    $source = $_POST['source'];
    $keyword = $_POST['keyword'];
    $slug = trim(str_replace(' ','-',$title),'-');
    $namafile = $_FILES['image']['name'] ;
    $dir = "../../assets/img/";
    $random = rand();
    $tmpFile = $_FILES['image']['tmp_name'];

    if ($namafile ==  "") {
        mysqli_query($conn, "UPDATE article SET title = '$title', description = '$description', date = '$date', image = '$imageOld', img_src='$source', writer_name='$writerName', keyword = '$keyword', slug = '$slug' WHERE id_article = $id");
        echo "<script>alert('Artikel berhasil diupdate!')</script>";
        header("refresh:1; url=../article.php");
    } else {
    unlink("../../assets/img/" . $imageOld);
    move_uploaded_file($tmpFile, $dir . $random . '_' . $namafile);
    $image = $random . '_' . $namafile;
    mysqli_query($conn, "UPDATE article SET title = '$title', description = '$description', date = '$date', image = '$image', img_src='$source', writer_name='$writerName', keyword = '$keyword', slug = '$slug' WHERE id_article = $id");
    echo "<script>alert('Artikel berhasil diupdate!')</script>";
    header("refresh:1; url=../article.php");
    }
}

if (isset($_POST['btnDelete'])) {
    $id = $_POST['id'];
    $show = mysqli_query($conn, "SELECT * FROM article WHERE id_article = '$id'");
    $data = mysqli_fetch_assoc($show);

    unlink("../../assets/img/" . $data['image']);
    $delete = mysqli_query($conn, "DELETE FROM article WHERE id_article = '$id'") or die(mysqli_error($conn));
        if ($delete) {
            echo "<script>alert('Artikel berhasil dihapus!');
            </script>";
            header("refresh:1; url=../article.php");
        } else {
            echo "<script>alert('Gagal dihapus')</script>";
        }
}   

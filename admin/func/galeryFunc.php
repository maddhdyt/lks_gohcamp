<?php
include '../core/conn.php';

if (isset($_POST['btnSave'])) {
    $title = $_POST['title'];
    $source = $_POST['source'];
    $namafile = $_FILES['image']['name'] ;
    $dir = "../../assets/img/";
    $random = rand();
    $tmpFile = $_FILES['image']['tmp_name'];

    move_uploaded_file($tmpFile, $dir . $random . '_' . $namafile);
    $image = $random . '_' . $namafile;
    $add = mysqli_query($conn, "INSERT INTO galery (id, title, image, source) VALUES('', '$title', '$image', '$source')")  or die(mysqli_error($conn));
    if ($add) {
        echo "<script>alert('data berhasil di update')</script>";
        header("refresh:1; url=../galery.php");
    } else {
        echo "<script>alert('Gagal dihapus')</script>";
    }
}


if (isset($_POST['btnUpdate'])) {
    $id = $_POST['id'];
    $imageOld = $_POST['imageOld'];
    $title = $_POST['title'];
    $source = $_POST['source'];
    $namafile = $_FILES['image']['name'] ;
    $dir = "../../assets/img/";
    $random = rand();
    $tmpFile = $_FILES['image']['tmp_name'];

    if ($namafile ==  "") {
        mysqli_query($conn, "UPDATE galery SET title = '$title', source = '$source', image = '$imageOld' WHERE id = $id");
        echo "<script>alert('data berhasil di update')</script>";
        header("refresh:1; url=../galery.php");
    } else {
    unlink("../../assets/img/" . $imageOld);
    move_uploaded_file($tmpFile, $dir . $random . '_' . $namafile);
    $image = $random . '_' . $namafile;
    mysqli_query($conn, "UPDATE galery SET title = '$title', source = '$source', image = '$image' WHERE id = $id");
    echo "<script>alert('data berhasil di update')</script>";
    header("refresh:1; url=../galery.php");
    }
}

if (isset($_POST['btnDelete'])) {
    $id = $_POST['id'];
    $show = mysqli_query($conn, "SELECT * FROM galery WHERE id = '$id'");
    $data = mysqli_fetch_assoc($show);

        unlink("../assets/img/" . $data['image']);
    $delete = mysqli_query($conn, "DELETE FROM galery WHERE id = '$id'") or die(mysqli_error($conn));
        if ($delete) {
            echo "<script>alert('Data berhasil dihapus');
            </script>";
            header("refresh:1; url=../galery.php");
        } else {
            echo "<script>alert('Gagal dihapus')</script>";
        }
}  
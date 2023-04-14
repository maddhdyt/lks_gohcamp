<?php
include '../core/conn.php';

$statistic = mysqli_query($conn, "SELECT * FROM statistic WHERE id = 1");

$data = mysqli_fetch_assoc($statistic);

if (isset($_POST['btnUpdate'])) {
    $id = $_POST['id'];
    $visitors = $_POST['visitors'];
    $tent = $_POST['tent'];
    $status = $_POST['status'];

    $update = mysqli_query($conn, "UPDATE statistic SET visitors = '$visitors', tent = '$tent', status = '$status' WHERE id = $id ");

    if ($update) {
        echo "<script>alert('Data berhasil diupdate');
            </script>";
        header("refresh:1; url=../statistic.php");
    } else {
        echo "<script>alert('Gagal diupdate')</script>";
    }
}

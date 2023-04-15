<?php
include '../core/conn.php';

$show = mysqli_query($conn, "SELECT * FROM setting WHERE id_setting = 1");

$data = mysqli_fetch_assoc($show);

if (isset($_POST['btnUpdate'])) {
    $id = $_POST['id'];
    $bgBanner = $_POST['bgBanner'];
    $bannerSource = $_POST['bannerSource'];
    $headDesc = $_POST['headDesc'];
    $profilDesc = $_POST['profilDesc'];
    $profilVideo = $_POST['profilVideo'];
    $address = $_POST['address'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $medFacebook = $_POST['medFacebook'];
    $medInstagram = $_POST['medInstagram'];
    $medTiktok = $_POST['medTiktok'];
    $medYoutube = $_POST['medYoutube'];
    $namafile = $_FILES['gambar']['name'] ;
    $dir = "../../assets/img/";
    $random = rand();
    $tmpFile = $_FILES['gambar']['tmp_name'];

    if ($namafile ==  "") {
        mysqli_query($conn, "UPDATE setting SET bg_banner = '$bgBanner', source_banner = '$bannerSource', head_desc = '$headDesc', profil_desc = '$profilDesc', profil_video = '$profilVideo', address = '$address', contact = '$contact', email = '$email', med_facebook = '$medFacebook', med_instagram = '$medInstagram', med_tiktok = '$medTiktok', med_youtube = '$medYoutube' WHERE id_setting = $id");
        echo "<script>alert('Setting berhasil di update')</script>";
        header("refresh:1; url=../setting.php");
    } else {
    unlink("../../assets/img/" . $data['bg_banner']);
    move_uploaded_file($tmpFile, $dir . $random . '_' . $namafile);
    $gambar = $random . '_' . $namafile;
    mysqli_query($conn, "UPDATE setting SET bg_banner = '$gambar', source_banner = '$bannerSource', head_desc = '$headDesc', profil_desc = '$profilDesc', profil_video = '$profilVideo', address = '$address', contact = '$contact', email = '$email', med_facebook = '$medFacebook', med_instagram = '$medInstagram', med_tiktok = '$medTiktok', med_youtube = '$medYoutube' WHERE id_setting = $id");
    echo "<script>alert('Setting berhasil di update')</script>";
    header("refresh:1; url=../setting.php");
    }
}



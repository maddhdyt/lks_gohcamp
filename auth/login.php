<?php 
    include '../admin/core/conn.php';
    session_start();
    if (isset($_SESSION['adminlogged'])) {
        header("Location: /lks_sumedang/admin/dashboard.php");
    }

    
if (isset($_POST['btnLogin'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password = md5($password);

    $data = mysqli_query($conn, "SELECT * FROM dat_admin WHERE username = '$username'");

    if (mysqli_num_rows($data) === 1) {
        $baris = mysqli_fetch_assoc($data);
        if ($password == $baris['password']) {
            echo "<script>alert('Login berhasil')</script>";
            header("refresh:1; url=/lks_sumedang/admin/dashboard.php");
            $_SESSION['id'] = $baris['id'];
            $_SESSION['adminlogged'] = true;
            $_SESSION['name'] = $baris['nama_admin'];
            exit;
        } else {
            echo "<script>alert('Login gagal')</script>";
            header("refresh:1; url=/lks_sumedang/auth/login.php");
        }
    } else {
        echo "<script>alert('Login gagal')</script>";
        header("refresh:1; url=/lks_sumedang/auth/login.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;900&family=Poppins&display=swap" rel="stylesheet">
    <title>Login Admin</title>
</head>
<style>
    body {
        background-color: #EAEAEA;
    }
</style>
<body>
    <div class="container">
        <div class="login-wrapper">
            <div class="card-login">
                    <div class="logo">
                        Goh<span class="text-primary">Camp</span>
                    </div>
                    <p>Admin login</p>
                <form action="" method="post" class="form-login">
                    <div class="form-group">
                        <input name="username" type="text" class="form-control" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <input name="password" type="password" class="form-control" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <input name="btnLogin" type="submit" class="btn-submit"value="Login">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
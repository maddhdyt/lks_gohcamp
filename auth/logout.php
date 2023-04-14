<?php

session_start();
session_unset();
session_destroy();

echo "<script>alert('Logout berhasil');
            document.location='/lks_sumedang/auth/login.php';
            </script>";

<?php 
include 'conn.php';

session_start();

if (!isset($_SESSION['adminlogged'])) {
    header("Location: /lks_sumedang/auth/login.php");
}
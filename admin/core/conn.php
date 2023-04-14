<?php
$host = 'localhost';
$username = 'root';
$password = '';
$db = 'db_gohcamp';

$conn = mysqli_connect($host, $username, $password, $db) or die(mysqli_error($conn));
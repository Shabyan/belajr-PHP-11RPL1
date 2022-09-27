<?php

$server = "localhost";
$username = "root";
$password = "";
$dbname = "php_native_crud";

$koneksi = mysqli_connect($server, $username, $password, $dbname) or die("Koneksi ke database gagal");

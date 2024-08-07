<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "tsa_web";

//membuat koneksi
$connect = new mysqli($servername, $username, $password, $database);

//cek koneksi
if ($connect->connect_error) {
    die("Koneksi gagal : " . $connect->connect_error);
} else {
    // echo "Koneksi berhasil";
}

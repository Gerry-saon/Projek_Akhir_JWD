<?php
$host	=	"localhost";
$user	=	"root";
$pass	=	"";
$db		=	"db_perpus_jwd";



$conn = mysqli_connect($host, $user, $pass, $db);
if (!$conn) {
    die("Gagal terhubung ke database:" . mysqli_connect_error());
}
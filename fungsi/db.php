<?php
$server = 'localhost';
$uname = 'root';
$pass = '';
$db = 'mahar';
$MySQLiconn = mysqli_connect($server,$uname,$pass,$db);
if (!$MySQLiconn){
    die("Koneksi Gagal Boss !! ". mysqli_connect_error());
}
?>
<?php  
$host   = 'localhost';
$dbname = 'db_spmmu';
$user   = 'root';
$pass   = '';

$mysqli = mysqli_connect($host, $user, $pass, $dbname);

if(!$mysqli){
    die("Koneksi Gagal" . mysqli_connect_error());
}
// echo "Koneksi Berhasil"
?>
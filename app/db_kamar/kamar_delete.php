<?php

include("../../../aute/koneksi.php");
$id = $_GET['id_kamar'];
$query = mysqli_query($mysqli,"DELETE FROM tb_kamar WHERE id_kamar='$id'");

header('location :../tb_kamar');
?>
<?php
include("koneksi.php");

$username = $_POST['username'];
$password = $_POST['password'];

$_SESSION['username'] = $_POST['username'];

$query = mysqli_query($mysqli,"SELECT * from tb_tu where username = '$username' and password = '$password' ");
$result = mysqli_num_rows($query);

if ($result > 0) {
    header("location:../app/template/index.php");
}
else {
    header("location:../index.php?pesan=error");
}

?>
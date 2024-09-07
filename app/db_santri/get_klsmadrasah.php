<?php
include '../../aute/koneksi.php';

$id = $_GET['id'];
$query = mysqli_query($mysqli, "SELECT * FROM kelas_madrasah WHERE id_lembaga = '$id'");

while($kelas = mysqli_fetch_array($query)){
    ?>
    <option value="<?=$kelas['id_kelas']?>"><?=$kelas['nama_kelas']?></option>
    <?php
}
?>
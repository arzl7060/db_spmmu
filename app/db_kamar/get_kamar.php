
<?php
include '../../aute/koneksi.php';

$id = $_GET['id'];
$query = mysqli_query($mysqli, "SELECT * FROM tb_kamar WHERE id_asrama = '$id'");

while($data = mysqli_fetch_array($query)){
    ?>
    <option value="<?=$data['id_kamar']?>"><?=$data['nama_kamar']?></option>
    <?php
}

?>

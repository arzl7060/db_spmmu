<?php
include '../../aute/koneksi.php';

$id = $_GET['id'];
$query = mysqli_query($mysqli, "SELECT * FROM tb_asrama WHERE id_papi = '$id'");

while($data = mysqli_fetch_array($query)){
    ?>
    <option value="<?=$data['id_asrama']?>"><?=$data['nama_asrama']?></option>
    <?php
}

?>
<script>
	function kam() {
		var asrama = $('#asrama').val();
		$('#kamar').load("get_kamar.php?id="+asrama+"");
		
	}
</script>
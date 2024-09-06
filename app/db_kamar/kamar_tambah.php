<?php

include "../../aute/koneksi.php";
require_once '../template/header.php';
require_once 'sidebar.php';
require_once '../template/navbar.php';


?>


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
	integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<br>
<div style="margin-left: 30px;">
	<link href="../template/style.css" rel="stylesheet">
	<h1>Menambah Kamar</h1>
	<br>
	<form>
		<script src="https://code.jquery.com/jquery-3.7.1.min.js"
			integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

		<div class="select-box">
			<label>Santri</label>
			<a style="padding-left: 19px;">:</a>
			<select name="jenis" id="jenis" onchange="asra()" style="margin: 6px; margin-bottom: 12px;">
				<option>Pilih...</option>
				<?php
				$query = mysqli_query($mysqli, "SELECT * FROM jenis");
				while ($data = mysqli_fetch_array($query)) {
					?>
					<option value="<?= $data['id_papi'] ?>"><?= $data['papi'] ?></option>
					<?php
				}
				?>
			</select>
		</div>

		<div class="select-box">
			<label>Asrama</label>
			<a style="padding-left: 8px;">:</a>
			<select name="asrama" id="asrama" onchange="kam()" style="margin: 5px; margin-bottom: 10px;">
				<option>Pilih...</option>
			</select>
		</div>

		<div class="select-box">
			<label>Kamar</label>
			<a style="padding-left: 16px;">:</a>
			<select name="kamar" id="kamar" style="margin: 5px; margin-bottom: 10px;">
				<option>Pilih...</option>
			</select>
		</div>

		<div style="margin-bottom: 9px; margin-right: 70%;">
			<label>Ketua Kamar</label>
			<input type="text" class="form-control" id="ketua" placeholder="Masukkan nama ketua">
		</div>

		<div style="margin-bottom: 9px; margin-right: 70%;">
			<label>Wakil Ketua</label>
			<input type="text" class="form-control" id="wakil" placeholder="Masukkan nama wakil">
		</div>

		<div class="form-group" style="margin-bottom: 9px; margin-right: 70%;">
			<label>Anggota</label>
			<textarea class="form-control" id="" rows="3" placeholder="1. Nama anggota
2. Nama anggota
3. Nama anggota
..."></textarea>
		</div>

		<button type="submit" class="btn btn-primary">Simpan</button>

	</form>
</div>

</section>


<script src="../template/script.js"></script>
<script>
	function asra() {
		var jenis = $('#jenis').val();
		$('#asrama').load("get_asrama.php?id=" + jenis + "");

	}
</script>
</body>

</html>
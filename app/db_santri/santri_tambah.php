<?php
include "../../aute/koneksi.php";
require_once '../template/header.php';
require_once 'sidebar.php';
require_once '../template/navbar.php';
?>

<!-- CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
	integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="../template/app/template/jquery-ui-1.14.0.custom/jquery-ui.css">
<link href="../template/style.css" rel="stylesheet">




<div class="container">
<div class="head-santri">
		<div class="left">
			<h1>Menambah Data Santri</h1>
			<ul class="breadcrumb">
				<li>
					<a class="active" href="tb_santri.php">Kembali</a>
				</li>
				<li><i class='bx bx-chevron-right'></i></li>
				<li>
					<a>Tambah Data</a>
				</li>
			</ul>
		</div>
	</div>

	<form action="" method="post">
		<h4>Data Santri</h4>
		<div class="ns">
			<label>Nama Lengkap Santri</label>
			<input type="text" name="nama_santri" id="nama_santri">
		</div>
		<div class="select-bro">
			<label>Jenis Kelamin :</label>
			<select name="jenis" id="jenis" style="margin-bottom: 7px;">
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
		<div style="width: 47%;" class="kiri">
			<label>Nomor Induk Kependudukan</label>
			<input type="text" name="nisn" id="nisn">
		</div>
		<div style="width: 47%;" class="kanan">
			<label>Nomor Induk Siswa Nasional</label>
			<input type="text" name="nisn" id="nisn">
		</div>
		<div style="width: 47%" class="kiri">
			<label>Nomor Kartu Indonesia Pintar</label>
			<input type="text" name="kip" id="kip">
		</div>
		<div id="form-tanggal-lahir" style="width: 47%;" class="kanan">
			<label>Tempat Lahir</label>
			<input type="text" name="tmp_lahir" id="tmp_lahir">
		</div>

		<div style="width: 47%;" class="kiri">
			<label>Tanggal Lahir</label>
			<div class="input-group">
				<input type="date" id="tgl_lahir" name="tgl_lahir">
			</div>
			<div style="width: 47%;" class="kanan">
				<label>Anak ke</label>
				<input type="text" name="anak" id="anak">
			</div>
			<div style="width: 47%" class="kiri">
				<label>Jumlah Saudara</label>
				<input type="text" name="sodara" id="sodara">
			</div>
		</div>
		<div class="select-bro">
			<label>Status Anak</label>
			<select name="ortu" id="ortu" style="margin-bottom: 7px;">
				<option>Pilih...</option>
				<option>Yatim</option>
				<option>Piatu</option>
				<option>Yatim Piatu</option>
			</select>
		</div>
		<div style="width: 47%; margin-bottom:1px" class="kanan">
			<label>Sekolah Asal</label>
			<input type="text" name="sekolah" id="sekolah">
		</div>
		<div class="form-floating">
			<label class="kiri">Alamat</label>
			<textarea placeholder="Contoh: Dusun Krajan RT 001 RW 001 Desa Sukorejo Sukowono Jember Jawa Timur"
				id="alamat" style="height: 70px; width: 100%; margin-bottom: 5px;"></textarea>
		</div>
		<div style="width: 47%" class="kiri">
			<label>Tahun Lulus Sekolah Asal</label>
			<input type="text" name="lulus" id="lulus">
		</div>
		<div style="width: 47%;" class="kanan">
			<label>Tanggal Masuk Pesantren</label>
			<div class="input-group">
				<input type="date" id="tgl_masuk" name="tgl_masuk">
			</div>
		</div>
		<h4>Data Orangtua</h4>
		<div style="width: 47%" class="kiri">
			<label>Nama Ayah</label>
			<input type="text" name="ayah" id="ayah">
		</div>
		<div style="width: 47%; margin-bottom:1px" class="kanan">
			<label>Nomor Induk Kependudukan</label>
			<input type="text" name="nik1" id="nik1">
		</div>
		<div style="width: 47%" class="kiri">
			<label>Nomor Kartu Keluarga</label>
			<input type="text" name="kk" id="kk">
		</div>
		<div style="width: 47%; margin-bottom:1px" class="kanan">
			<label>Tempat Lahir</label>
			<input type="text" name="tmp_lahir1" id="tmp_lahir1">
		</div>
		<div style="width: 47%;" class="kiri">
			<label>Tanggal Lahir</label>
			<div class="input-group">
				<input type="date" id="tgl_lahir1" name="tgl_lahir1">
			</div>
		</div>
		<div style="width: 47%; margin-bottom: 1px;" class="kanan">
			<label>Pendidikan</label>
			<input type="text" name="pendidikan" id="pendidikan">
		</div>
		<div style="width: 47%" class="kiri">
			<label>Pekerjaan</label>
			<input type="text" name="pekerjaan" id="pekerjaan">
		</div>
		<div style="width: 47%;" class="kanan">
			<label>Nomor Telepon</label>
			<input type="text" name="telepon" id="telepon">
		</div>

		<div style="width: 47%" class="kiri">
			<label>Nama Ibu</label>
			<input type="text" name="ibu" id="ibu">
		</div>
		<div style="width: 47%;" class="kanan">
			<label>Nomor Induk Kependudukan</label>
			<input type="text" name="nik2" id="nik2">
		</div>
		<div style="width: 47%; margin-bottom:1px" class="kiri">
			<label>Tempat Lahir</label>
			<input type="text" name="tmp_lahir2" id="tmp_lahir2">
		</div>
		<div style="width: 47%;" class="kanan">
			<label>Tanggal Lahir</label>
			<div class="input-group">
				<input type="date" id="tgl_lahir2" name="tgl_lahir2">
			</div>
		</div>
		<div style="width: 47%;" class="kiri">
			<label>Pendidikan</label>
			<input type="text" name="pendidikan2" id="pendidikan2">
		</div>
		<div style="width: 47%; margin-bottom: 75px;" class="kanan">
			<label>Pekerjaan</label>
			<input type="text" name="pekerjaan2" id="pekerjaan2">
		</div>
		<div style="width: 47%;" class="kiri">
			<label>Nomor Telepon</label>
			<input type="text" name="telepon2" id="telepon2">
		</div>
		<h4>Data Wali</h4>
		<div style="width: 47%; margin-bottom:1px" class="kiri">
			<label>Nama Wali</label>
			<input type="text" name="ibu" id="ibu">
		</div>
		<div style="width: 47%; margin-bottom:1px" class="kanan">
			<label>Nomor Induk Kependudukan</label>
			<input type="text" name="nik3" id="nik3">
		</div>
		<div style="width: 47%; margin-bottom: 1px;" class="kiri">
			<label>Pekerjaan</label>
			<input type="text" name="pekerjaan3" id="pekerjaan3">
		</div>
		<div style="width: 47%; margin-bottom:109px" class="kanan">
			<label>Nomor Telepon</label>
			<input type="text" name="telepon3" id="telepon3">
		</div>
		<h4>Data Lanjutan</h4>
		<div style="width: 47%" class="kiri">
			<label>Nomor Induk Santri</label>
			<input type="text" name="nis" id="ibu">
		</div>
		<div class="select-bri">
			<label>Madrasah</label>
			<select name="madrasah" id="madrasah" style="margin-top: 2px; margin-bottom: 9px;">
				<option>Pilih...</option>
			</select>
		</div>
		<div class="select-bro">
			<label>Kelas Madrasah</label>
			<select name="kls_madrasah" id="kls_madrasah" style="margin-top: 2px; margin-bottom: 9px;">
				<option>Pilih...</option>
			</select>
		</div>
		<div class="select-bri">
			<label>Sekolah Formal</label>
			<select name="formal" id="formal" style="margin-top: 2px; margin-bottom: 9px;">
				<option>Pilih...</option>
			</select>
		</div>
		<div class="select-bro">
			<label class="text">Kelas Formal</label>
			<select name="kls_formal" id="kls_formal" style="margin-top: 2px; margin-bottom: 9px;">
				<option>Pilih...</option>
			</select>
		</div>
		
		<label class="foto-label">Upload Foto </label>
		<div class="foto">
			<!-- top right bottom left-->
			<input type="file" id="">
		</div>

		<div style="margin-left: 230px; margin-bottom :300px;">
			<a href="" class="btn btn-primary">Simpan</a>
		</div>


	</form>
</div>

</section>

<script src="../template/jquery.js"></script>
<script src="../template/app/template/jquery-ui-1.14.0.custom/jquery-ui.js"></script>
<script src="../template/app/template/jquery-ui-1.14.0.custom/jquery-ui.min.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"
	integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="../template/script.js"></script>

</body>

</html>
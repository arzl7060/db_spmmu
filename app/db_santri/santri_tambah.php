<?php
include "../../aute/koneksi.php";
require_once '../template/header.php';
require_once 'sidebar.php';
require_once '../template/navbar.php';
?>

<!-- CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
	integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

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
		<ul>
			<li>
				<label>Nama Lengkap Santri</label>
				<input type="text" name="nama_santri" id="nama_santri">
			</li>
			<li class="select-bro">
				<label>Jenis Kelamin :</label>
				<select name="jenis" id="jenis" style="margin-bottom: 7px;">
					<option>Pilih...</option>
					<?php
					$query = mysqli_query($mysqli, "SELECT * FROM jenis");
					while ($data = mysqli_fetch_array($query)) {
						?>
						<option value="<?= $data['id_papi'] ?>"><?= $data['jenis_kel'] ?></option>
						<?php
					}
					?>
				</select>
			</li>
		</ul>
		<ul>
			<li>
				<label>Nomor Induk Kependudukan</label>
				<input type="text" name="nik" id="nik">
			</li>
			<li>
				<label>Nomor Induk Siswa Nasional</label>
				<input type="text" name="nisn" id="nisn">
			</li>
		</ul>
		<ul>
			<li>
				<label>Nomor Kartu Indonesia Pintar</label>
				<input type="text" name="kip" id="kip">
			</li>
			<li>
				<label>Tempat Lahir</label>
				<input type="text" name="tmp_lahir" id="tmp_lahir">
			</li>
		</ul>
		<ul>
			<li>
				<label>Tanggal Lahir</label>
				<input class="date" type="date" id="tgl_lahir" name="tgl_lahir">
			</li>
			<li>
				<div style="width: 47%; float:right;">
					<label>Anak ke</label>
					<input type="text" name="anak" id="anak">
				</div>
				<div style="width: 47%; float:left;">
					<label>Jumlah Saudara</label>
					<input type="text" name="sodara" id="sodara">
				</div>
			</li>
		</ul>
		<ul>
			<li class="select-bro">
				<label>Status Anak</label>
				<select name="ortu" id="ortu">
					<option>Pilih...</option>
					<option>Yatim</option>
					<option>Piatu</option>
					<option>Yatim Piatu</option>
				</select>
			</li>
			<li>
				<label>Sekolah Asal</label>
				<input type="text" name="asal_sekolah" id="asal_sekolah">
			</li>
		</ul>
		<div class="form-floating">
			<label>Alamat</label>
			<textarea placeholder="Contoh: Dusun Krajan RT 001 RW 001 Desa Sukorejo Sukowono Jember Jawa Timur"
				id="alamat" style="height: 70px; width: 100%; margin-bottom: 5px;"></textarea>
		</div>
		<ul>
			<li>
				<label>Tahun Lulus Sekolah Asal</label>
				<input type="text" name="lulus" id="lulus">
			</li>
			<li>
				<label>Tanggal Masuk Pesantren</label>
				<input class="date" type="date" id="tgl_masuk" name="tgl_masuk">
			</li>
		</ul>
		<h4>Data Orangtua</h4>
		<ul>
			<li>
				<label>Nama Ayah</label>
				<input type="text" name="ayah" id="ayah">
			</li>
			<li>
				<label>Nomor Induk Kependudukan</label>
				<input type="text" name="nik1" id="nik1">
			</li>
		</ul>
		<ul>
			<li>
				<label>Nomor Kartu Keluarga</label>
				<input type="text" name="kk" id="kk">
			</li>
			<li>
				<label>Tempat Lahir</label>
				<input type="text" name="tmp_lahir1" id="tmp_lahir1">
			</li>
		</ul>
		<ul>
			<li>
				<label>Tanggal Lahir</label>
				<input class="date" type="date" id="tgl_lahir1" name="tgl_lahir1">
			</li>
			<li class="select-bro">
				<label>Pendidikan</label>
				<select name="pendidikan" id="pendidikan">
					<option>Pilih...</option>
					<option>Tidak Sekolah</option>
					<option>Tamat SD/Sederajat</option>
					<option>SLTP/Sederajat</option>
					<option>SLTA/Sederajat</option>
					<option>Diploma 1</option>
					<option>Diploma 2</option>
					<option>Diploma 3</option>
					<option>Diploma 4</option>
					<option>Sarjana</option>
					<option>Magister</option>
					<option>Doktor</option>
				</select>
			</li>
		</ul>
		<ul>
			<li>
				<label>Pekerjaan</label>
				<input type="text" name="pekerjaan" id="pekerjaan">
			</li>
			<li>
				<label>Nomor Telepon</label>
				<input type="text" name="telepon" id="telepon">
			</li>
		</ul>
		<ul>
			<li>
				<label>Nama Ibu</label>
				<input type="text" name="ibu" id="ibu">
			</li>
			<li>
				<label>Nomor Induk Kependudukan</label>
				<input type="text" name="nik2" id="nik2">
			</li>
		</ul>
		<ul>
			<li>
				<label>Tempat Lahir</label>
				<input class="date" type="text" name="tmp_lahir2" id="tmp_lahir2">
			</li>
			<li>
				<label>Tanggal lahir</label>
				<input class="date" type="date" id="tgl_lahir2" name="tgl_lahir2">
			</li>
		</ul>
		<ul>
			<li class="select-bro">
				<label>Pendidikan</label>
				<select name="pendidikan2" id="pendidikan2">
					<option>Pilih...</option>
					<option>Tidak Sekolah</option>
					<option>Tamat SD/Sederajat</option>
					<option>SLTP/Sederajat</option>
					<option>SLTA/Sederajat</option>
					<option>Diploma 1</option>
					<option>Diploma 2</option>
					<option>Diploma 3</option>
					<option>Diploma 4</option>
					<option>Sarjana</option>
					<option>Magister</option>
					<option>Doktor</option>
				</select>
			</li>
			<li>
				<label>Pekerjaan</label>
				<input type="text" name="pekerjaan2" id="pekerjaan2">
			</li>
		</ul>
		<ul>
			<li>
				<label>Nomor Telepon</label>
				<input type="text" name="telepon2" id="telepon2">
			</li>
		</ul>

		<h4>Data Wali</h4>
		<ul>
			<li>
				<label>Nama Wali</label>
				<input type="text" name="wali" id="wali">
			</li>
			<li>
				<label>Nomor Induk Kependudukan</label>
				<input type="text" name="nik3" id="nik3">
			</li>
		</ul>
		<ul>
			<li>
				<label>Pekerjaan</label>
				<input type="text" name="pekerjaan3" id="pekerjaan3">
			</li>
			<li>
				<label>Nomor Telepon</label>
				<input type="text" name="telepon3" id="telepon3">
			</li>
		</ul>

		<h4>Data Lanjutan</h4>
		<ul>
			<li>
				<label>Nomor Induk Santri</label>
				<input type="text" name="nis" id="nis">
			</li>
		</ul>
		<ul>
			<li class="select-bro">
				<label>Madrasah</label>
				<select name="madrasah" id="madrasah">
					<option>Pilih...</option>
					<?php
					$madrasah = mysqli_query($mysqli, "SELECT * FROM tb_madrasah");
					while ($row = mysqli_fetch_assoc($madrasah)): ?>
						<option value="<?= $row['id_madrasah']; ?>"><?= $row['nama_madrasah']; ?></option>
					<?php endwhile; ?>
				</select>
			</li>
			<li class="select-bro">
				<label>Kelas Madrasah</label>
				<select name="kls_madrasah" id="kls_madrasah">
					<option>Pilih...</option>
				</select>
			</li>
		</ul>
		<ul>
			<li class="select-bro">
				<label>Sekolah Formal</label>
				<select name="sekolah" id="sekolah">
					<option>Pilih...</option>
					<?php
					$sekolah = mysqli_query($mysqli, "SELECT * FROM tb_sekolah");
					while ($row = mysqli_fetch_assoc($sekolah)): ?>
						<option value="<?= $row['id_sekolah']; ?>"><?= $row['nama_sekolah']; ?></option>
					<?php endwhile; ?>
				</select>
			</li>
			<li class="select-bro">
				<label class="text">Kelas Formal</label>
				<select name="kls_formal" id="kls_formal">
					<option>Pilih...</option>
				</select>
			</li>
		</ul>

		<label class="foto-label">Upload Foto </label>
		<div class="foto">
			<!-- top right bottom left-->
			<input type="file" id="">
		</div>


		<div style="margin-left: 230px; margin-bottom :300px;">
			<a href="example.php" class="btn btn-primary">Simpan</a>
		</div>


	</form>
</div>

</section>


<script src="https://code.jquery.com/jquery-3.7.1.min.js"
	integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="../template/script.js"></script>
<script>
	$(document).ready(function () {
		$("#madrasah").change(function () {
			var id_madrasah = $(this).val();
			$.ajax({
				url: "get_klsmadrasah.php",
				method: "POST",
				data: { id_madrasah: id_madrasah },
				success: function (data) {
					$("#kls_madrasah").html(data);
					// $("#kecamatan").html('<option value="">Pilih Kecamatan</option>');
				}
			});
		});
	});
</script>

<script>
	$(document).ready(function () {
		$("#sekolah").change(function () {
			var id_sekolah = $(this).val();
			$.ajax({
				url: "get_klsformal.php",
				method: "POST",
				data: { id_sekolah: id_sekolah },
				success: function (data) {
					$("#kls_formal").html(data);
					// $("#kecamatan").html('<option value="">Pilih Kecamatan</option>');
				}
			});
		});
	});
</script>
</body>

</html>
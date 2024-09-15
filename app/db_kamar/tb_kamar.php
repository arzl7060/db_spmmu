<?php
include '../../aute/koneksi.php';
require_once '../template/header.php';
require_once 'sidebar.php';
require_once '../template/navbar.php';

$query = mysqli_query($mysqli, "SELECT * from tb_kamar");
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
	integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href="../template/style.css" rel="stylesheet">
<!-- MAIN -->
<main>
	<div class="head-title">
		<div class="left">
			<h1>Data Kamar</h1>
		</div>
	</div>
	<br>
	<ul class="controler">
		<li>
			<a href="kamar_tambah.php" class="btn btn-primary">Tambah Kamar</a>
		</li>
	</ul>
	<div class="table-data">
		<div class="asrama">
			<div class="head">
				<h3>Asrama</h3>
				<select>
					<option>Semua santri</option>
					<?php
					$jenis = mysqli_query($mysqli, "SELECT * FROM jenis");
					while ($row = mysqli_fetch_assoc($jenis)): ?>
						<option value="<?= $row['id_papi']; ?>"><?= $row['papi']; ?></option>
					<?php endwhile; ?>
				</select>
			</div>
			<ul class="todo-list">
				<?php
				$asrama = mysqli_query($mysqli, "SELECT * FROM tb_asrama");
				while ($row = mysqli_fetch_assoc($asrama)): ?>
					<li class="not-completed" value="<?= $row['id_asrama']; ?>"><?= $row['nama_asrama']; ?></li>
				<?php endwhile; ?>
				<li class="completed">
					<p>Nama</p>

				</li>
			</ul>
		</div>
		<div class="order">
			<div class="head">
				<h3>Kamar</h3>
				<i class='bx bx-search'></i>
				<i class='bx bx-filter'></i>
			</div>
			<table>
				<thead>
					<tr>
						<th>Nama</th>
						<th>Tanggal Lahir</th>
						<th>Status</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>
							<img src="img/people.png">
							<p>Nama</p>
						</td>
						<td>01-10-2021</td>
						<td><span class="status completed">Aktif</span></td>
					</tr>
					<tr>
						<td>
							<img src="img/people.png">
							<p>Nama</p>
						</td>
						<td>01-10-2021</td>
						<td><span class="status pending">Berhenti</span></td>
					</tr>

				</tbody>
			</table>
		</div>
	</div>
</main>
<!-- MAIN -->
</section>

<script src="../template/script.js"></script>

</body>

</html>
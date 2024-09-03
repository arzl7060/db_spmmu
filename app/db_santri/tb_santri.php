<?php
include '../../aute/koneksi.php';
require_once '../template/header.php';
require_once 'sidebar.php';
require_once '../template/navbar.php';

$query = mysqli_query($mysqli, "SELECT * from tb_santri");
?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
	integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<!-- MAIN -->
<main>
	<link href="../template/style.css" rel="stylesheet">
	<div class="head-title">
		<div class="left">
			<h1>Data Santri</h1>
		</div>

	</div><br>
	<a href="santri_tambah.php" class="btn btn-primary">Tambah Santri</a>


	<div class="table-data">
		<div class="order">
			<div class="head">
				<h3>Data Santri</h3>
				<i class='bx bx-search'></i>
				<i class='bx bx-filter'></i>
			</div>
			<table class="table">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama</th>
						<th>NIS</th>
						<th>Alamat</th>
						<th>Aksi</th>
					</tr>
				</thead>

				<tbody>
		</div>
		<?php
		$no = 0;
		while ($result = mysqli_fetch_array($query)) {
			$no++;
			?>
			<tr>
				<td><?=$no?></td>
				<td> $result['nama_santri']; ?></td>
				<td> $result['nis']; ?></td>
				<td> $result['alamat']; ?></td>
				<td>
					<button type="button" class="btn btn-info">Lihat</button>
					<a href="home.php?id=<?php echo $result['id_santri']; ?>&&page=edit"
						class="btn btn-sm btn-warning">Edit</a>
					<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
						integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
						crossorigin="anonymous">

					<a href="delete/delete.php?id=<?php echo $result['id_santri']; ?>"
						class="btn btn-sm btn-danger">Hapus</a>
				</td>
			</tr>
		<?php } ?>
		</tbody>
		</table>
	</div>
</main>
<!-- MAIN -->

<script src="../template/script.js"></script>

</body>

</html>
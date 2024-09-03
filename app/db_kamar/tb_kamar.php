<?php
include '../../aute/koneksi.php';
require_once '../template/header.php';
require_once '../template/sidebar.php';
require_once '../template/navbar.php';


$query = mysqli_query($mysqli,"SELECT * from tb_kamar");


?>


<link href="../template/style.css" rel="stylesheet">



<!-- MAIN -->
<main>


			<div class="head-title">
				<div class="left">
					<h1>Data Kamar</h1>				
					<a href="kamar_tambah.php">
					<span class="text">Tambah Kamar</span>
				</a>
						
					
				</div>
				
			</div>

			
			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Data Santri</h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<table class="table">
						<thead>
							<tr>
								<th>No</th>
								<th>Nama</th>
								<th>Ketua</th>
								<th>Wakil</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
				</div>
				<?php
    $no= 0;
    while ($result = mysqli_fetch_array($query)){
        $no++;
    ?>
    <tr>
        <td><?php echo $result ['id_kamar']; ?></td>
        <td><?php echo $result ['nama']; ?></td>
        <td><?php echo $result ['ketua']; ?></td>
        <td><?php echo $result ['wakil']; ?></td>
        <td>
		<button type="button" class="btn btn-info">Lihat</button>
			<a href="home.php?id=<?php echo $result ['id_kamar']; ?>&&page=edit" class="btn btn-sm btn-warning">Edit</a>
				<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
				
            <a href="delete/delete.php?id=<?php echo $result ['id_kamar']; ?>" class="btn btn-sm btn-danger">Hapus</a>
            
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

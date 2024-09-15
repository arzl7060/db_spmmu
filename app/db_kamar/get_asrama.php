<?php
include '../../aute/koneksi.php';

if (isset($_POST['id_papi'])) {
	$id_papi = $_POST['id_papi'];
	$id_asrama = "SELECT * FROM tb_asrama WHERE id_papi = '$id_papi'";
	$result = mysqli_query($mysqli, $id_asrama);

	if (!$result) {
		die('Query Error: ' . mysqli_error($mysqli)); // Tambahkan ini untuk melihat error query
	}

	if (mysqli_num_rows($result) > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			echo '<option value="' . htmlspecialchars($row['id_asrama']) . '">' . htmlspecialchars($row['nama_asrama']) . '</option>';
		}
	} else {
		echo '<option value="">Tidak ada kelas ditemukan</option>';
	}
}
?>

<script>
	$(document).ready(function () {
		$("#asrama").change(function () {
			var id_asrama = $(this).val();
			$.ajax({
				url: "get_kamar.php",
				method: "POST",
				data: { id_asrama: id_asrama },
				success: function (data) {
					$("#kamar").html(data);
				}
			});
		});
	});
</script>
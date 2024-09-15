<?php
include '../../aute/koneksi.php';

if (isset($_POST['id_asrama'])) {
    $id_asrama = $_POST['id_asrama'];
    $kamar = "SELECT * FROM tb_kamar WHERE id_asrama = '$id_asrama'";
    $result = mysqli_query($mysqli, $kamar);

    if (!$result) {
        die('Query Error: ' . mysqli_error($mysqli)); // Tambahkan ini untuk melihat error query
    }

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<option value="' . htmlspecialchars($row['id_kamar']) . '">' . htmlspecialchars($row['nama_kamar']) . '</option>';
        }
    } else {
        echo '<option value="">Tidak ada kelas ditemukan</option>';
    }
}
?>
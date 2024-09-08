<?php
include '../../aute/koneksi.php';

if (isset($_POST['id_sekolah'])) {
  $id_sekolah = $_POST['id_sekolah'];
  $kelas = "SELECT * FROM kelas_formal WHERE id_sekolah = '$id_sekolah'";
  $result = mysqli_query($mysqli, $kelas);

  if (!$result) {
    die('Query Error: ' . mysqli_error($mysqli)); // Tambahkan ini untuk melihat error query
  }

  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      echo '<option value="' . htmlspecialchars($row['id_kelas']) . '">' . htmlspecialchars($row['nama_kelas']) . '</option>';
    }
  } else {
    echo '<option value="">Tidak ada kelas ditemukan</option>';
  }
}
?>
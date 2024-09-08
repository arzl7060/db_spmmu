<?php
include '../../aute/koneksi.php';
require_once '../template/header.php';
require_once 'sidebar.php';
require_once '../template/navbar.php'

  ?>
<!DOCTYPE html>
<html>

<head>
  <title>Combobox Bertingkat</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="../template/style.css" rel="stylesheet">
</head>

<body>
  <h1>Combobox Bertingkat</h1>
  <form>
    <div>
      <label for="madrasah">Madrasah:</label>
      <select name="madrasah" id="madrasah">
        <option value="">Pilih Madrasah</option>
        <?php
        $madrasah = mysqli_query($mysqli, "SELECT * FROM tb_madrasah");
        while ($row = mysqli_fetch_assoc($madrasah)): ?>
          <option value="<?= $row['id_madrasah']; ?>"><?= $row['nama_madrasah']; ?></option>
        <?php endwhile; ?>
      </select>
    </div>
    <div>
      <label for="kls_madrasah">kelas:</label>
      <select name="kls_madrasah" id="kls_madrasah">
        <option value="">Pilih Kelas</option>
      </select>
    </div>
    <div>
      <label for="kecamatan">Kecamatan:</label>
      <select name="kecamatan" id="kecamatan">
        <option value="">Pilih Kecamatan</option>
      </select>
    </div>
  </form>
  <script src="../template/jquery.js"></script>

  <script>
    $(document).ready(function () {
      $("#madrasah").change(function () {
        var id_madrasah = $(this).val();
        $.ajax({
          url: "get_klsmadrasah.php",
          method: "POST",
          data: { id_madrasah: id_madrasah },
          success: function (data) {
            console.log(data);
            $("#kls_madrasah").html(data);
          }
        });
      });
    });
  </script>
</body>

</html>
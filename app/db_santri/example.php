<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>
    <div class="select-bro">
        <label>Madrasah</label>
        <select name="madrasah" id="madrasah" onchange="kelas()">
            <option>Pilih...</option>
            <?php
            include '../../aute/koneksi.php';
            $query = mysqli_query($mysqli, "SELECT * FROM tb_madrasah");
            while ($data = mysqli_fetch_array($query)) {
                ?>
                <option value="<?= $data['id_lembaga'] ?>"><?= $data['nama_madrasah'] ?></option>
            <?php } ?>
        </select>
    </div>

    
        <label>Kelas Madrasah</label>
        <select name="kls_madrasah" id="kls_madrasah">



    <script>
        function kelas() {
            var madrasah = $('#madrasah').val();
            $('#kls_madrasah').load("get_klsmadrasah.php?id=" +madrasah+ "");
        }
    </script>
    <script src="../template/script.js"></script>
    
</body>

</html>
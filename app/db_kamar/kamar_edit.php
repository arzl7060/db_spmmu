<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<center>
<h2>Menu Edit</h2>
<form action="edit.php?id=<?php echo $_GET['id'];?>" method="post">
  <div class="form-group">
    <label for="inputNama">Nama Lengkap</label>
    <input type="text" class="form-control" id="nama" aria-describedby="namaHelp" placeholder="Masukkan Nama" name="nama" required>
  </div>

  <div class="form-group">
    <label for="inputNo_akun">Nomor Akun</label>
    <input type="text" class="form-control" id="no_akun" placeholder="Buat Nomor Akun" name="no_akun" required>
  </div>

  <div class="form-group">
    <label for="inputNo_telp">Nomor Telepon</label>
    <input type="text" class="form-control" id="no_telp" placeholder="Masukkan Nomor Telepon" name="no_telp" required>
  </div>

  <button type="submit" class="btn btn-primary">Simpan</button>
</form>
</center>
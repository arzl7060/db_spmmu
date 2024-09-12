<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  include '../../aute/koneksi.php';

  $query = mysqli_query($mysqli, "SELECT * from tb_santri");
  ?>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Boxicons -->
  <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
  <!-- My CSS -->
  <link rel="stylesheet" href="../template/style.css">
  <link rel="icon" type="image/png" href="../../images/icons/ppmu.png" />
  <title>Maqna'ul Ulum</title>
</head>

<body>

  <!-- SIDEBAR -->
  <section id="sidebar">
    <a href="#" class="brand">
      <img src="../../images/icons/ppmu.png" width="40px" style="margin-left: 10px;">
      <span class="text" style="margin-left: 30px;">Maqna'ul Ulum</span>
    </a>
    <ul class="side-menu top">
      <li class="active">
        <a href="#">
          <i class='bx bxs-dashboard'></i>
          <span class="text">Dashboard</span>
        </a>
      </li>
      <li>
        <a href="../tb_kamar.php">
          <i class='bx bxs-shopping-bag-alt'></i>
          <span class="text">Data Santri Putra</span>
        </a>
      </li>
      <li>
        <a href="#">
          <i class='bx bxs-doughnut-chart'></i>
          <span class="text">Data Santri Putri</span>
        </a>
      </li>
      <li>
        <a href="#">
          <i class='bx bxs-message-dots'></i>
          <span class="text">Data Kamar</span>
        </a>
      </li>
      <li>
        <a href="#">
          <i class='bx bxs-group'></i>
          <span class="text">Data Kelas</span>
        </a>
      </li>
    </ul>
    <ul class="side-menu">
      <li>
        <a href="#">
          <i class='bx bxs-cog'></i>
          <span class="text">Data Lembaga</span>
        </a>
      </li>
      <li>
        <a href="../index.php" class="logout">
          <i class='bx bxs-log-out-circle'></i>
          <span class="text">Keluar</span>
        </a>
      </li>
    </ul>
  </section>
  <!-- SIDEBAR -->

  <!-- CONTENT -->
  <section id="content">
    <!-- NAVBAR -->
    <nav>
      <i class='bx bx-menu'></i>
      <a href="#" class="nav-link">Cari</a>
      <form action="#">
        <div class="form-input">
          <input type="search" placeholder="Search...">
          <button type="submit" class="search-btn"><i class='bx bx-search'></i></button>
        </div>
      </form>
      <input type="checkbox" id="switch-mode" hidden>
      <label for="switch-mode" class="switch-mode"></label>

      <!-- icon notif -->
      <a href="#" class="notification">
        <i class='bx bxs-bell'></i>
        <span class="num">8</span>
      </a>
      <a href="#" class="profile">
        <img src="img/people.png">
      </a>
    </nav>
    <!-- NAVBAR -->

    <!-- MAIN -->
    <main>
      <link href="../template/style.css" rel="stylesheet">
      <div class="head-title">
        <div class="left">
          <h1>Data Santri</h1>
        </div>
      </div><br>
      <ul class="controler">
        <li>
          <a href="santri_tambah.php" class="btn btn-primary">Tambah Santri</a>
        </li>
        <li class="select-control">
          <label>Santri</label>
          <select name="papi" id="papi">
            <option>Pilih...</option>
            <?php
            $jenis = mysqli_query($mysqli, "SELECT * FROM jenis");
            while ($row = mysqli_fetch_assoc($jenis)): ?>
              <option value="<?= $row['id_papi']; ?>"><?= $row['papi']; ?></option>
            <?php endwhile; ?>
          </select>
        </li>
      </ul>

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
            <td><?= $no ?></td>
            <td> $result['nama_santri']; ?></td>
            <td> $result['nis']; ?></td>
            <td> $result['alamat']; ?></td>
            <td>
              <button type="button" class="btn btn-info">Lihat</button>
              <a href="home.php?id=<?php echo $result['id_santri']; ?>&&page=edit" class="btn btn-sm btn-warning">Edit</a>
              <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
                integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
                crossorigin="anonymous">

              <a href="delete/delete.php?id=<?php echo $result['id_santri']; ?>" class="btn btn-sm btn-danger">Hapus</a>
            </td>
          </tr>
        <?php } ?>
        </tbody>
        </table>
      </div>
    </main>
    <!-- MAIN -->
  </section>
  <script src="../template/script.js"></script>

</body>

</html>
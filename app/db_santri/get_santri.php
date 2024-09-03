
<label>Asrama</label>
<a style="padding-left: 19px;">:</a>
<select name="asrama" id="asra" onchange="asrama()" style="margin: 6px; margin-bottom: 12px;">
    <option>Pilih...</option>
    <?php
    $id = $_POST['id'];
    $mysqli = mysqli_connect("localhost", "root", "", "db_spmmu");
    $query = mysqli_query($mysqli, "SELECT * FROM tb_asrama WHERE id_papi='$id'");
    while ($data = mysqli_fetch_array($query)) {
        ?>
        <option value="<?php echo $data['id'] ?>"><?php echo $data['nama'] ?></option>
        <?php
    }
    ?>
</select>
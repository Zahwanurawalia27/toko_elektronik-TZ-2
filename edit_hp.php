<?php
include "elektronik.php";
$id = $_GET['id'];
$data = mysqli_query($elektronik,"SELECT * FROM `tb_handphone` WHERE `id_hp` = $id");

$tampil = mysqli_fetch_array($data);

?>


<form action="update_hp.php" method="POST">
    <input type="text" name="id_hp" value="<?php echo $id; ?>" hidden=""><br>
    <input type="text" name="merk_hp" value="<?php echo $tampil['merk_hp']?>" ><br>
    <input type="number" name="harga_hp" value="<?php echo $tampil['harga_hp']?>" ><br>
    <input type="number" name="stok_hp" value="<?php echo $tampil['stok_hp']?>" ><br>
    <input type="submit" value="kirim">
</form>
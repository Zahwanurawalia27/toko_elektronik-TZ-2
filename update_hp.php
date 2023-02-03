<?php
include "elektronik.php";
echo $id = $_POST['id_hp'];
echo $merk_hp = $_POST['merk_hp'];
echo $harga_hp = $_POST['harga_hp'];
echo $stok_hp = $_POST['stok_hp'];

$data = mysqli_query($elektronik,"UPDATE `tb_handphone` SET `merk_hp`='$merk_hp',`harga_hp`='$harga_hp',`stok_hp`='$stok_hp' WHERE `id_hp`=$id");

header('Location: tampil_hp.php');
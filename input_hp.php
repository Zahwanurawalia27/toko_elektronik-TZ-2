<?php

include 'elektronik.php';
$merk_hp = $_POST['merk_hp'];
$harga_hp = $_POST['harga_hp'];
$stok_hp = $_POST['stok_hp'];

$data = mysqli_query($elektronik, "INSERT INTO `tb_handphone`(`merk_hp`, `harga_hp`, `stok_hp`) VALUES ('$merk_hp','$harga_hp','$stok_hp')");

header("location: tampil_hp.php");
<?php

include "elektronik.php";

$id = $_GET['id'];
$data = mysqli_query($elektronik,"DELETE FROM `tb_handphone` WHERE `id_hp` = $id");

if ($data == TRUE) {
    header("Location: tampil_hp.php");
}else{
    echo "gagal hapus";
}




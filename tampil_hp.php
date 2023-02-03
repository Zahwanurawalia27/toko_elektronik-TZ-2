<?php

include 'elektronik.php';
$data = mysqli_query($elektronik, "SELECT * FROM `tb_handphone`");
?>
<a href="order_hp.php">tambah data</a><br>

<?php
foreach($data as $data){
    echo $data['merk_hp'];
    echo $data['harga_hp'];
    echo $data['stok_hp'];
    ?>
    <a href="delete_hp.php?id=<?php echo $data['id_hp']  ?>">Hapus</a>
    &nbsp
    <a href="edit_hp.php?id=<?php echo $data['id_hp']  ?>">Edit</a><br>
    <?php
}
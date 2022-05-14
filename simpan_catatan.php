<?php 
session_start();
$Nama = $_SESSION['Nama'];
$No_Hp = $_SESSION['No_Hp'];

$tanggal =$_POST['tanggal'];
$jam =$_POST['jam'];
$Barang=$_POST['Barang'];
$Jumlah =$_POST['Jumlah'];
$Harga =$_POST['Harga'];
$id_catatan=rand(1000,100000);

$format = "\n$Nama|$No_Hp|$tanggal|$jam|$Barang|$Jumlah|$Harga";
$format = "\n$id_catatan|$Nama|$No_Hp|$tanggal|$jam|$Barang|$Jumlah|$Harga";
//buka file catatan.txt
$file = fopen('catatan.txt','a');
fwrite($file, $format);

//tutup file catatan
fclose($file); ?>

<script type="text/javascript">
alert("Data catatan belanja berhasil ditambahkan");
window.location.assign('user.php');
</script>
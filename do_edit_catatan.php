<?php 
session_start();
$Nama = $_SESSION['Nama'];
$No_Hp = $_SESSION['No_Hp'];

$tanggal =$_POST['tanggal'];
$jam=$_POST['jam'];
$barang=$_POST['barang'];
$jumlah =$_POST['jumlah'];
$harga =$_POST['harga'];
$id_catatan=$_POST['id_catatan'];

$format = "\n$id_catatan|$Nama|$No_Hp|$tanggal|$jam|$barang|$jumlah|$harga";

//buka file catatan.txt
$no= 0;
$data = file('catatan.txt',FILE_IGNORE_NEW_LINES);
foreach($data as $value){
    $no++;
    $fragment = explode("|", $value);
    if($fragment['0']==$id_catatan){
        $line = $no-1; //mencati urutan baris ke berapa
    }
}

$data[$line] = $format;
$data = implode("\n", $data);
file_put_contents('catatan.txt',$data);
?>

<script type="text/javascript">
alert("Perubahan data catatan berhasil");
window.location.assign('user.php');
</script> 
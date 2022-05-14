<?php 

$Nama = $_POST['Nama'];
$No_Hp = $_POST['No_Hp'];

$format = "$Nama|$No_Hp";
$file = file('config.txt',FILE_IGNORE_NEW_LINES);

if(in_array($format, $file)){ // Jika data ditemukan
    session_start();
    $_SESSION['Nama'] = $Nama;
    $_SESSION['No_Hp'] = $No_Hp;

    header('location:user.php');

 
}else{ // jika data tidak ditemukan ?>
    <script type ="text/javascript">
        alert("!!! Nama atau No Hp anda salah!");
        window.location.assign('index.php');
    </script> 
    <?php
}


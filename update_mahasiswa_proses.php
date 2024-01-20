<?php
include ("koneksi.php");

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $ID= $_POST['ID'];
    $nama = $_POST["nama"];
    $NIM =  $_POST["NIM"] ;

    $sql ="UPDATE mahasiswa SET nama='$nama', NIM='$NIM' WHERE ID='$ID";
    if (mysqli_query($conn,$sql)){
        echo "Mahasiswa berhasil ditambahkan";
    }else
    {
        echo "error: ".$sqli.mysqli_eror($conn);
    }
}

mysqli_close($conn);
?>
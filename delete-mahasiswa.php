<?php
include("koneksi.php");

if($_SERVER["REQUEST_METHOD"]=="GET"){
    $ID =$_GET["ID"];

    $sql="DELETE FROM mahasiswa WHERE ID='$ID'";

    if(mysqli_query($conn, $sql)){
        header("location : index.php");
        exit();
    }
    else{
        echo "Eror deleting recorda:" . mysqli_eror($conn);}
}

mysqli_close($conn);
?>
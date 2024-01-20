<!-- index.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum Website</title>
</head>
<body>
    <h1> Daftar Mahasiswa</h1>
    <?php
    include "koneksi.php";
    if(isset($_GET['ID'])){
        $ID = $_GET['ID'];

        $qsql = " select * from mahasiswa where id ='$ID'";
        $hasil = mysqli_query($conn, $qsql);

        if(mysqli_num_rows($hasil)> 0){
            $row = mysqli_fetch_assoc( $hasil );
            $ID= $row['ID'];
            $nama = $row['nama'];
            $NIM = $row['NIM'] ;
        }
        else{
            echo "Data kosong";
        }
        }else {
            echo " id tidak dapat ditemukan dari form sebelumnya";
        }
        ?>
        <!--form untuk menambahkan mahasiswa-->
        <form action ="update_mahasiswa_proses.php" method="post">
            <label for = "ID">ID</label>
            <input type="text" name="ID" value="<?php echo $ID; ?>" readonly="true">

            <label for = "nama">nama</label>
            <input type="text" name="nama" value="<?php echo $nama; ?>">

            <label for = "NIM">NIM</label>
            <input type="text" name="NIM" value="<?php echo $NIM; ?>">

            <button type="submit">Tambah Mahasiswa</button>
    </form>
    
</body>
</html>
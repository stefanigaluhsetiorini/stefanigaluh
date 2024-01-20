<!-- tambah mahasiswa-->
<?php
include("koneksi.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$nama = $_POST["nama"];
$NIM = $_POST["NIM"];

$sql = "INSERT INTO mahasiswa (nama, NIM) VALUES ('$nama', '$NIM')";

if (mysqli_query($conn , $sql)) {
    echo "Mahasiswa berhasil ditambahkan.";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
mysqli_close($conn);
?>

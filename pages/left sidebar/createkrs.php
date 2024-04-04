<?php
include_once("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $no = $_POST['no'];
    $kode = $_POST['kode'];
    $nama_matkul = $_POST['nama_matkul'];
    $kelas = $_POST['kelas'];
    $sks = $_POST['sks'];
    $waktu = $_POST['waktu'];

    $sql = "INSERT INTO krs ( NO, KODE, NAMA_MATKUL, KELAS, SKS, WAKTU) VALUES ('$no','$kode', '$nama_matkul', '$kelas', '$sks', '$waktu')";

    if (mysqli_query($con, $sql)) {
        echo "Data berhasil ditambahkan.";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }
}
?>
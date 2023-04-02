<?php

$conn = mysqli_connect('localhost','n1577759_fransiska1','latihanphp123','n1577759_fransiska1');

if(isset($_POST['tambahdata'])) {

    $Tanggal    = $_POST['Tanggal'];
    $Keterangan = $_POST['Keterangan'];
    $Debit      = $_POST['Debit'];
    $Kredit     =$_POST['Kredit'];
    $sql = "INSERT INTO keuangan (id, tanggal, keterangan, debit, kredit) VALUES ( '','$Tanggal', '$Keterangan', '$Debit', '$Kredit')";
    mysqli_query($conn,$sql);
    header("location: index.php");
}
$AmbilData = mysqli_query($conn, "SELECT * FROM keuangan");

if(isset($_POST['ubahdata'])) {
    $ID         = $_POST['id'];
    $Tanggal    = $_POST['Tanggal'];
    $Keterangan = $_POST['Keterangan'];
    $Debit      = $_POST['Debit'];
    $Kredit     =$_POST['Kredit'];
    $sql = "UPDATE keuangan  SET tanggal= '$Tanggal',keterangan= '$Keterangan',debit='$Debit',kredit='$Kredit' WHERE id=$ID";
    mysqli_query($conn,$sql);
    header("location: index.php");
}
$AmbilData = mysqli_query($conn, "SELECT * FROM keuangan");

if (isset($_POST['hapus'])) {
    $ID = $_POST['id'];
    $query = "DELETE FROM keuangan WHERE id = '$ID'";
    $result = mysqli_query($conn, $query);
    header('Location: index.php');
}



?>



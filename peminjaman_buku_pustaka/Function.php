<?php
session_start();

//Membuat koneksi ke database
$conn = mysqli_connect ("localhost","root","","Perpustakaan");

//Menambah buku baru
if(isset($_POST['addnewbuku'])){
    $npm_mhs = $_POST['npm_mhs'];
    $nama_mhs = $_POST['nama_mhs'];
    $alamat_mhs = $_POST['alamat_mhs'];
    
    $addtotable = mysqli_query ($conn,"insert into mahasiswa(npm_mhs,nama_mhs,alamat_mhs) values('$npm_mhs','$nama_mhs','$alamat_mhs')");
    if ($addtotable){
        header('location:index.php');
    } else {
        echo 'Gagal';
        header('location:index.php');
    }
}
?>
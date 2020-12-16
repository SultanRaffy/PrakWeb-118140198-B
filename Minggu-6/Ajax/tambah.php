<?php

include 'koneksi.php';
$nim        = $_POST["nim"];
$nama       = $_POST["nama"];
$prodi      = $_POST["prodi"];
$angkatan   = $_POST["angkatan"];

$sql = "INSERT INTO mahasiswa (nim,nama,prodi,angkatan) VALUES ('$nim','$nama','$prodi','$angkatan') ";
$hasil = mysqli_query($con, $sql);


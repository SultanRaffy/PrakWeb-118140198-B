<?php
    include("koneksi.php");
        
    $data = $_POST['nrp'];
    $delete = mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE nrp = '$data'");
    if(mysqli_affected_rows($koneksi)==1){
        echo "<b> Data Berhasil Dihapus Dari Database</b>";
    }else{
        echo "<b> Data Gagal Dihapus Dari Database </b>";
    }
    header("location:landingpage.php?delete=1");
?>

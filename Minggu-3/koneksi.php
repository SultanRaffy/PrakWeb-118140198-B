<?php

    $koneksi = mysqli_connect("localhost","root","","pemweb");
        if(!$koneksi){
            die("Connection Failed : " . mysqli_connect_error());
        }
?>


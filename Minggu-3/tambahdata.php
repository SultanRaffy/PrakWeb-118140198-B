<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .hasil{
            float: left;
            /* width: 100px; */
            margin-left: 40%;
            text-align: left;
        }
    </style>
</head>
<body>
    <?php
        include("koneksi.php");
       
        $nrp = $_POST['nrp'];
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $id_jur = $_POST['id_jur'];
        $conn = $koneksi;
    ?>

    <?php
        if($id_jur == "Telekomunikasi"){
            $id_jur = "IF100";
        }elseif($id_jur == "Elka"){
            $id_jur = "IF101";
        }elseif($id_jur == "IT"){
            $id_jur = "IF102";
        }elseif($id_jur =="Elin"){
            $id_jur = "IF103";
        }
        $sql = "INSERT INTO mahasiswa (NRP, nama, alamat, id_jur) values ('$nrp','$nama','$alamat','$id_jur')";
        $view = mysqli_query($conn, "SELECT * FROM mahasiswa ORDER BY mahasiswa.NRP DESC");
    ?>
    <?php
        header("location:landingpage.php?tambahdata=1");
    ?>
        <div class="hasil">
            <?php if(mysqli_query($conn, $sql)){
                echo "Data Berhasil ditambahkan";
            }else{
                echo "Error : " . $sql . "<br>" . mysqli_error($conn);
            }
            ?>
        </div>
</body>
</html>
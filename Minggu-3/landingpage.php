<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <style>
        /* form {
        overflow: hidden;
        } */
        
        label {
            float: left;
            width: 100px;
            margin-left: 40%;
            text-align: left;
        }
        
        input {
            float: left;
            /* margin-left: 50%; */
        }

        .button{
            margin-left: 40%;
        }
        .select{
            position: absolute;
            margin-left: -24%;

        }

        .landingpage{
            /* position: absolute;
            left: 50%;
            margin-left: -50px; */
            text-align: center;
            /* top: 50%; */
            /* transform: translate(-50%, -50%); */
        }
        .table{
            text-align: center;
            margin-left: 40%;
        }
        
    </style>
</head>
<body>
    <div class="landingpage">
        <h1>DATA MAHASISWA PENS</h1>
        =============================================================
        <h2>TAMBAH DATA</h2>
        <div class="container">
            <?php if(isset($_GET['tambahdata']) && $_GET['tambahdata'] == 1){ ?>
                <div class="alert alert-success" role="alert">
                    Berhasil Menambahkan Data.
                </div>
            <?php } ?>

            <form action="tambahdata.php" method="POST">
                <div class="form1">
                    <label for=""><b>NRP</b></label>
                    <input type="text" name="nrp">
                </div>
                <br><br>
                <div class="form2">
                    <label for=""><b>Nama</b></label>
                    <input type="text" name="nama">
                </div>
                <br><br>
                <div class="form3">
                    <label for=""><b>Alamat</b></label>
                    <input type="text" name="alamat">
                </div>
                <br><br>
                <div class="form4">
                    <label for=""><b>Jurusan</b></label>
                    <select name="id_jur" class="select">
                        <option value='Telekomunikasi'>Telekomunikasi</option>
                        <option value='Elka'>Elka</option>
                        <option value='IT'>IT</option>
                        <option value='Elin'>Elin</option>
                    </select>
                </div>
                <br><br>
                <input type="submit" name="submit" class="button">
                <br><br>
            </form>
            =============================================================
            <h2>SEARCH DATA</h2>
            <?php include 'koneksi.php'; 

                if(isset($_GET['search'])){
                    $cari = $_GET['search']; 
                    $getData = mysqli_query($koneksi, "SELECT * FROM mahasiswa JOIN jurusan ON mahasiswa.id_jur = jurusan.id_jur WHERE nama LIKE '%".$cari."%'") or die(mysqli_error());
                } else {
                    $getData = mysqli_query($koneksi, "SELECT * FROM mahasiswa, jurusan WHERE mahasiswa.id_jur = jurusan.id_Jur") or die(mysqli_error());
                }
            ?>

            <form action="" method="GET">
                <label for=""><b>Nama</b></label>
                <input type="text" name="search" placeholder="Cari Nama" value="<?php if(isset($_GET['search'])){ echo $_GET['search']; } ?>" class="form-control">        
                <input type="submit" value="cari">
            </form>
            <br><br>
            =============================================================
            <h2>HAPUS DATA</h2>
            <form action="delete.php" method="POST">
                <div>
                    <label for=""><b>NRP</b></label>
                    <input type="text" name="nrp">
                    <input type="submit" value="hapus data"><br><br>
                </div>
            </form>
        </div>

        <br><br>
        <table class="table" border="1">
            <tr>
                <th>NRP</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>ID Jurusan</th>
            </tr>

            <?php while($data = mysqli_fetch_array($getData)){ ?>
                <tr>
                    <th> <?php echo $data['nrp'] ?> </th>
                    <th> <?php echo $data['nama'] ?> </th>
                    <th> <?php echo $data['alamat'] ?> </th>
                    <th> <?php echo $data['id_jur'] ?> </th>
                
                </tr>
            <?php } ?>
        </table>

    </div>
    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container{
            margin-left: 40%;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Hitung Faktorial</h1>
        <form method="POST">
                <label for="">Input Nilai </label>
                <input type="number" name="input">
                <button type="submit" name="hitung">Hitung</button>
        </form>
        
        <?php
            function faktorial($x){
                $angka = 1;
                $hasil = 1;
                while($angka <= $x){
                    $hasil = $hasil * $angka;
                    $angka = $angka + 1;
                }
                return $hasil;
            }
            echo "<br>";
            if(isset($_POST['hitung'])){
                $x=$_POST['input'];
                echo "Hasilnya adalah " . faktorial($x);
            }
        ?>
    </div>
</body>
</html>
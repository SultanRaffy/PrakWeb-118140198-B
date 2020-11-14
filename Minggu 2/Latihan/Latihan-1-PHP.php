<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>118140198 Sultan Raffy</title>

    <style>
        form {
        overflow: hidden;
        }
        
        label {
            float: left;
            width: 200px;
            padding-right: 24px;
        }
        
        input {
            float: left;
        }
        
    </style>
</head>
<body>
    <div class="container">
        <form method="POST">
            <div class="form1">
                <label for="">Angka Pertama</label>
                <input type="number" name="1" value="<?php if(isset($_POST['submit'])){ echo $_POST['1'];}?>">
            </div>
            <br><br>
            <div class="form2">
                <label for="">Angka Kedua</label>
                <input type="number" name="2" value="<?php if(isset($_POST['submit'])){ echo $_POST['2'];}?>">
            </div>
            <input type="submit" name="submit">
        </form>
    </div>

    <div class="container2">
    <?php
        if(isset($_POST['submit']) && $_POST['1'] != "" && $_POST['2'] != ""){
            $operator = ['+','-','*','/','%'];
            $nilai = [ $_POST['1'], $_POST['2'] ];
    ?>
        
        <?php foreach($nilai as $key => $nilai2){ ?>
            <p>Bilangan <?php echo $key + 1; ?> = <?php echo $nilai2; ?></p>
        <?php } ?>
        <p>Berikut Merupakan hasil dari setiap Operasi :</p>

        <p>
            <?php
                foreach($operator as $operator2){
                    if($operator2 == '+'){
                        echo "PENJUMLAHAN" . "<br>";
                        echo "Operator : " . $operator2 . "<br>";
                        echo "Hasil : " . ($nilai[0] + $nilai[1]) . "<br><br>";
                    }elseif($operator2 == '-'){
                        echo "PENGURANGAN" . "<br>";
                        echo "Operator : " . $operator2 . "<br>";
                        echo "Hasil : " . ($nilai[0] - $nilai[1]) . "<br><br>";
                    }elseif($operator2 == '*'){
                        echo "PERKALIAN" . "<br>";
                        echo "Operator : " . $operator2 . "<br>";
                        echo "Hasil : " . ($nilai[0] * $nilai[1]) . "<br><br>";
                    }elseif($operator2 == '/'){
                        echo "PEMBAGIAN" . "<br>";
                        echo "Operator : " . $operator2 . "<br>";
                        echo "Hasil : " . ($nilai[0] / $nilai[1]) . "<br><br>";
                    }elseif($operator2 == '%'){
                        echo "MODULUS" . "<br>";
                        echo "Operator : " . $operator2 . "<br>";
                        echo "Hasil : " . ($nilai[0] % $nilai[1]) . "<br><br>";
                    }
                }
            ?>
        </p>

        <?php } else { echo "Silakan Masukkan Angka..."; } ?>
        </div>
    </div>
</body>
</html>
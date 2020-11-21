<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container{
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Hitung Harga Bet</h1>
        <form method="POST">
                <label for="">Input Kalimat </label>
                <input type="text" name="input">
                <button type="submit" name="hitung">Hitung</button>
                <br><br>
                <label for="">Pilih Warna</label>
                <select name="warna">
                    <option value="Merah" class="opsi1">Merah</option>
                    <option value="Hijau" class="opsi2">Hijau</option>
                    <option value="Biru" class="opsi3">Biru</option>
                </select>
        </form>
        
        <?php
            function Hitung($x){
                $jumlah_karakter=strlen($x);
                $jumlah_spasi = substr_count($x, " ");
                $hasil= $jumlah_karakter - $jumlah_spasi;
                // return $hasil;
                if($hasil >= 1 && $hasil <= 10){
                    $harga = $hasil * 300;
                }elseif($hasil >= 11 && $hasil <= 20){
                    $harga = $hasil * 500;
                }elseif($hasil > 20){
                    $harga = $hasil * 700;
                }
        ?>
                <div style="color: black;">
                    <?php return $harga; ?>
                </div>
                
        <?php } echo "<br>"; ?> 
        <?php if(isset($_POST['hitung'])){ ?>
            <?php $x=$_POST['input'];
                    // echo $x . "<br>";
                    $warna=$_POST['warna'];
                    if($warna == "Merah"){ ?>
                        <div style="color: red;">
                            <?php echo $x . "<br>";?>
                        </div>
                              
                    <?php }elseif($warna == "Hijau"){ ?>
                        <div style="color: Green; font-">
                            <?php echo $x . "<br>";?>
                        </div>
                    <?php }elseif($warna == "Biru"){ ?>
                        <div style="color: blue;">
                            <?php echo $x . "<br>";?>
                        </div>
                    <?php } echo "Harga Bet nya adalah " . Hitung($x);
                    ?>    
            <?php } ?>
    </div>
    
</body>
</html>
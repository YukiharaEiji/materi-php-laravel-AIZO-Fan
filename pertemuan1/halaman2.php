<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Selamat Datang </title>
</head>
<body>
    <h1><?php echo "Welcome to PHP -- Selamat Datang di PHP";?></h1>

    <?php
        error_reporting(E_ALL);
        ini_set("display_errors", 1);

        //variable
        $jam = 12;
        if($jam < 12){
            echo "<h3>Selamat Pagi</h3>";
        }else{
            echo "<h3>Selamat Siang</h3>";
        }

        echo "<br/>";
        //variable array
        $hoby = ['Makan', 'Minum', 'Tidur'];
        var_dump(value: $hoby);
        if(is_array(value: $hoby)){
            echo "Hoby saya ada ". count(value:$hoby);
        }

        //Tipe data null
        $nilaiuts = NULL;
        if(is_null(value: $nilaiuts)){ // $nilaiuts == NULL
            echo "Nilai UTS Belum Keluar";
        }
    ?>
</body>
</html>
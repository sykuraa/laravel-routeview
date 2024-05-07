<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sykuraa</title>
</head>
<style>
    
</style>
<body style="background-color:antiquewhite;">
    <br><br><br><br>
    <h1 align="center" style="color:deeppink;"> SELAMAT DATANG <?php echo $_GET["fname"];?> <?php echo $_GET["lname"];?> !</h1>
    <h2> kamu memiliki jenis kelamin <?php echo $_GET["gender"];?> <br> 
    kamu adalah warga negara <?php echo $_GET["cars"];?> <br>
    dan kamu menguasai bahasa 
    <?php
        if(isset($_GET['bahasa'])) {
            $languages = $_GET['bahasa'];
            echo "";
            foreach($languages as $language) {
                echo $language . ", ";
            }
            echo "<br>";
        } else {
            echo "Anda belum memilih bahasa<br>";
        }
        ?>
    biodata tambahan : <?php echo $_GET["message"];?>
    </h2>
    <h3 align="center">Terimakasih telah bergabung dengan website kami semangat belajar bersama! </h3>  
    <?php   ?>
</body>
</html>
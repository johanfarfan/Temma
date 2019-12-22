<?php
    //calls the modal if there are no cookies for language
    if (!isset($_COOKIE['lang'])){
        setcookie('lang', 'EN', time() + 86400);
        header("Refresh:0");
    }
    //captures if the user changes the language
    $lang = $_POST['lang'];
    if ($lang =="ENGLISH") { setcookie('lang', 'EN', time() + 86400); header("Refresh:0");}
    if ($lang == "ESPAÑOL") { setcookie('lang', 'ES', time() + 86400); header("Refresh:0");}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Temma Freight Logistics</title>
        <link href="src/css/bootstrap.css" type="text/css" rel="stylesheet">
        <script src="src/js/jquery-3.4.1.js"></script>
        <script src="src/js/popper.js"></script>
        <script src="src/js/bootstrap.js"></script>
    </head>

    <body>
        <?php
            if($_COOKIE['lang'] == 'EN'){
                include 'en/menu-en.php';
                include 'en/banner-en.php';
                include 'en/services.php';
                include 'en/locations.php';
                include 'en/footer-en.php';
            } 
            if($_COOKIE['lang'] == 'ES'){
                include 'es/menu-es.php';
                include 'es/banner-es.php';
                include 'es/servicios.php';
                include 'es/locaciones.php';
                include 'es/footer-es.php';
            }
            include 'modal-lang.php'
        ?>
    </body>
</html>
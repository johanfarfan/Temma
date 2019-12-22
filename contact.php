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

    <?php
    //to check if something was sent
    if (isset($_POST['formEmail']) && isset($_POST['formSubject']) && isset($_POST['formMessage'])){
        if ($_POST['formEmail'] == "" || $_POST['formMessage'] == "" || filter_var($_POST['formEmail'], FILTER_VALIDATE_EMAIL) == false){
            if($_COOKIE['lang'] == "EN") echo "<script> alert('Error: Message not sent. Please fill up all the fields in the right way');</script>";
            if($_COOKIE['lang'] == "ES") echo "<script> alert('Error: Mensaje no enviado. Por favor llene toda la informacion necesaria');</script>";
        } else {
            $to = "info@temma.com.ve";
            $from = $_POST['formFrom'];
            $subject = $_POST['formSubject'];
            $message = $_POST['formMessage'];

            mail($to, $subject, $message, $from);
            if($_COOKIE['lang'] == "EN") echo "<script> alert('Message sent!');</script>";
            if($_COOKIE['lang'] == "ES") echo "<script> alert('Mensaje enviado!');</script>";
        }
    }
    ?>
</head>

<body>
    <?php
        if($_COOKIE['lang'] == 'EN'){
            include 'en/menu-en.php';
            include 'en/banner-en.php';
            include 'en/contact-en.php';
            include 'en/footer-en.php';
        } 
        if($_COOKIE['lang'] == 'ES'){
            include 'es/menu-es.php';
            include 'es/banner-es.php';
            include 'es/contact-es.php';
            include 'es/footer-es.php';
        }
        include 'modal-lang.php'
    ?>
</body>
</html>
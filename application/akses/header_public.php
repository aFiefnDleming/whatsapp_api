<?php if(!isset($_SESSION)){session_start();}?>
<!DOCTYPE html>
<html lang='id'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <meta http-equiv='X-UA-Compatible' content='ie=edge'>
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Whatsapp Api</title>
        <link rel="shortcut icon" href="<?php if(isset($_SESSION['icon-project'])){echo $_SESSION['icon-project'];};?>">
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <link href="assets/css/script.css" rel="stylesheet" />
    </head>
    <body id="page-top">
            
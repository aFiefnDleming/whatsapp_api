<?php 
    if(!isset($_SESSION)){
        session_start();
    }
    $_SESSION['icon-net']="../../assets/img/NETCode_logo.png";
    $_SESSION['icon-project']="assets/img/wa-api.png";
    header('Location: application/view/welcome-message.php');
    exit();
?>            
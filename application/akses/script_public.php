<?php
    if(!isset($_SESSION)){
        session_start();
    }
    require "controller/functions.php";
    // alert
        if(isset($_SESSION['message-success'])){
            $message_success="<div class='alert alert-success alert-dismissible fade show' role='alert'>
            ".$_SESSION['message-success']."
                <form action='' method='POST'>
                    <button type='submit' name='message-success' class='close'>
                        <span aria-hidden='true'>&times;</span>
                    </button>
                </form>
            </div>";
        }
        if(isset($_SESSION['message-warning'])){
            $message_warning="<div class='alert alert-warning alert-dismissible fade show' role='alert'>
            ".$_SESSION['message-warning']."
                <form action='' method='POST'>
                    <button type='submit' name='message-warning' class='close'>
                        <span aria-hidden='true'>&times;</span>
                    </button>
                </form>
            </div>";
        }
        if(isset($_SESSION['message-danger'])){
            $message_danger="<div class='alert alert-danger alert-dismissible fade show' role='alert'>
            ".$_SESSION['message-danger']."
                <form action='' method='POST'>
                    <button type='submit' name='message-danger' class='close'>
                        <span aria-hidden='true'>&times;</span>
                    </button>
                </form>
            </div>";
        }
        if(isset($_SESSION['message-info'])){
            $message_info="<div class='alert alert-info alert-dismissible fade show' role='alert'>
            ".$_SESSION['message-info']."
                <form action='' method='POST'>
                    <button type='submit' name='message-info' class='close'>
                        <span aria-hidden='true'>&times;</span>
                    </button>
                </form>
            </div>";
        }
        if(isset($_SESSION['message-dark'])){
            $message_dark="<div class='alert alert-dark alert-dismissible fade show' role='alert'>
            ".$_SESSION['message-dark']."
                <form action='' method='POST'>
                    <button type='submit' name='message-dark' class='close'>
                        <span aria-hidden='true'>&times;</span>
                    </button>
                </form>
            </div>";
        }
        if(isset($_POST['message-success'])){
            unset($_SESSION['message-success']);
            header("Location: home");
            exit();
        }
        if(isset($_POST['message-warning'])){
            unset($_SESSION['message-warning']);
            header("Location: home");
            exit();
        }
        if(isset($_POST['message-danger'])){
            unset($_SESSION['message-danger']);
            header("Location: home");
            exit();
        }
        if(isset($_POST['message-info'])){
            unset($_SESSION['message-info']);
            header("Location: home");
            exit();
        }
        if(isset($_POST['message-dark'])){
            unset($_SESSION['message-dark']);
            header("Location: home");
            exit();
        }
    // ============================================================================================================
    // send wa
        if(isset($_POST['send'])){
            if(send_wa($_POST)>0){
                $_SESSION['message-success']="Pesan berhasil dikirim!";
                header("Location: home.php");
                exit();
            }
        }
    // ============================================================================================================
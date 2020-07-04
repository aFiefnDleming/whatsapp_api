<?php
    if(!isset($_SESSION)){session_start();}
    function send_wa($send){
        $get_text=$send['text'];
        $get_phone=$send['phone'];
        if(!isset($get_text) or !isset($get_phone)){ 
            $_SESSION['message-warning']="Tidak ada inputan apapun!";
            header("Location: home.php");
            exit();
        }

        // apiURL & token bisa didapat dari link ini.
        // apiURL & token ini nantinya diambil dari whatsapp kalian.
        $apiURL = 'https://eu110.chat-api.com/instance146301/';
        $token = '6lyxr7iu69htro2e';

        $message = $get_text;
        $phone = $get_phone;
        $data = json_encode(
            array(
                'chatId'=>$phone.'@c.us',
                'body'=>$message
            )
        );
        $url = $apiURL.'message?token='.$token;
        $options = stream_context_create(
            array('http' =>
                array(
                    'method'  => 'POST',
                    'header'  => 'Content-type: application/json',
                    'content' => $data
                )
            )
        );
        file_get_contents($url,false,$options);
        $_SESSION['message-success']="Pesan anda telah terkirim!";
        header("Location: home.php");
        return true;
    }
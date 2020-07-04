                <?php if(!isset($_SESSION)){session_start();}?>
                <!DOCTYPE html>
                <html lang='id'>
                <head>
                    <meta charset='utf-8'>
                    <title>Netmedia Framecode</title>
                    <link rel="shortcut icon" href="<?php if(isset($_SESSION['icon-net'])){echo $_SESSION['icon-net'];};?>">
                
                    <style type='text/css'>
                
                    ::selection { background-color: #E13300; color: white; }
                    ::-moz-selection { background-color: #E13300; color: white; }
                
                    body {
                        background-color: #fff;
                        margin: 40px;
                        font: 13px/20px normal Helvetica, Arial, sans-serif;
                        color: #4F5155;
                    }
                
                    a {
                        color: #003399;
                        background-color: transparent;
                        font-weight: normal;
                    }
                
                    h1 {
                        color: #444;
                        background-color: transparent;
                        border-bottom: 1px solid #D0D0D0;
                        font-size: 19px;
                        font-weight: normal;
                        margin: 0 0 14px 0;
                        padding: 14px 15px 10px 15px;
                    }
                
                    code {
                        font-family: Consolas, Monaco, Courier New, Courier, monospace;
                        font-size: 12px;
                        background-color: #f9f9f9;
                        border: 1px solid #D0D0D0;
                        color: #002166;
                        display: block;
                        margin: 14px 0 14px 0;
                        padding: 12px 10px 12px 10px;
                    }
                
                    #body {
                        margin: 0 15px 0 15px;
                    }
                
                    p.footer {
                        text-align: right;
                        font-size: 11px;
                        border-top: 1px solid #D0D0D0;
                        line-height: 32px;
                        padding: 0 10px 0 10px;
                        margin: 20px 0 0 0;
                    }
                
                    #container {
                        margin: 10px;
                        border: 1px solid #D0D0D0;
                        box-shadow: 0 0 8px #D0D0D0;
                    }
                    </style>
                </head>
                <body>
                
                <div id='container'>
                    <h1>Welcome to Netmedia Framecode</h1>
                
                    <div id='body'>
                        <p>The page you are looking at is being generated dynamically by Netmedia Framecode.</p>
                
                        <p>If you would like to edit this page you'll find it located at:</p>
                        <code>application/views/welcome-message.php</code>

                        <br>
                        <small>Telah diterjemahkan ke bahasa indonesia</small>
                        <p style="color: red">Penting!!</p>
                        <p>Sebelum melakukan kirim pesan, harap dimengerti bahwa anda sedang menggunakan <strong>apiURL dan Token</strong> dari Netmedia Framecode. Untuk itu silakan ganti <strong>apiURL dan Token</strong> menjadi milik anda. <strong>apiURL dan Token</strong> ini diambil dari nomor Whatsapp kamu! lokasi dimana kamu bisa mengganti <strong>apiURL dan Token</strong> kamu:</p>
                        <code>controller/functions.php</code>
                        <p>Link untuk membuat <strong>apiURL dan Token</strong>: <a href="https://app.chat-api.com">https://app.chat-api.com</a></p>
                
                        <p><a href='../../home'>Open</a> my project.</p>
                    </div>
                </div>
                
                </body>
                </html>
            
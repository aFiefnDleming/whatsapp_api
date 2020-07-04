        <?php require "application/akses/header_public.php";?>
        <?php require "application/akses/script_public.php";?>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger text-white" href="#page-top">Whatsapp API</a>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container d-flex h-100 align-items-center">
                <div class="col-md-12 d-sm-flex justify-content-between align-items-center">
                    <div class="col-md-6">
                        <div class="mx-auto text-center">
                            <h3 class="mx-auto my-0 text-uppercase text-white">Whatsapp API</h3>
                            <h2 class="text-white-50 mx-auto mt-2 mb-5">Antarmuka pemrograman aplikasi yang disediakan oleh Netmedia Framecode. Silakan lakukan re-Edit script dengan bijak!.</h2>
                            <a class="btn btn-info js-scroll-trigger" href="#about">Liat Lebih</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="col-md-8 m-auto">
                            <h3 class="text-center text-white">Tes Chat</h3>
                            <?php if(isset($message_success)){echo$message_success;}if(isset($message_danger)){echo$message_danger;}if(isset($message_warning)){echo$message_warning;}if(isset($message_info)){echo$message_info;}if(isset($message_dark)){echo$message_dark;}?>
                            <form action="" method="POST">
                                <div class="form-group">
                                    <input type="text" name="text" class="form-control" placeholder="Text" required>
                                </div>
                                <div class="form-group">
                                    <input type="number" name="phone" class="form-control" placeholder="Phone Number" required>
                                </div>
                                <div class="form-group text-center">
                                    <button type="submit" name="send" class="btn btn-info mt-5">Send Tes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- About-->
        <section class="about-section text-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 mx-auto" id="about">
                        <h2 class="text-white mb-4">Turorial cara pembuatan Whatsapp API</h2>
                        <p class="text-white-50">
                            <iframe width="1020" height="520" src="https://www.youtube-nocookie.com/embed/wG2elr1t7EE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <?php require "application/akses/footer_public.php";?>
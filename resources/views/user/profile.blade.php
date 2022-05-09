<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Metronome</title>
    <link rel="stylesheet" href="fontawesome/css/all.min.css"> <!-- https://fontawesome.com/ -->
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <!-- https://fonts.google.com/ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/templatemo-video-catalog.css">
</head>

<body>
    <div class="tm-page-wrap mx-auto">
        <div class="position-relative">
            <div class="position-absolute tm-site-header">
                <div class="container-fluid position-relative">
                    <div class="row">
                        <div class="col-7 col-md-4">
                        </div>
                        <div class="col-5 col-md-8 ml-3 mr-2">
                            <div class="tm-site-nav">
                                <nav class="navbar navbar-expand-lg mr-0 ml-auto" id="tm-main-nav">
                                    <button class="navbar-toggler tm-bg-black py-2 px-3 mr-0 ml-auto collapsed" type="button"
                                        data-toggle="collapse" data-target="#navbar-nav" aria-controls="navbar-nav"
                                        aria-expanded="false" aria-label="Toggle navigation">
                                        <span>
                                            <i class="fas fa-bars tm-menu-closed-icon"></i>
                                            <i class="fas fa-times tm-menu-opened-icon"></i>
                                        </span>
                                    </button>
                                    <div class="collapse navbar-collapse tm-nav" id="navbar-nav">
                                        <ul class="navbar-nav text-uppercase">
                                            <li class="nav-item active">
                                                <a class="nav-link tm-nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link tm-nav-link" href="/panduan">Panduan</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link tm-nav-link" href="/kursus">Kursus</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link tm-nav-link" href="contact.html">Keranjang</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link tm-nav-link" href="contact.html">Upload</a>
                                            </li>
                                            <li class="nav-item">
                                                <x-app-layout>

                                                </x-app-layout>
                                            </li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tm-welcome-container text-center text-white">
                <div class="tm-welcome-container-inner">
                    <p class="tm-welcome-text mb-1 text-white">Selamat Datang di Metronome!</p>
                    <p class="tm-welcome-text mb-5 text-white">Mulai temukan lagu kesukaanmu.</p>
                    <a href="#content" class="btn tm-btn-animate tm-btn-cta tm-icon-down">
                        <span>Klik Di sini</span>
                    </a>
                </div>
            </div>

            <div id="tm-video-container">
                <video autoplay muted loop id="tm-video">
                    <!-- <source src="video/sunset-timelapse-video.mp4" type="video/mp4"> -->
                        <source src="image/grey.png" type="video/mp4">
                </video>    
            </div>
        </div>

        <div class="container-fluid">
            <div id="content" class="mx-auto tm-content-container">
                <main>
                    <div class="row">
                        <div class="col-12">
                            <h2 class="tm-page-title mb-4">Katalog Musik Kami</h2>
                            <div class="tm-categories-container mb-5">
                                <h3 class="tm-text-primary tm-categories-text">Categories:</h3>
                                <ul class="nav tm-category-list">
                                    <li class="nav-item tm-category-item"><a href="#" class="nav-link tm-category-link active">All</a></li>
                                    <li class="nav-item tm-category-item"><a href="#" class="nav-link tm-category-link">Popular</a></li>
                                    <li class="nav-item tm-category-item"><a href="#" class="nav-link tm-category-link">Classic</a></li>
                                    <li class="nav-item tm-category-item"><a href="#" class="nav-link tm-category-link">Rock</a></li>
                                    <li class="nav-item tm-category-item"><a href="#" class="nav-link tm-category-link">Jazz</a></li>
                                    <li class="nav-item tm-category-item"><a href="#" class="nav-link tm-category-link">Featured</a></li>
                                </ul>
                            </div>        
                        </div>
                    </div>
                    
                    @include('user.product')
                    
                    <!-- Catalog Paging Buttons -->
                    <div>
                        <ul class="nav tm-paging-links">
                            <li class="nav-item active"><a href="#" class="nav-link tm-paging-link">1</a></li>
                            <li class="nav-item"><a href="#" class="nav-link tm-paging-link">2</a></li>
                            <li class="nav-item"><a href="#" class="nav-link tm-paging-link">3</a></li>
                            <li class="nav-item"><a href="#" class="nav-link tm-paging-link">4</a></li>
                            <li class="nav-item"><a href="#" class="nav-link tm-paging-link">></a></li>
                        </ul>
                    </div>
                </main>
                

                <!-- Subscribe form and footer links -->
                <div class="row mt-5 pt-3">
                    <div class="col-xl-6 col-lg-12 mb-4">
                        <div class="tm-bg-gray p-5 h-100">
                            <h3 class="tm-text-dark mb-3">Ingin dapat berita terbaru?</h3>
                            <p class="mb-5">Mohon mengisi alamat e-mail di bawah ini untuk berlangganan. 
                                Terima kasih.</p>
                            <form action="" method="GET" class="tm-subscribe-form">
                                <input type="text" name="email" placeholder="Your Email..." required>
                                <button type="submit" class="btn rounded-0 btn-light tm-btn-small">Langganan</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mb-4">
                        <div class="p-5 tm-bg-gray">
                            <h3 class="tm-text-dark mb-4"><b>Social Media</b></h3>
                            <ul class="list-unstyled tm-footer-links">
                                <li><a href="#">Twitter</a></li>
                                <li><a href="#">Instagram</a></li>
                                <li><a href="#">Facebook</a></li>
                                <li><a href="#">Tumblr</a></li>
                                <li><a href="#">Blog</a></li>
                            </ul>    
                        </div>                        
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mb-4">
                        <div class="p-5 tm-bg-gray h-100">
                            <h3 class="tm-text-dark mb-4"><b>Halaman Kami</b></h3>
                            <ul class="list-unstyled tm-footer-links">
                                <li><a href="#">Panduan</a></li>
                                <li><a href="#">Kursus</a></li>
                                <li><a href="#">Keranjang</a></li>
                                <li><a href="#">Upload</a></li>
                                <li><a href="#">Privacy Policies</a></li>
                            </ul>
                        </div>                        
                    </div>
                </div> <!-- row -->

                <footer class="row pt-5">
                    <div class="col-12">
                        <p class="text-right">Copyright 2022 Ritzky's thesis project 
                    </div>
                </footer>
            </div> <!-- tm-content-container -->
        </div>

    </div> <!-- .tm-page-wrap -->

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
        function setVideoSize() {
            const vidWidth = 1920;
            const vidHeight = 1080;
            let windowWidth = window.innerWidth;
            let newVidWidth = windowWidth;
            let newVidHeight = windowWidth * vidHeight / vidWidth;
            let marginLeft = 0;
            let marginTop = 0;

            if (newVidHeight < 500) {
                newVidHeight = 500;
                newVidWidth = newVidHeight * vidWidth / vidHeight;
            }

            if(newVidWidth > windowWidth) {
                marginLeft = -((newVidWidth - windowWidth) / 2);
            }

            if(newVidHeight > 720) {
                marginTop = -((newVidHeight - $('#tm-video-container').height()) / 2);
            }

            const tmVideo = $('#tm-video');

            tmVideo.css('width', newVidWidth);
            tmVideo.css('height', newVidHeight);
            tmVideo.css('margin-left', marginLeft);
            tmVideo.css('margin-top', marginTop);
        }

        $(document).ready(function () {
            /************** Video background *********/

            setVideoSize();

            // Set video background size based on window size
            let timeout;
            window.onresize = function () {
                clearTimeout(timeout);
                timeout = setTimeout(setVideoSize, 100);
            };

            // Play/Pause button for video background      
            const btn = $("#tm-video-control-button");

            btn.on("click", function (e) {
                const video = document.getElementById("tm-video");
                $(this).removeClass();

                if (video.paused) {
                    video.play();
                    $(this).addClass("fas fa-pause");
                } else {
                    video.pause();
                    $(this).addClass("fas fa-play");
                }
            });
        })
    </script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kursus - Metronome</title>
    <link rel="stylesheet" href="fontawesome/css/all.min.css"> <!-- https://fontawesome.com/ -->
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <!-- https://fonts.google.com/ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/templatemo-video-catalog.css">
</head>
<!--

TemplateMo 552 Video Catalog

https://templatemo.com/tm-552-video-catalog

-->
<body>
<div class="tm-page-wrap mx-auto">
		<div class="position-relative">
			<div class="potition-absolute tm-site-header">
				<div class="container-fluid position-relative">
					<div class="row">						
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
                                            <li class="nav-item">
                                                <a class="nav-link tm-nav-link" href="/">Home</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link tm-nav-link" href="/panduan">Panduan</a>
                                            </li>
                                            <li class="nav-item active">
                                                <a class="nav-link tm-nav-link" href="/kursus">Kursus <span class="sr-only">(current)</span></a>
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
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                        </div>
					</div>
				</div>
			</div>
			<div class="tm-welcome-container tm-fixed-header tm-fixed-header-3">
				<div class="text-center">
					<p class="pt-5 px-3 tm-welcome-text tm-welcome-text-2 mb-1 mt-lg-0 mt-5 text-white mx-auto">
                        Selangkah lebih dekat!<br>scroll ke bawah untuk panduan lanjutan
                    </p>                	
				</div>                
            </div>

            <div id="tm-fixed-header-bg"></div> <!-- Header image -->
		</div>

		<!-- Page content -->
		<main>
			<div class="container-fluid px-0">
				<div class="mx-auto tm-content-container">					
					<div class="row mt-3 mb-5 pb-3">
						<div class="col-12">
							<div class="mx-auto tm-about-text-container px-3">
								<h2 class="tm-page-title mb-4 tm-text-primary">Hubungi Tim Kami</h2>
                                <p class="mb-4">
                                    Kami menyediakan layanan yang akan mengantar anda pada tempat-tempat kursus terbaik di Indonesia. Dengan adanya kerjasama di antara instansi pendidikan musik, kami hadir untuk membantu memajukkan industri musik dan perekonomian dalam skala yang lebih besar.
                                </p>
                                <p class="mb-4">Isi formulir di bawah ini. Kami akan menghubungkan anda kepada para pengajar terbaik. Hanya dengan memasukkan nama dan alamat e-mail, kami akan langsung menghubungi kembali dalam 1 x 24 jam. Konsultasi lokasi penempatan GRATIS!</p>
							</div>							
						</div>						
					</div>
                    <div class="mx-auto pb-3 tm-about-text-container px-3">
                        <div class="row">
                            <div class="col-lg-6 mb-5">
                                <form id="contact-form" action="" method="POST" class="tm-contact-form">
                                  <div class="form-group">
                                    <input type="text" name="name" class="form-control rounded-0" placeholder="Nama" required="" />
                                  </div>
                                  <div class="form-group">
                                    <input type="email" name="email" class="form-control rounded-0" placeholder="Email" required="" />
                                  </div>
                                  <div class="form-group">
                                    <select class="form-control" id="contact-select" name="inquiry">
                                      <option value="-">Pilih Mode Kursus</option>
                                      <option value="sales">Offline</option>
                                      <option value="creative">Online</option>
                                      <option value="uiux">Private Offline</option>
                                    </select>
                                  </div>
                                  <div class="form-group">
                                    <textarea rows="8" name="message" class="form-control rounded-0" placeholder="Isi dengan pilihan tempat kursus pada peta. Kosongkan jika memilih mode online."
                                              required=""></textarea>
                                  </div>

                                  <div class="form-group mb-0">
                                    <button type="submit" class="btn btn-light rounded-0 d-block ml-auto mr-0 tm-btn-animate tm-btn-submit tm-icon-submit"><span>Submit</span></button>
                                  </div>
                                </form>    
                            </div>
                            <div class="col-lg-6">
                                <div class="mapouter mb-60">
                                    <div class="gmap_canvas">
                                        <iframe width="100%" height="520" id="gmap_canvas"
                                            src="https://maps.google.com/maps?q=Av.+L%C3%BAcio+Costa,+Rio+de+Janeiro+-+RJ,+Brazil&t=&z=13&ie=UTF8&iwloc=&output=embed"
                                            frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>  
                    </div>                                      			
				</div>

				<div class="parallax-window parallax-window-2" data-parallax="scroll" data-image-src="img/kursus-2.jpg"></div>

				<div class="mx-auto tm-content-container mt-4 px-3 mb-3">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="tm-page-title mb-5 tm-text-primary">Pengajar Private Offline</h2>    
                        </div>                        
                    </div>
					<div class="row">
		                <div class="col-lg-6 mb-5 pt-3">
		                    <div class="media tm-testimonial">
                                <img class="mr-4 rounded-circle img-fluid" src="img/testimonial-1.jpg" alt="Generic placeholder image">
                                <p class="media-body pt-3 tm-testimonial-text">
                                    Vestibulum non lectus id lacus aliquet porttitor in non nulla. Aenean urna diam, finibys id lorem nec, feugiat convallis dolor. Integer aliquam, eros eget rutrum iaculis.    
                                </p>                              
                            </div>              
		                </div>
		                <div class="col-lg-6 mb-5 pt-3">
                              <div class="media tm-testimonial">
                              <img class="mr-4 rounded-circle img-fluid" src="img/testimonial-2.jpg" alt="Generic placeholder image">
                              <p class="media-body pt-3 tm-testimonial-text">
                                Maecenas et libero in eros laoreet finibus sed vitae diam. Etiam consetetur, nunc sed pretium elementum, diam erat fringilla tortor, placerat condimentum.
                              </p>
                            </div>                                    
                        </div>
                        <div class="col-lg-6 mb-5 pt-3">
                            <div class="media tm-testimonial">
                              <img class="mr-4 rounded-circle img-fluid" src="img/testimonial-3.png" alt="Generic placeholder image">
                              <p class="media-body pt-3 tm-testimonial-text">
                                Aliquam tristique ut magna sit amet tincidunt. Sed tempor tellus nulla, molestie luctus lectus tincidunt id. Cras duismod leo a urna placerat, vel blandit turpis fermentum.
                              </p>
                            </div>                  
                        </div>
                        <div class="col-lg-6 mb-5 pt-3">
                            <div class="media tm-testimonial">
                              <img class="mr-4 rounded-circle img-fluid" src="img/testimonial-4.png" alt="Generic placeholder image">
                              <p class="media-body pt-3 tm-testimonial-text">
                                Nulla suscipit posuere lectus ut venenatis. Proin sed orci eget tellus euismod vulputate eu eu arcu. Etiam a bibendum lorem. Cura
                              </p>
                            </div>                  
                        </div>
		            </div>
				</div>
			</div>
		</main>

		<div class="container-fluid tm-content-container mx-auto pt-4">
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
                    <p class="text-right">Copyright 2022 Ritzky's thesis project</p>
                </div>
            </footer>
		</div>		
	</div>

	<script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/parallax.min.js"></script>    
</body>
</html>
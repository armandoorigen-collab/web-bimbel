<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
       <title>@yield('title', 'ONMAI')</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset ('landing-page/css/styles.css') }}" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top"><img src="{{ asset('landing-page/assets/img/img1.png') }}" />ONMAI</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive"
                    aria-expanded="false" aria-label="Toggle navigation"> Menu<i class="fas fa-bars ms-1"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <!-- Normal items (appear on all sizes) -->
                            <li class="nav-item"><a class="nav-link" href="#services">Fasilitas</a></li>
                            <li class="nav-item"><a class="nav-link" href="#portfolio">Program Belajar</a></li>
                            <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                        <!-- ===== DESKTOP: dropdown tetap ada (hanya tampil di >= lg) ===== -->
                            <li class="nav-item dropdown d-none d-lg-block">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Lainnya</a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#team">Sukses Bersama Onmai</a></li>
                                <li><a class="dropdown-item" href="#contact">Contact</a></li>
                                <li><a class="dropdown-item" href="{{ route('dashboard')}}">Soal-soal</a></li>
                                <li><a class="dropdown-item d-flex align-items-center" href="https://wa.me/6285273168989" target="_blank">
                                <i class="fab fa-whatsapp me-2" style="color:#25D366;"></i> Hubungi Kami</a></li>
                            </ul>
                            </li>
                        <!-- ===== MOBILE: tampilkan isi dropdown sebagai item biasa (hanya tampil di < lg) ===== -->
                            <li class="nav-item d-lg-none"><a class="nav-link" href="#team">Sukses Bersama Onmai</a></li>
                            <li class="nav-item d-lg-none"><a class="nav-link" href="#contact">Contact</a></li>
                            <li class="nav-item d-lg-none"><a class="nav-link" href="{{ route('dashboard')}}">Soal-soal</a></li>
                            <li class="nav-item d-lg-none">
                                <a class="nav-link d-flex align-items-center" href="https://wa.me/6285273168989" target="_blank">
                                    <i class="fab fa-whatsapp me-2" style="color:#25D366;"></i> Hubungi Kami
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link btn btn-primary text-white d-flex align-items-center" href="{{ route('login') }}">
                                    <i class="fa fa-sign-in me-1" aria-hidden="true"></i> Login
                                </a>
                            </li>
                    </ul>
                </div>
            </div>

        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-leadheading">PUSAT BIMBINGAN BELAJAR</div>
                <div class="masthead-heading text-uppercase">ONMAI</div>
                <div class="masthead-subheading">SARAN UNTUK BERPRESTASI</div>
                
                <a class="btn btn-primary btn-xl text-uppercase" href="#services">Tell Me More</a>
            </div>
        </header>
        
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Fasilitas</h2>
                    <h3 class="section-subheading text-muted">
                        <p>Di ONMAI fasilitas bimbel yang cozy dan nyaman, membuat belajar lebih menyenangkan.</p>
                        <p>Maka dari itu kami menyediakan fasilitas layanan kepada siswa/siswi.</p>
                    </h3>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-8x">
                            <a class=""><img src="{{ asset('landing-page/assets/img/img3.png') }}" /></a>
                        </span>
                        <h4 class="my-4">Ruang Belajar</h4>
                        <p class="text-muted">Ruang full AC, Free WiFi, dan full Furnished </p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-8x">
                            <a class=""><img src="{{ asset('landing-page/assets/img/img4.png') }}" /></a>
                        </span>
                        <h4 class="my-4">Persiapan Ujian</h4>
                        <p class="text-muted">Persiapan TKA, Persiapan UTBK, dan Persiapan UTS, UAS, UHS</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-8x">
                             <a class=""><img src="{{ asset('landing-page/assets/img/img5.png') }}" /></a>
                        </span>
                        <h4 class="my-4">Ruang Depan</h4>
                        <p class="text-muted">Ruang tunggu dengan sofa yang nyaman dan disediakan tempat beli jajan</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Portfolio Grid-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">PROGRAM BELAJAR</h2>
                    <h3 class="section-subheading text">Bimbel onmai banyak menyediakan program belajar yang berkualitas</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="{{ asset ('landing-page/assets/img/portfolio/1.png') }}" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">SD</div>
                                <div class="portfolio-caption-subheading ">Kelas 1-6</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 2-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="{{ asset('landing-page/assets/img/portfolio/2.png') }}" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">SMP</div>
                                <div class="portfolio-caption-subheading ">Kelas 7, 8 dan 9</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 3-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="{{ asset ('landing-page/assets/img/portfolio/3.png') }}" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">SMA</div>
                                <div class="portfolio-caption-subheading ">Kelas 10 dan 11</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                        <!-- Portfolio item 4-->
                        <div class="portfolio-item">
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                        <!-- Portfolio item 5-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal5">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="{{ asset ('landing-page/assets/img/portfolio/4.png') }}" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">SMA</div>
                                <div class="portfolio-caption-subheading">Kelas 12</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <!-- Portfolio item 6-->
                        <div class="portfolio-item">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About-->
        <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">SUASANA BELAJAR</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="img-fluid" src="{{ asset('landing-page/assets/img/about/3.png') }}" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Suasana diruang 1</h4>
                                <h4 class="subheading"></h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Belajar sambil seru-seruan menyanyikan yel-yel, kelas penuh dengan semangat</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="img-fluid" src="{{ asset('landing-page/assets/img/about/4.png') }}" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Kelas X SMA</h4>
                                <h4 class="subheading"></h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Belajar dengan tenang dan nyaman</p></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="img-fluid" src="{{ asset('landing-page/assets/img/about/1.png') }}" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Kelas yang ramai</h4>
                                <h4 class="subheading"></h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Kelas yang rame dan seru, ilmu tambah tawa pun ikut mengalir</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="img-fluid" src="{{ asset('landing-page/assets/img/about/2.png') }}" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Kelas yang kompak</h4>
                                <h4 class="subheading"></h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Belajar bersama, tumbuh bersama</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4>
                                Be Part
                                <br />
                                Of Our
                                <br />
                                Story!
                            </h4>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!-- Team-->
                   
        <!-- Clients-->
        <div class="py-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 my-3">
                        <a href="#!"><img class="img-fluid d-block mx-auto" src="{{ asset('landing-page/assets/img/team/5.png') }}" alt="Gambar Panjang" /></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <footer class="footer-custom text-center text-light py-5">
                   <div class="footer-costume d-flex align-items-center justify-content-center gap-2 mb-3">
                        <img src="{{ asset('landing-page/assets/img/img1.png') }}" alt="Logo ONMAI" style="height: 50px;">
                        <span class="fs-4 fw-bold text-light">ONMAI</span>
                    </div>
                    <!-- Kontak -->
                    <div class="mb-4">
                        <p class="mb-2">
                            <i class="fab fa-whatsapp"></i> +62 852 7326 8989 (Ibu Derma) &nbsp;&nbsp;&nbsp;
                            <i class="fab fa-instagram"></i> @bimbel_onmai
                        </p>
                    </div>
                    <!-- Alamat Bengkulu -->
                    <h4 class="fw-bold mb-3">Alamat kantor pusat Bengkulu</h4>
                        <p class="footer-address"> Jl. Mayjend Sutoyo No. 25 Tanah Patah, Kota Bengkulu</p>
                        <!--p class="mt-4 copytext">©2025 GAMA SAINS. All rights reserved.</p-->
                </footer>
            </div>
        </section>
        <!-- Footer-->
        
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start">&copy;2025 ONMAI. All rights reserved</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Envelope"><i class=" fa-solid fa-envelope"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="LinkedIn"><i class="fa-solid fa-earth-americas"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                        <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Portfolio Modals-->
        <!-- Portfolio item 1 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="{{ asset ('landing-page/assets/img/close-icon.svg') }}" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">SD KELAS 1-6</h2>
                                    <!--p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p-->
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/1.jpg" alt="" />
                                    <p class= "mb-1"> - Mata pelajaran </p>
                                        <ul class="list-unstyled mt-1" >
                                        <li><i class="fas fa-check text-primary me-2"></i>Matematika</li>
                                        <li><i class="fas fa-check text-primary me-2"></i>IPA</li>
                                        <li><i class="fas fa-check text-primary me-2"></i>B. Inggris</li>
                                        <li><i class="fas fa-check text-primary me-2"></i>B. Indonesia/Tema</li>
                                        </ul>
                                    <p class= "mb-2"> - PR TUNTAS  </p>   
                                    <p class= "mb-2"> - TAMBAHAN BELAJAR GRATIS  </p>   
                                    
                                    <!--button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-2"></i>
                                        Close
                                    </button-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 2 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="{{ asset('landing-page/assets/img/close-icon.svg') }}" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">SMP KELAS 7, 8 dan 9</h2>
                                    <!--p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p-->
                                    <img class="img-fluid d-block mx-auto" src="{{ asset('landing-page/assets/img/portfolio/2.jpg') }}" alt="" />
                                    <p class= "mb-1"> - MATA PELAJARAN </p>
                                        <ul class="list-unstyled mt-1" >
                                        <li><i class="fas fa-check text-primary me-2"></i>Matematika</li>
                                        <li><i class="fas fa-check text-primary me-2"></i>Fisika</li>
                                        <li><i class="fas fa-check text-primary me-2"></i>Biologi</li>
                                        <li><i class="fas fa-check text-primary me-2"></i>B. Inggris</li>
                                        <li><i class="fas fa-check text-primary me-2"></i>B. Indonesia</li>
                                        <li><i class="fas fa-check text-primary me-2"></i>IPS</li>
                                        </ul>
                                    <p class= "mb-2"> - PR TUNTAS  </p>   
                                    <p class= "mb-2"> - TAMBAHAN BELAJAR GRATIS  </p>
                                    <p class= "mb-2"> - KHUSUS SMP KELAS 9 ADA PERSIAPAN TKA  </p>    
                                    
                                    <!--button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close Project
                                    </button-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 3 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="{{ asset('landing-page/assets/img/close-icon.svg') }}" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">SMA KELAS 10 dan 11</h2>
                                    <!--p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p-->
                                    <!--img class="img-fluid d-block mx-auto" src="{{ asset('landing-page/assets/img/portfolio/3.png') }}" alt="" /-->
                                    <p class= "mb-1"> - MATA PELAJARAN </p>
                                        <ul class="list-unstyled mt-1" >
                                        <li><i class="fas fa-check text-primary me-2"></i>Matematika</li>
                                        <li><i class="fas fa-check text-primary me-2"></i>Fisika</li>
                                        <li><i class="fas fa-check text-primary me-2"></i>Biologi</li>
                                        <li><i class="fas fa-check text-primary me-2"></i>B. Inggris</li>
                                        <li><i class="fas fa-check text-primary me-2"></i>B. Indonesia</li>
                                        <li><i class="fas fa-check text-primary me-2"></i>IPS</li>
                                        <li><i class="fas fa-check text-primary me-2"></i>Ekonomi</li>
                                        </ul>
                                    <p class= "mb-2"> - PR TUNTAS  </p>   
                                    <p class= "mb-2"> - TAMBAHAN BELAJAR GRATIS  </p>
                                    <p class= "mb-2"> - KONSULTASI ORANG TUA</p>    
                                    <!--button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close Project
                                    </button-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 5 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="{{ asset('landing-page/assets/img/close-icon.svg') }}" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">SMA KELAS 12</h2>
                                    <!--p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p-->
                                    <p class= "mb-1"> - MATA PELAJARAN </p>
                                        <ul class="list-unstyled mt-1" >
                                        <li><i class="fas fa-check text-primary me-2"></i>Matematika</li>
                                        <li><i class="fas fa-check text-primary me-2"></i>Fisika</li>
                                        <li><i class="fas fa-check text-primary me-2"></i>Biologi</li>
                                        <li><i class="fas fa-check text-primary me-2"></i>B. Inggris</li>
                                        <li><i class="fas fa-check text-primary me-2"></i>B. Indonesia</li>
                                        <li><i class="fas fa-check text-primary me-2"></i>Ekonomi</li>
                                        </ul>
                                    <p class= "mb-2"> - PR TUNTAS  </p>   
                                    <p class= "mb-2"> - TAMBAHAN BELAJAR GRATIS  </p>
                                    <p class= "mb-2"> - PERSIAPAN TKA dan UTBK</p>   
                                        <ul class="list-unstyled mt-1" >
                                        <li><i class="fas fa-check text-primary me-2"></i>TPS</li>
                                        <li><i class="fas fa-check text-primary me-2"></i>Literasi B.INGGRIS</li>
                                        <li><i class="fas fa-check text-primary me-2"></i>Literasi B.Indonesia</li>
                                        <li><i class="fas fa-check text-primary me-2"></i>Penalaran Matematika</li>
                                        </ul>
                                     <p class= "mb-2"> - KEDINASAN</p>   
                                        <ul class="list-unstyled mt-1" >
                                        <li><i class="fas fa-check text-primary me-2"></i>Pengetahuan Umum, TKW, TIU, TKP</li>
                                        </ul>
                                    <p class= "mb-2"> - KEDOKTERAN</p>   
                                        <ul class="list-unstyled mt-1" >
                                        <li><i class="fas fa-check text-primary me-2"></i>Materi UTBK</li>
                                        <li><i class="fas fa-check text-primary me-2"></i>semester 6 seminggu 6x pertemuan, 90 menit</li>
                                        </ul>
                                    <!--ul class="list-inline">
                                        <li>
                                            <strong>Client:</strong>
                                            Southwest
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Website Design
                                        </li>
                                    </ul-->
                                    <!--button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close Project
                                    </button-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{ asset ('landing-page/js/scripts.js') }}"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    
         
    </body>
</html>


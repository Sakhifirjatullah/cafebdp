<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cafe BDP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body data-bs-spy="scroll" data-bs-target=".navbar">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-white shadow py-3 sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="https://smkwikrama.sch.id/frontend/assets/wikrama-logo.png" alt="" style="width: 50px">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#heroSlider">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#menu">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tentang">Tentang</a>
                    </li>
                </ul>              
            </div>
            <a href="keranjang2" class="btn btn-brand">Gas jajan</a>
        </div>
    </nav>
    
    <!-- Hero Slider -->
    <div id="heroSlider" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item text-center bg-cover vh-100 active slide-1">
                <div class="container h-100 d-flex align-items-center justify-content-center">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <h6 class="text-white">WELCOME TO WIKRAMA CAFE</h6>
                            <h1 class="display-1 my-3 fw-bold text-white">Makanan Sehat dan Nikmat</h1>
                          </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item text-center bg-cover vh-100 slide-2">
                <div class="container h-100 d-flex align-items-center justify-content-center">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <h6 class="text-white">WELCOME TO WIKRAMA CAFE</h6>
                            <h1 class="display-1 my-3 fw-bold text-white">Terjamin Halal</h1>w                      
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#heroSlider" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#heroSlider" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
   
<!-- Menu -->
    <section id="menu" class="bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12 intro-text">
                    <h1>Menu Jajanan</h1>
                    <p>Jajanlah Sebelum Jam Masuk Sekolah</p>
                </div>
            </div>
        </div>
        <div class="tab-content" id="pills-tabContent">
             <div class="tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab"
                    tabindex="0">
                     <div class="row gy-4">
                        <div class="col-lg-3 col-sm-6">
                            <div class="menu-item bg-white shadow-on-hover">
                                <img src="./assets/images/item_8.jpg" alt="">
                                <div class="menu-item-content p-4">
                                    <div>
                                        <span>Rating(3.5)</span>
                                        <span class="stars">
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-half-fill"></i>                                          
                                        </span>
                                    </div>
                                    <h5 class="mt-1 mb-2"><a href="#">Basreng</a></h5>
                                    <p class="small">Rp1.000/pcs</p>
                                    <p class="small">Dengan aroma basreng spesial</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="menu-item bg-white shadow-on-hover">
                                <img src="./assets/images/item_1.jpg" alt="">
                                <div class="menu-item-content p-4">
                                    <div>
                                        <span>Rating(4.0)</span>
                                        <span class="stars">
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>                                               
                                        </span>
                                    </div>
                                    <h5 class="mt-1 mb-2"><a href="#">Seblak si Ibu Alya</a></h5>
                                    <p class="small">Rp.5000/porsi</p>
                                    <p class="small">Dengan citarasa seblak si ibu</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="menu-item bg-white shadow-on-hover">
                                <img src="./assets/images/item_2.jpg" alt="">
                                <div class="menu-item-content p-4">
                                    <div>
                                        <span>Rating(4.5)</span>
                                        <span class="stars">
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-half-fill"></i>
                                        </span>
                                     </div>
                                    <h5 class="mt-1 mb-2"><a href="#">Mie Ayam</a></h5>
                                    <p class="small">Rp.10.000/posri</p>
                                    <p class="small">Mie nya enak ayamnya banyak</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="menu-item bg-white shadow-on-hover">
                                <img src="./assets/images/item_3.jpg" alt="">
                                <div class="menu-item-content p-4">
                                    <div>
                                        <span>Rating(5.0)</span>
                                        <span class="stars">
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                        </span>
                                    </div>
                                    <h5 class="mt-1 mb-2"><a href="#">Piscok Anjay Mabar</a></h5>
                                    <p class="small">Rp.2.500/pcs</p>
                                    <p class="small">Tadi basreng sekarang piscok</p>
                                </div>
                            </div>
                        </div>     
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- footer -->
   
    <footer id="tentang" class="bg-cover">
        <div class="footer-top">
            <div class="container">
                <div class="row gy-5">
                    <div class="col-lg-4">
                        <p>JANGAN LUPA JAJAN YAH GES YAH!</p>
                        <div class="social-links">
                            <a href="#"><i class="ri-facebook-circle-fill"></i></a>
                            <a href="https://www.instagram.com/karensdinerofficial/"><i class="ri-instagram-fill"></i></a>
                      </div>
                    </div>
                    <div class="col-lg-3 ms-auto">
                        <h6 class="text-white mb-4">CONTACT</h6>
                        <p class="mb-1">No:021 120</p>
                        <p class="mb-1">Email:Cafe@gmail.com</p>
                        <p class="mb-0">Alamat:Smk Wikrama Bogor</p>
                    </div>
                    <div class="col-lg-3">
                        <h6 class="text-white mb-4">OPENING HOURS</h6>
                        <p class="mb-1">Senin-Jumat : 08:00 - 14:00</p>
                        <p>Sabtu-Minggu : LIBUR</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row gy-3 justify-content-between">
                    <div class="col-auto">                     
                    </div>
                </div>
            </div>
        </div>      
    </footer>   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>
</body>

</html>
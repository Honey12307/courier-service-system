<?php
include "code.php";
?>

<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>courier | Landing, Responsive &amp; Business Templatee</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicons/favicon.ico">
    <link rel="manifest" href="img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="css/theme.css" rel="stylesheet" />

  </head>


  <body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3 d-block" data-navbar-on-scroll="data-navbar-on-scroll">
        <div class="container"><a class="navbar-brand" href="index.html"><img src="logo.webp" height="100" alt="logo" /></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"> </span></button>
          <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto pt-2 pt-lg-0 font-base">
              <li class="nav-item px-2"><a class="nav-link" aria-current="page" href="index.php">Home</a></li>
              <li class="nav-item px-2"><a class="nav-link" href="#services">Our Services</a></li>
              <li class="nav-item px-2"><a class="nav-link" href="#findUs">Find Us</a></li>
              <?php
              if(isset($_SESSION['customerdata'])){
                
                ?>
                  <li class="nav-item px-2"><a class="nav-link" href="admindashboard/logout.php">Logout</a></li>
                <?php
              }
              else{
                ?>
                 <li class="nav-item px-2">
                 
                  <a class="nav-link " href="" data-bs-toggle="modal" data-bs-target="#registerModal">Register</a></li>

              
              <li class="nav-item px-2"><a class="nav-link" href="login.php">Login</a></li>
              <?php
              }
              ?>
             
            </ul>

         

            <div class="dropdown d-none d-lg-block">
              <button class="btn bg-soft-warning ms-2" id="dropdownMenuButton1" type="submit" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-search"></i></button>
              <div class="dropdown-menu dropdown-menu-lg-end p-0 rounded" aria-labelledby="dropdownMenuButton1" style="top:55px">
                <form>
                  <input class="form-control border-200" type="search" placeholder="Search" aria-label="Search" style="background:#FDF1DF;" />
                </form>
              </div>
            </div><a class="btn btn-secondary order-1 order-lg-0 ms-lg-3" href="#contactUs">Contact Us</a>
            <form class="d-flex my-3 d-block d-lg-none">
              <input class="form-control me-2 border-200 bg-light" type="search" placeholder="Search" aria-label="Search" />
              <button class="btn btn-outline-primary" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>

      <section class="py-xxl-10 pb-0" id="home">
        <div class="bg-holder bg-size" style="background-image:url(img/gallery/hero-header-bg.png);background-position:top center;background-size:cover;">
        </div>
        <!--/.bg-holder-->

        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-5 col-xl-6 col-xxl-7 order-0 order-md-1 text-end"><img class="pt-7 pt-md-0 w-100" src="img/illustrations/hero.png" alt="hero-header" /></div>
            <div class="col-md-75 col-xl-6 col-xxl-5 text-md-start text-center py-8">
              <h1 class="fw-normal fs-6 fs-xxl-7">A trusted provider of </h1>
              <h1 class="fw-bolder fs-6 fs-xxl-7 mb-2">courier services.</h1>
              <p class="fs-1 mb-5">We deliver your products safely to <br />your home in a reasonable time. </p> 
              <label for="" class="text-bold fs-5">Track Your Shipment</label>
              <div class="tracking_input">
              <form action="tracking.php" method="post">
              <div class="input"><input type="text" name="tracking_id" class="form-control tracking_search " id="" placeholder="Enter Your Tracking Number" ></div><div class="input_btn">
                <button class="btn btn-secondary me-2"   type="submit" name="track_data" > Track Shipment </button></div>
            </div>
            </form>
            </div>
          </div>
        </div>
      </section>

      

      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="py-7" id="services" container-xl="container-xl">

        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-8 col-lg-5 text-center mb-3">
              <h5 class="text-secondary">SERVICES</h5>
              <h2>Our services for you</h2>
            </div>
          </div>
          <div class="row h-100 justify-content-center">
            <div class="col-md-4 pt-4 px-md-2 px-lg-3">
              <div class="card h-100 px-lg-5 card-span">
                <div class="card-body d-flex flex-column justify-content-around">
                  <div class="text-center banner-image" id="img"><img class="img-fluid img " src="banner1.png" alt="..." />
                    
                  </div>
                  <h5 class="my-4">Business Services</h5>
                  <p>Offering home delivery around the city, where your products will be at your doorstep within 48-72 hours.</p>
                  <ul class="list-unstyled">
                    <li class="mb-2"><span class="me-2"><i class="fas fa-circle text-secondary" style="font-size:.5rem"></i></span>Corporate goods
                    </li>
                    <li class="mb-2"><span class="me-2"><i class="fas fa-circle text-secondary" style="font-size:.5rem"></i></span>Shipment
                    </li>

                      <li class="mb-2"><span class="me-2"><i class="fas fa-circle text-secondary" style="font-size:.5rem"></i></span>Accesories
                      </li>
                  </ul>
                  <div class="text-center my-5">
                    <div class="d-grid">
                      <button class="btn btn-secondary" type="submit">Learn more </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 pt-4 px-md-2 px-lg-3">
              <div class="card h-100 px-lg-5 card-span">
                <div class="card-body d-flex flex-column justify-content-around">
                  <div class="text-center banner-imag" id="img"><img class="img-fluid" src="banner2.png" alt="..." />
                    
                  </div>
                  <h5 class="my-4">Statewide Services</h5>
                  <p>Offering home delivery around the city, where your products will be at your doorstep within 48-72 hours.</p>
                  <ul class="list-unstyled">
                    <li class="mb-2"><span class="me-2"><i class="fas fa-circle text-secondary" style="font-size:.5rem"></i></span>Unlimited Bandwidth
                    </li>
                    <li class="mb-2"><span class="me-2"><i class="fas fa-circle text-secondary" style="font-size:.5rem"></i></span>Encrypted Connection
                    </li>
                    <li class="mb-2"><span class="me-2"><i class="fas fa-circle text-secondary" style="font-size:.5rem"></i></span>Yes Traffic Logs
                    </li>
                  </ul>
                  <div class="text-center my-5">
                    <div class="d-grid">
                      <button class="btn btn-secondary hover-top  border-0" type="submit">Learn more</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 pt-4 px-md-2 px-lg-3">
              <div class="card h-100 px-lg-5 card-span">
                <div class="card-body d-flex flex-column justify-content-around">
                  <div class="text-center banner-image" id="img"><img class="img-fluid img" src="banner3.png" alt="..." />
                    
                  </div>
                  <h5 class="my-4">Personal Services</h5>
                  <p>You can trust us to safely deliver your most sensitive documents to the specific area in a short time.</p>
                  <ul class="list-unstyled">
                    <li class="mb-2"><span class="me-2"><i class="fas fa-circle text-secondary" style="font-size:.5rem"></i></span>Unlimited Bandwidth
                    </li>
                    <li class="mb-2"><span class="me-2"><i class="fas fa-circle text-secondary" style="font-size:.5rem"></i></span>Encrypted Connection
                    </li>
                    <li class="mb-2"><span class="me-2"><i class="fas fa-circle text-secondary" style="font-size:.5rem"></i></span>Yes Traffic Logs
                    </li>
                  </ul>
                  <div class="text-center my-5">
                    <div class="d-grid">
                      <button class="btn btn-secondary" type="submit">Learn more </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->




      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="pt-7 pb-0">

        <div class="container">
          <div class="row">
            <div class="col-6 col-lg mb-5">
              <div class="text-center"><img src="img/icons/awards.png" alt="..." />
                <h1 class="text-secondary mt-4">26+</h1>
                <h5 class="text-800">Awards won</h5>
              </div>
            </div>
            <div class="col-6 col-lg mb-5">
              <div class="text-center"><img src="img/icons/states.png" alt="..." />
                <h1 class="text-secondary mt-4">65+</h1>
                <h5 class="text-800">States covered</h5>
              </div>
            </div>
            <div class="col-6 col-lg mb-5">
              <div class="text-center"><img src="img/icons/clients.png" alt="..." />
                <h1 class="text-secondary mt-4">689K+</h1>
                <h5 class="text-800">Happy clients</h5>
              </div>
            </div>
            <div class="col-6 col-lg mb-5">
              <div class="text-center"><img src="img/icons/goods.png" alt="..." />
                <h1 class="text-secondary mt-4">130M+</h1>
                <h5 class="text-800">Goods delivered</h5>
              </div>
            </div>
            <div class="col-6 col-lg mb-5">
              <div class="text-center"><img src="img/icons/business.png" alt="..." />
                <h1 class="text-secondary mt-4">130M+</h1>
                <h5 class="text-800">Business hours</h5>
              </div>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->




      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section>

        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="card bg-dark text-white py-4 py-sm-0"><img class="w-100" src="img/gallery/video.png" alt="video" />
                <div class="card-img-overlay bg-dark-gradient d-flex flex-column flex-center"> <img src="img/icons/play.png"  width="80" alt="play" />
                  <h5 class="text-secondary">FASTEST DELIVERY</h5>
                  <p class="text-center">You can get your valuable item in the fastest period of<br class="d-none d-sm-block" />time with safety. Because your emergency<br class="d-none d-sm-block" />is our first priority.</p><a class="stretched-link" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"></a>
                  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                      <div class="modal-content overflow-hidden">
                        <div class="modal-header p-0">
                          <div class="ratio ratio-16x9" id="exampleModalLabel">
                            <iframe src="https://www.youtube.com/embed/TlcP2aTOp-Q" title="YouTube video" allowfullscreen="allowfullscreen"></iframe>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button class="btn btn-primary" type="button" data-bs-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->




      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="py-7">

        <div class="container-fluid">
          <div class="row flex-center">
            <div class="bg-holder bg-size" style="background-image:url(img/gallery/quote.png);background-position:top;background-size:auto;margin-left:-270px;margin-top:-45px;">
            </div>
            <!--/.bg-holder-->

            <div class="col-md-8 col-lg-5 text-center">
              <h5 class="text-secondary">TESTIMONIAL</h5>
              <h2>Our Awesome Clients</h2>
            </div>
          </div>
          <div class="carousel slide pt-6" id="carouselExampleDark" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="10000">
                <div class="row h-100">
                  <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card h-100 card-span p-3">
                      <div class="card-body">
                        <h5 class="mb-0 text-secondary">Fantastic service!</h5>
                        <p class="card-text pt-3">I purchased a phone from an e-commerce site, and this courier service provider assisted me in getting it delivered to my home. I received my phone within one day, and I was really satisfied with their service when I received it. </p>
                        <div class="d-xl-flex justify-content-between align-items-center">
                          <div class="d-flex align-items-center mb-3"><i class="fas fa-star text-secondary me-1"></i><i class="fas fa-star text-secondary me-1"></i><i class="fas fa-star text-secondary me-1"></i><i class="fas fa-star text-secondary me-1"></i><i class="fas fa-star text-secondary me-1"></i></div>
                          <div class="d-flex align-items-center"><img class="img-fluid" src="img/icons/avatar.png" alt="" />
                            <div class="flex-1 ms-3">
                              <h6 class="mb-0 fs--1 text-1000 fw-medium">Yves Tanguy</h6>
                              <p class="fs--2 fw-normal mb-0">Chief Executive, DLF</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card h-100 card-span p-3">
                      <div class="card-body">
                        <h5 class="mb-0 text-secondary">Fantastic service!</h5>
                        <p class="card-text pt-3">I purchased a phone from an e-commerce site, and this courier service provider assisted me in getting it delivered to my home. I received my phone within one day, and I was really satisfied with their service when I received it.</p>
                        <div class="d-xl-flex justify-content-between align-items-center">
                          <div class="d-flex align-items-center mb-3"><i class="fas fa-star text-secondary me-1"></i><i class="fas fa-star text-secondary me-1"></i><i class="fas fa-star text-secondary me-1"></i><i class="fas fa-star text-secondary me-1"></i><i class="fas fa-star text-secondary me-1"></i></div>
                          <div class="d-flex align-items-center"><img class="img-fluid" src="img/icons/avatar.png" alt="" />
                            <div class="flex-1 ms-3">
                              <h6 class="mb-0 fs--1 text-1000 fw-medium">Kim Young Jou</h6>
                              <p class="fs--2 fw-normal mb-0">Chief Executive, DLF</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card h-100 card-span p-3">
                      <div class="card-body">
                        <h5 class="mb-0 text-secondary">Fantastic service!</h5>
                        <p class="card-text pt-3">I purchased a phone from an e-commerce site, and this courier service provider assisted me in getting it delivered to my home. I received my phone within one day, and I was really satisfied with their service when I received it. .</p>
                        <div class="d-xl-flex justify-content-between align-items-center">
                          <div class="d-flex align-items-center mb-3"><i class="fas fa-star text-secondary me-1"></i><i class="fas fa-star text-secondary me-1"></i><i class="fas fa-star text-secondary me-1"></i><i class="fas fa-star text-secondary me-1"></i><i class="fas fa-star text-secondary me-1"></i></div>
                          <div class="d-flex align-items-center"><img class="img-fluid" src="img/icons/avatar.png" alt="" />
                            <div class="flex-1 ms-3">
                              <h6 class="mb-0 fs--1 text-1000 fw-medium">Yves Tanguy</h6>
                              <p class="fs--2 fw-normal mb-0">Chief Executive, DLF</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item" data-bs-interval="2000">
                <div class="row h-100">
                  <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card h-100 card-span p-3">
                      <div class="card-body">
                        <h5 class="mb-0 text-secondary">Fantastic service!</h5>
                        <p class="card-text pt-3">I purchased a phone from an e-commerce site, and this courier service provider assisted me in getting it delivered to my home. I received my phone within one day, and I was really satisfied with their service when I received it. </p>
                        <div class="d-xl-flex justify-content-between align-items-center">
                          <div class="d-flex align-items-center mb-3"><i class="fas fa-star text-secondary me-1"></i><i class="fas fa-star text-secondary me-1"></i><i class="fas fa-star text-secondary me-1"></i><i class="fas fa-star text-secondary me-1"></i><i class="fas fa-star text-secondary me-1"></i></div>
                          <div class="d-flex align-items-center"><img class="img-fluid" src="img/icons/avatar.png" alt="" />
                            <div class="flex-1 ms-3">
                              <h6 class="mb-0 fs--1 text-1000 fw-medium">Yves Tanguy</h6>
                              <p class="fs--2 fw-normal mb-0">Chief Executive, DLF</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card h-100 card-span p-3">
                      <div class="card-body">
                        <h5 class="mb-0 text-secondary">Fantastic service!</h5>
                        <p class="card-text pt-3">I purchased a phone from an e-commerce site, and this courier service provider assisted me in getting it delivered to my home. I received my phone within one day, and I was really satisfied with their service when I received it. </p>
                        <div class="d-xl-flex justify-content-between align-items-center">
                          <div class="d-flex align-items-center mb-3"><i class="fas fa-star text-secondary me-1"></i><i class="fas fa-star text-secondary me-1"></i><i class="fas fa-star text-secondary me-1"></i><i class="fas fa-star text-secondary me-1"></i><i class="fas fa-star text-secondary me-1"></i></div>
                          <div class="d-flex align-items-center"><img class="img-fluid" src="img/icons/avatar.png" alt="" />
                            <div class="flex-1 ms-3">
                              <h6 class="mb-0 fs--1 text-1000 fw-medium">Kim Young Jou</h6>
                              <p class="fs--2 fw-normal mb-0">Chief Executive, DLF</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card h-100 card-span p-3">
                      <div class="card-body">
                        <h5 class="mb-0 text-secondary">Fantastic service!</h5>
                        <p class="card-text pt-3">I purchased a phone from an e-commerce site, and this courier service provider assisted me in getting it delivered to my home. I received my phone within one day, and I was really satisfied with their service when I received it. .</p>
                        <div class="d-xl-flex justify-content-between align-items-center">
                          <div class="d-flex align-items-center mb-3"><i class="fas fa-star text-secondary me-1"></i><i class="fas fa-star text-secondary me-1"></i><i class="fas fa-star text-secondary me-1"></i><i class="fas fa-star text-secondary me-1"></i><i class="fas fa-star text-secondary me-1"></i></div>
                          <div class="d-flex align-items-center"><img class="img-fluid" src="img/icons/avatar.png" alt="" />
                            <div class="flex-1 ms-3">
                              <h6 class="mb-0 fs--1 text-1000 fw-medium">Yves Tanguy</h6>
                              <p class="fs--2 fw-normal mb-0">Chief Executive, DLF</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="row h-100">
                  <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card h-100 card-span p-3">
                      <div class="card-body">
                        <h5 class="mb-0 text-secondary">Fantastic service!</h5>
                        <p class="card-text pt-3">I purchased a phone from an e-commerce site, and this courier service provider assisted me in getting it delivered to my home. I received my phone within one day, and I was really satisfied with their service when I received it. </p>
                        <div class="d-xl-flex justify-content-between align-items-center">
                          <div class="d-flex align-items-center mb-3"><i class="fas fa-star text-secondary me-1"></i><i class="fas fa-star text-secondary me-1"></i><i class="fas fa-star text-secondary me-1"></i><i class="fas fa-star text-secondary me-1"></i><i class="fas fa-star text-secondary me-1"></i></div>
                          <div class="d-flex align-items-center"><img class="img-fluid" src="img/icons/avatar.png" alt="" />
                            <div class="flex-1 ms-3">
                              <h6 class="mb-0 fs--1 text-1000 fw-medium">Yves Tanguy</h6>
                              <p class="fs--2 fw-normal mb-0">Chief Executive, DLF</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card h-100 card-span p-3">
                      <div class="card-body">
                        <h5 class="mb-0 text-secondary">Fantastic service!</h5>
                        <p class="card-text pt-3">“I purchased a phone from an e-commerce site, and this courier service provider assisted me in getting it delivered to my home. I received my phone within one day, and I was really satisfied with their service when I received it. </p>
                        <div class="d-xl-flex justify-content-between align-items-center">
                          <div class="d-flex align-items-center mb-3"><i class="fas fa-star text-secondary me-1"></i><i class="fas fa-star text-secondary me-1"></i><i class="fas fa-star text-secondary me-1"></i><i class="fas fa-star text-secondary me-1"></i><i class="fas fa-star text-secondary me-1"></i></div>
                          <div class="d-flex align-items-center"><img class="img-fluid" src="img/icons/avatar.png" alt="" />
                            <div class="flex-1 ms-3">
                              <h6 class="mb-0 fs--1 text-1000 fw-medium">Kim Young Jou</h6>
                              <p class="fs--2 fw-normal mb-0">Chief Executive, DLF</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card h-100 card-span p-3">
                      <div class="card-body">
                        <h5 class="mb-0 text-secondary">Fantastic service!</h5>
                        <p class="card-text pt-3">I purchased a phone from an e-commerce site, and this courier service provider assisted me in getting it delivered to my home. I received my phone within one day, and I was really satisfied with their service when I received it. .</p>
                        <div class="d-xl-flex justify-content-between align-items-center">
                          <div class="d-flex align-items-center mb-3"><i class="fas fa-star text-secondary me-1"></i><i class="fas fa-star text-secondary me-1"></i><i class="fas fa-star text-secondary me-1"></i><i class="fas fa-star text-secondary me-1"></i><i class="fas fa-star text-secondary me-1"></i></div>
                          <div class="d-flex align-items-center"><img class="img-fluid" src="img/icons/avatar.png" alt="" />
                            <div class="flex-1 ms-3">
                              <h6 class="mb-0 fs--1 text-1000 fw-medium">Yves Tanguy</h6>
                              <p class="fs--2 fw-normal mb-0">Chief Executive, DLF</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row px-3 px-md-0 mt-6">
              <div class="col-12 position-relative">
                <ol class="carousel-indicators ">
                  <li class="active" data-bs-target="#carouselExampleDark" data-bs-slide-to="0"></li>
                  <li data-bs-target="#carouselExampleDark" data-bs-slide-to="1"></li>
                  <li data-bs-target="#carouselExampleDark" data-bs-slide-to="2"></li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <section id="contactUs">
        <h5 class="text-center text-secondary mt-5">Contact us</h5> 
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5 col-xl-4"><img src="img/illustrations/callback.png" alt="..." />
              <h5 class="text-secondary">REQUEST A CALLBACK</h5>
              <h2>We will contact in the shortest time.</h2>
            </div>
            <div class="col-md-6 col-lg-5 col-xl-4">
              <form class="row">
                <div class="mb-3">
                  <label class="form-label visually-hidden" for="inputName">Name</label>
                  <input class="form-control form-quriar-control" id="inputName" type="text" placeholder="Name" required />
                </div>
                <div class="mb-3">
                  <label class="form-label visually-hidden" for="inputEmail">Another label</label>
                  <input class="form-control form-quriar-control" id="inputEmail" type="email" placeholder="Email" required />
                </div>
                <div class="mb-5">
                  <label class="form-label visually-hidden" for="validationTextarea">Message</label>
                  <textarea class="form-control form-quriar-control  border-400" id="validationTextarea" placeholder="Message" style="height: 150px" required="required"></textarea>
                </div>
                <div class="d-grid">
                  <button class="btn btn-secondary" type="submit">Send Message<i class="fas fa-paper-plane ms-2"></i></button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <section id="findUs" >

        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-8 col-lg-5 mb-6 text-center">
              <h5 class="text-secondary">FIND US</h5>
              <h2>Access us easily</h2>
            </div>
            <div class="col-12">
              <div class="card card-span rounded-2 mb-3">
                <div class="row">
                  <div class="col-md-6 col-lg-7 d-flex"><img class="w-100 fit-cover rounded-md-start rounded-top rounded-md-top-0" src="img/gallery/map.svg" alt="map" /></div>
                  <div class="col-md-6 col-lg-5 d-flex flex-center">
                    <div class="card-body">
                     
                      <p class="text-700 my-4"> <i class="fas fa-map-marker-alt text-secondary me-3"></i><span>2277 Lorem Ave, San Diego, CA 22553</span></p>
                      <p><i class="fas fa-phone-alt text-secondary me-3"></i><span class="text-700">Monday - Friday: 10 am - 10pm<br/><span class="ps-4">Sunday: 11 am - 9pm  </span></span></p>
                      <p><i class="fas fa-envelope text-secondary me-3"> </i><a class="text-700" href="mailto:vctung@outlook.com"> info@gocourier.com</a></p>
                      <ul class="list-unstyled list-inline mt-5">
                        <li class="list-inline-item"><a class="text-decoration-none" href="#!"><i class="fab fa-facebook-square fs-2"></i></a></li>
                        <li class="list-inline-item"><a class="text-decoration-none" href="#!"><i class="fab fa-instagram-square fs-2"></i></a></li>
                        <li class="list-inline-item"><a class="text-decoration-none" href="#!"><i class="fab fa-twitter-square fs-2"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="text-center">
                <button class="btn btn-secondary px-5" type="submit"><i class="fas fa-phone-alt me-2"></i><a class="text-light" href="tel:123-456789">Call us to delivery 123-456789</a></button>
              </div>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->




      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="bg-1000">

        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <h2 class="fw-bold text-white">Get an update every week</h2>
              <p class="text-300">We ensure that your product is delivered in the safest possible<br />manner, at the correct location, at the right time.</p>
            </div>
            <div class="col-lg-6">
              <h5 class="text-secondary mb-3">SUBSCRIBE TO NEWSLETTER </h5>
              <form class="row gx-2 gy-2 align-items-center">
                <div class="col">
                  <div class="input-group-icon">
                    <label class="visually-hidden" for="inputEmailCta">Address</label>
                    <input class="form-control input-box form-quriar-control text-light" id="inputEmailCta" type="email" placeholder="Enter your mail" required />
                  </div>
                </div>
                <div class="d-grid gap-3 col-sm-auto">
                  <button class="btn btn-secondary" type="submit">Subscribe</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->




      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="bg-1000 pb-0 pt-5">

        <div class="container">
          <div class="row">
            <div class="col-12 col-sm-12 col-lg-6 mb-4 order-0 order-sm-0"><a class="text-decoration-none" href="#"><img style="border-radius: 30%;" src="logo.webp" height="100px"  class="bg-100" alt="" /></a>
              <p class="text-500 my-4">The most trusted Courier<br />company in your area.</p>
            </div>
            <div class="col-6 col-sm-4 col-lg-2 mb-3 order-2 order-sm-1">
              <h5 class="lh-lg fw-bold mb-4 text-light font-sans-serif">Other links </h5>
              <ul class="list-unstyled mb-md-4 mb-lg-0">
                <li class="lh-lg"><a class="text-500" href="#!">Blogs</a></li>
                <li class="lh-lg"><a class="text-500" href="#!">Movers website</a></li>
                <li class="lh-lg"><a class="text-500" href="#!">Traffic Update</a></li>
              </ul>
            </div>
            <div class="col-6 col-sm-4 col-lg-2 mb-3 order-3 order-sm-2">
              <h5 class="lh-lg fw-bold text-light mb-4 font-sans-serif">Services</h5>
              <ul class="list-unstyled mb-md-4 mb-lg-0">
                <li class="lh-lg"><a class="text-500" href="#!">Corporate goods</a></li>
                <li class="lh-lg"><a class="text-500" href="#!">Artworks</a></li>
                <li class="lh-lg"><a class="text-500" href="#!">Documents</a></li>
              </ul>
            </div>
            <div class="col-6 col-sm-4 col-lg-2 mb-3 order-3 order-sm-2">
              <h5 class="lh-lg fw-bold text-light mb-4 font-sans-serif"> Customer Care</h5>
              <ul class="list-unstyled mb-md-4 mb-lg-0">
                <li class="lh-lg"><a class="text-500" href="#!">About Us</a></li>
                <li class="lh-lg"><a class="text-500" href="#!">Contact US</a></li>
                <li class="lh-lg"><a class="text-500" href="#!">Get Update</a></li>
              </ul>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->




      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="py-0 bg-1000">

        <div class="container">
          <div class="row justify-content-md-between justify-content-evenly py-4">
            <div class="col-12 col-sm-8 col-md-6 col-lg-auto text-center text-md-start">
              <p class="fs--1 my-2 fw-bold text-200">All rights Reserved &copy; Go Courier, Pakistan</p>
            </div>
            
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->


    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->
   
      <!-- Register  Modal -->
<div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form action="code.php" method="post">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Register Now</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <input type="text" class="form-control mb-3" name="customer_name" placeholder="customer_name">
      <input type="text" class="form-control mb-3" name="customer_email" placeholder="customer_email">
      <input type="text" class="form-control mb-3" name="customer_password" placeholder="customer_password">
      <input type="text" class="form-control mb-3" name="customer_address" placeholder="customer_address">
      <input type="text" class="form-control mb-3" name="customer_phone_number" placeholder="customer_phone_number">
      <input type="text" class="form-control mb-3" name="customer_CNIC" placeholder="customer_CNIC">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="addcustomer" class="btn btn-primary">Save changes</button>
      </div>
    </div>
    </form>
  </div>
</div>




    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="vendors/@popperjs/popper.min.js"></script>
    <script src="vendors/bootstrap/bootstrap.min.js"></script>
    <script src="vendors/is/is.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="vendors/fontawesome/all.min.js"></script>
    <script src="js/theme.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200;300;400;500;600;700;800&amp;display=swap" rel="stylesheet">
  
  </body>

</html>
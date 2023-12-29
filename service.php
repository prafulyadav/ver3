<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <title>Medwell | Services</title>
    <link rel="icon" href="assets/images/fav-icon.png">
    <link rel="stylesheet" href="assets/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">

    <link rel="stylesheet" href="assets/css/superclasses.css">
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel="stylesheet" href="assets/css/common.css" />
    <link rel="stylesheet" href="assets/css/mobile.css">
</head>

<body>
    <!-- Preloader -->
    <div class="loader-mask">
        <div class="loader">
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- Preloader -->
    <!-- HEADER SECTION -->
    <style>
        .header-con {
            transition: background-color 0.3s ease;
            /* Add a smooth transition effect */
            color: #02a6c7;
        }

        .header-fixed {
            position: fixed;
            top: 0;
            width: 100%;
            padding: 1vw;
            z-index: 1000;
            background-color: #02a6c7;
            margin: auto;
            color: white;
        }

        .header-transparent {
            top: 0;
            background-color: #02a6c7;
            color: white;
            padding: 1vw;

        }
    </style>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var header = document.querySelector(".header-con");
            var scrollPosition = window.scrollY;

            function onScroll() {
                scrollPosition = window.scrollY;

                if (scrollPosition > 0) {
                    header.classList.add("header-fixed");
                    header.classList.remove("header-transparent");
                } else {
                    header.classList.remove("header-fixed");
                    header.classList.add("header-transparent");
                }
            }

            // Listen for the scroll event
            window.addEventListener("scroll", onScroll);

            // Call onScroll initially to set the initial state based on page load
            onScroll();
        });
    </script>
    <header class="w-100 float-left header-con">
        <div class="wrapper">
            <nav class="navbar navbar-expand-lg navbar-light p-0">
                <a class="navbar-brand" href="index.html">
                    <figure class="mb-0">
                        <img class="logo_mainp" src="assets/images/logo.png" alt="logo" />
                    </figure>
                </a>
                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <ul class="navbar-nav" style="gap: 30px">
                        <li class="nav-item active">
                            <a class="nav-link p-0" href="index.html">Home</a>
                        </li>
                        <!-- <li class="nav-item">
                                <a class="nav-link p-0" href="about-us.html">About</a>
                            </li> -->

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle p-0" href="#" id="navbarDropdown3" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                About Care
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown3">
                                <ul class="list-unstyled mb-0">
                                    <li>
                                        <a class="dropdown-item" href="about-us.html">About Care</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="doctors.html">Team</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="one-column.html">Mission</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="two-column.html">Vision</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle p-0" href="#" id="navbarDropdown3" role="button" data-toggle="dropdown"
                              aria-haspopup="true" aria-expanded="false">
                              Services
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown3">
                              <ul class="list-unstyled mb-0">
                                <li>
                                  <a class="dropdown-item" href="service.html">Service 1</a>
                                </li>
                                <li>
                                  <a class="dropdown-item" href="service.html">Service 2</a>
                                </li>
                                <li>
                                  <a class="dropdown-item" href="service.html">Service 3</a>
                                </li>
                                <li>
                                  <a class="dropdown-item" href="service.html">Service 4</a>
                                </li>
                              </ul>
                            </div>
                          </li>

                        <li class="nav-item">
                            <a class="nav-link p-0" href="single-blog.html">
                                Why Choose Us
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link p-0" href="pricing.html"> Pricing </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link p-0" href="contact.html"> Appointments </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link p-0" href="contact.html">Contact Us</a>
                        </li>
                    </ul>
                    <div class="header-contact d-flex align-items-center">
                        <div class="phone d-flex align-items-center">
                            <figure class="mb-0">
                                <img src="assets/images/headphone-icon.png" alt="headphone-icon" />
                            </figure>
                            <div class="phone-txt">
                                <span class="d-block">Call us at:</span>
                                <a href="tel:+012(345)6789">+012 (345) 6789</a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!-- HEADER SECTION -->
    <!-- BANNER SECTION -->
    <!-- <section class="w-100 float-left services-banner-sec sub-banner-con position-relative">
        <div class="wrapper2">
            <div class="sub-banner-inner-box banner-inner-box position-relative text-center w-100 float-left">
                <h1 data-aos="fade-up" data-aos-duration="700">Services</h1>
                <p data-aos="fade-up" data-aos-duration="700">Ruis aute irure dolor in reprehenderit in voluptate velit
                    essecillum <br>
                    dolore fugiat nulla pariatur</p>
                <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-duration="700">
                    <ol class="breadcrumb d-inline-block mb-0">
                        <li class="breadcrumb-item d-inline-block"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active text-white d-inline-block" aria-current="page">Services</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section> -->
    <!-- BANNER SECTION -->
    <!-- MEDICAL SERVICES SECTION -->

   <br>
    <section class="medical-services-sec w-100 float-left padding-top padding-bottom">
        <div class="container">
            <div class="generic-title text-center">
                <span class="d-block sub-txt" data-aos="fade-up" data-aos-duration="700">WHAT WE PROVIDE</span>
                <h2 class="mb-0" data-aos="fade-up" data-aos-duration="700">Our Medical Services</h2>
            </div>
            <div class="service-categories">
                <div class="category-box" data-aos="fade-up" data-aos-duration="700">
                    <figure class="mb-0">
                        <img src="assets/images/category-img1.jpg" alt="category-img1">
                    </figure>
                    <div class="category-details d-flex position-relative">
                        <figure class="mb-0">
                            <img src="assets/images/category-icon1.jpg" alt="category-icon1">
                        </figure>
                        <h4>Cardiologist</h4>
                        <p>Duis aute irure dolor in
                            reprehenderit in voluta
                            zesse cillum...</p>
                        <a href="#">Read More <i class="fas fa-angle-right"></i></a>
                    </div>
                </div>
                <div class="category-box" data-aos="fade-up" data-aos-duration="700">
                    <figure class="mb-0">
                        <img src="assets/images/category-img2.jpg" alt="category-img2">
                    </figure>
                    <div class="category-details d-flex position-relative">
                        <figure class="mb-0">
                            <img src="assets/images/category-icon2.jpg" alt="category-icon2">
                        </figure>
                        <h4>Pulmonary</h4>
                        <p>Guis aute irure dolor in
                            reprehenderit in voluta
                            zesse cillum...</p>
                        <a href="#">Read More <i class="fas fa-angle-right"></i></a>
                    </div>
                </div>
                <div class="category-box" data-aos="fade-up" data-aos-duration="700">
                    <figure class="mb-0">
                        <img src="assets/images/category-img3.jpg" alt="category-img3">
                    </figure>
                    <div class="category-details d-flex position-relative">
                        <figure class="mb-0">
                            <img src="assets/images/category-icon3.jpg" alt="category-icon3">
                        </figure>
                        <h4>Gynecology</h4>
                        <p>Nuis aute irure dolor in
                            reprehenderit in voluta
                            zesse cillum...</p>
                        <a href="#">Read More <i class="fas fa-angle-right"></i></a>
                    </div>
                </div>
                <div class="category-box" data-aos="fade-up" data-aos-duration="700">
                    <figure class="mb-0">
                        <img src="assets/images/category-img4.jpg" alt="category-img4">
                    </figure>
                    <div class="category-details d-flex position-relative">
                        <figure class="mb-0">
                            <img src="assets/images/category-icon4.jpg" alt="category-icon4">
                        </figure>
                        <h4>Ophthalmology</h4>
                        <p>Euis aute irure dolor in
                            reprehenderit in voluta
                            zesse cillum...</p>
                        <a href="#">Read More <i class="fas fa-angle-right"></i></a>
                    </div>
                </div>
                <div class="category-box" data-aos="fade-up" data-aos-duration="700">
                    <figure class="mb-0">
                        <img src="assets/images/category-img5.jpg" alt="category-img5">
                    </figure>
                    <div class="category-details d-flex position-relative">
                        <figure class="mb-0">
                            <img src="assets/images/category-icon5.jpg" alt="category-icon5">
                        </figure>
                        <h4>Psychiatry</h4>
                        <p>Quis aute irure dolor in
                            reprehenderit in voluta
                            zesse cillum...</p>
                        <a href="#">Read More <i class="fas fa-angle-right"></i></a>
                    </div>
                </div>
                <div class="category-box" data-aos="fade-up" data-aos-duration="700">
                    <figure class="mb-0">
                        <img src="assets/images/category-img6.jpg" alt="category-img6">
                    </figure>
                    <div class="category-details d-flex position-relative">
                        <figure class="mb-0">
                            <img src="assets/images/category-icon6.jpg" alt="category-icon6">
                        </figure>
                        <h4>Otology</h4>
                        <p>Ruis aute irure dolor in
                            reprehenderit in voluta
                            zesse cillum...</p>
                        <a href="#">Read More <i class="fas fa-angle-right"></i></a>
                    </div>
                </div>
                <div class="category-box" data-aos="fade-up" data-aos-duration="700">
                    <figure class="mb-0">
                        <img src="assets/images/category-img7.jpg" alt="category-img7">
                    </figure>
                    <div class="category-details d-flex position-relative">
                        <figure class="mb-0">
                            <img src="assets/images/category-icon7.jpg" alt="category-icon7">
                        </figure>
                        <h4>Hematology</h4>
                        <p>Zuis aute irure dolor in
                            reprehenderit in voluta
                            zesse cillum...</p>
                        <a href="#">Read More <i class="fas fa-angle-right"></i></a>
                    </div>
                </div>
                <div class="category-box" data-aos="fade-up" data-aos-duration="700">
                    <figure class="mb-0">
                        <img src="assets/images/category-img8.jpg" alt="category-img8">
                    </figure>
                    <div class="category-details d-flex position-relative">
                        <figure class="mb-0">
                            <img src="assets/images/category-icon8.jpg" alt="category-icon8">
                        </figure>
                        <h4>Orthopedics</h4>
                        <p>Huis aute irure dolor in
                            reprehenderit in voluta
                            zesse cillum...</p>
                        <a href="#">Read More <i class="fas fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- MEDICAL SERVICES SECTION -->
    <!-- CONTACT SECTION -->
    <section class="w-100 float-left contact-con position-relative">
        <div class="dots-img position-relative">
            <div class="padding-top padding-bottom contact-inner-con position-relative">
                <div class="container">
                    <div class="contact-form" data-aos="fade-up" data-aos-duration="700">
                        <span class="sub-txt d-block">Request a consultation</span>
                        <h2>Make an Appointent</h2>
                        <form class="form-box" method="post" id="contactpage">
                            <ul class="list-unstyled" data-aos="fade-up" data-aos-duration="700">
                                <li>
                                    <input type="text" name="fname" id="fname" placeholder="Your Name:">
                                </li>
                                <li>
                                    <input type="tel" name="phone" id="phone" placeholder="Phone No:">
                                </li>
                                <li>
                                    <input type="email" placeholder="Your Email:" name="email" id="email">
                                </li>
                                <li>
                                    <input placeholder="Date:" type="text" onfocus="(this.type = 'date')" id="date">
                                </li>
                                <li>
                                    <textarea placeholder="Message:" name="subject" id="subject"></textarea>
                                </li>
                            </ul>
                            <div class="submit-btn" data-aos="fade-up" data-aos-duration="700">
                                <button type="submit" id="submit">
                                    Book an Appointment
                                    <figure class="mb-0">
                                        <img src="assets/images/top-arrow.png" alt="top-arrow">
                                    </figure>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- CONTACT SECTION -->
    <!-- WORK PROCESS SECTION -->
    <section class="work-process-sec w-100 float-left padding-bottom padding-top">
        <div class="container">
            <div class="generic-title text-center">
                <span class="d-block sub-txt" data-aos="fade-up" data-aos-duration="700">WORK PROCESS</span>
                <h2 class="mb-0" data-aos="fade-up" data-aos-duration="700">Let’s See How We Work</h2>
            </div>
            <div class="process-con">
                <ul class="list-unstyled mb-0">
                    <li class="text-center">
                        <div class="process-img-box" data-aos="fade-up" data-aos-duration="700">
                            <figure>
                                <img src="assets/images/process-img1.png" alt="process-img1">
                            </figure>
                            <span>01</span>
                        </div>
                        <h4 data-aos="fade-up" data-aos-duration="700">Seeing Patients</h4>
                        <p data-aos="fade-up" data-aos-duration="700">Rure dolor aen voluta <br>
                            zesse cillum...</p>
                    </li>
                    <li class="text-center">
                        <div class="process-img-box" data-aos="fade-up" data-aos-duration="700">
                            <figure>
                                <img src="assets/images/process-img2.png" alt="process-img2">
                            </figure>
                            <span>02</span>
                        </div>
                        <h4 data-aos="fade-up" data-aos-duration="700">Making a Diagnosis</h4>
                        <p data-aos="fade-up" data-aos-duration="700">Gure dolor aen voluta <br>
                            zesse cillum...</p>
                    </li>
                    <li class="text-center">
                        <div class="process-img-box" data-aos="fade-up" data-aos-duration="700">
                            <figure>
                                <img src="assets/images/process-img3.png" alt="process-img3">
                            </figure>
                            <span>03</span>
                        </div>
                        <h4 data-aos="fade-up" data-aos-duration="700">Developing a Treatment</h4>
                        <p data-aos="fade-up" data-aos-duration="700">Hure dolor aen voluta <br>
                            zesse cillum...</p>
                    </li>
                    <li class="text-center">
                        <div class="process-img-box" data-aos="fade-up" data-aos-duration="700">
                            <figure>
                                <img src="assets/images/process-img4.png" alt="process-img4">
                            </figure>
                            <span>04</span>
                        </div>
                        <h4 data-aos="fade-up" data-aos-duration="700">Documenting Patient</h4>
                        <p data-aos="fade-up" data-aos-duration="700">Zure dolor aen voluta <br>
                            zesse cillum...</p>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- WORK PROCESS SECTION -->
    <!-- COUNTER SECTION -->
    <div class="counter-section w-100 float-left">
        <div class="container">
            <div class="counter-inner-sec">
                <ul class="list-unstyled mb-0">
                    <li>
                        <figure data-aos="fade-up" data-aos-duration="700">
                            <img src="assets/images/counter-img1.png" alt="counter-img1">
                        </figure>
                        <div class="counter-box position-relative" data-aos="fade-up" data-aos-duration="700">
                            <div class="count d-inline-block">3859</div>
                            <div class="plus d-inline-block"><span>+</span></div>
                        </div>
                        <span class="d-block client-status" data-aos="fade-up" data-aos-duration="700">Professional
                            Doctors</span>
                    </li>
                    <li>
                        <figure data-aos="fade-up" data-aos-duration="700">
                            <img src="assets/images/counter-img2.png" alt="counter-img2">
                        </figure>
                        <div class="counter-box position-relative" data-aos="fade-up" data-aos-duration="700">
                            <div class="count d-inline-block">8596</div>
                            <div class="plus d-inline-block"><span></span></div>
                        </div>
                        <span class="d-block client-status" data-aos="fade-up" data-aos-duration="700">Globally
                            Hospitals</span>
                    </li>
                    <li>
                        <figure data-aos="fade-up" data-aos-duration="700">
                            <img src="assets/images/counter-img3.png" alt="counter-img3">
                        </figure>
                        <div class="counter-box position-relative" data-aos="fade-up" data-aos-duration="700">
                            <div class="count d-inline-block">42</div>
                            <div class="plus d-inline-block"><span>+</span></div>
                        </div>
                        <span class="d-block client-status" data-aos="fade-up" data-aos-duration="700">Years of
                            Expereince</span>
                    </li>
                    <li>
                        <figure data-aos="fade-up" data-aos-duration="700">
                            <img src="assets/images/counter-img4.png" alt="counter-img4">
                        </figure>
                        <div class="counter-box position-relative" data-aos="fade-up" data-aos-duration="700">
                            <div class="count d-inline-block">852</div>
                            <div class="plus d-inline-block"><span>+</span></div>
                        </div>
                        <span class="d-block client-status" data-aos="fade-up" data-aos-duration="700">Successful
                            Operations</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- COUNTER SECTION -->
    <!-- BLOG SECTION -->
    <section class="blogs-section w-100 float-left padding-top padding-bottom">
        <div class="container">
            <div class="generic-title text-center">
                <span class="sub-txt d-block" data-aos="fade-up" data-aos-duration="700">ARTICLES & TIPS</span>
                <h2 data-aos="fade-up" data-aos-duration="700">Latest News & Blogs</h2>
            </div>
            <div class="blogs-inner-con" data-aos="fade-up" data-aos-duration="700">
                <div id="owl-carouseltwo" class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="blog-box">
                            <div class="blog-first-img blog-img-box"></div>
                            <div class="blog-details">
                                <span class="d-block"><i class="fas fa-calendar-alt"></i> Mar 20, 2021</span>
                                <h4><a href="single-blog.html">Get the Home care and
                                        nursing service</a></h4>
                                <p>Debitis aut rerum nec sitatoe
                                    bus saerue eveniet...</p>
                                <a href="single-blog.html">Read More <i class="fas fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="blog-box">
                            <div class="blog-second-img blog-img-box"></div>
                            <div class="blog-details">
                                <span class="d-block"><i class="fas fa-calendar-alt"></i> Feb 14, 2022</span>
                                <h4><a href="single-blog.html">Effective Ways to
                                        Manage Hypertension</a></h4>
                                <p>Debitis aut rerum nec sitatoe
                                    bus saerue eveniet...</p>
                                <a href="single-blog.html">Read More <i class="fas fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="blog-box">
                            <div class="blog-third-img blog-img-box"></div>
                            <div class="blog-details">
                                <span class="d-block"><i class="fas fa-calendar-alt"></i> Jun 07, 2022</span>
                                <h4><a href="single-blog.html">Dental or Implant.
                                        What is the Best?</a></h4>
                                <p>Debitis aut rerum nec sitatoe
                                    bus saerue eveniet...</p>
                                <a href="single-blog.html">Read More <i class="fas fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="blog-box">
                            <div class="blog-first-img blog-img-box"></div>
                            <div class="blog-details">
                                <span class="d-block"><i class="fas fa-calendar-alt"></i> Mar 20, 2021</span>
                                <h4><a href="single-blog.html">Get the Home care and
                                        nursing service</a></h4>
                                <p>Debitis aut rerum nec sitatoe
                                    bus saerue eveniet...</p>
                                <a href="single-blog.html">Read More <i class="fas fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="blog-box">
                            <div class="blog-second-img blog-img-box"></div>
                            <div class="blog-details">
                                <span class="d-block"><i class="fas fa-calendar-alt"></i> Feb 14, 2022</span>
                                <h4><a href="single-blog.html">Effective Ways to
                                        Manage Hypertension</a></h4>
                                <p>Debitis aut rerum nec sitatoe
                                    bus saerue eveniet...</p>
                                <a href="single-blog.html">Read More <i class="fas fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="blog-box">
                            <div class="blog-third-img blog-img-box"></div>
                            <div class="blog-details">
                                <span class="d-block"><i class="fas fa-calendar-alt"></i> Jun 07, 2022</span>
                                <h4><a href="single-blog.html">Dental or Implant.
                                        What is the Best?</a></h4>
                                <p>Debitis aut rerum nec sitatoe
                                    bus saerue eveniet...</p>
                                <a href="single-blog.html">Read More <i class="fas fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="blog-box">
                            <div class="blog-first-img blog-img-box"></div>
                            <div class="blog-details">
                                <span class="d-block"><i class="fas fa-calendar-alt"></i> Mar 20, 2021</span>
                                <h4><a href="single-blog.html">Get the Home care and
                                        nursing service</a></h4>
                                <p>Debitis aut rerum nec sitatoe
                                    bus saerue eveniet...</p>
                                <a href="single-blog.html">Read More <i class="fas fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="blog-box">
                            <div class="blog-second-img blog-img-box"></div>
                            <div class="blog-details">
                                <span class="d-block"><i class="fas fa-calendar-alt"></i> Feb 14, 2022</span>
                                <h4><a href="single-blog.html">Effective Ways to
                                        Manage Hypertension</a></h4>
                                <p>Debitis aut rerum nec sitatoe
                                    bus saerue eveniet...</p>
                                <a href="single-blog.html">Read More <i class="fas fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="blog-box">
                            <div class="blog-third-img blog-img-box"></div>
                            <div class="blog-details">
                                <span class="d-block"><i class="fas fa-calendar-alt"></i> Jun 07, 2022</span>
                                <h4><a href="single-blog.html">Dental or Implant.
                                        What is the Best?</a></h4>
                                <p>Debitis aut rerum nec sitatoe
                                    bus saerue eveniet...</p>
                                <a href="single-blog.html">Read More <i class="fas fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- BLOG SECTION -->
    <!-- GET IN TOUCH SECTION -->
    <section class="get-in-touch-section w-100 float-left">
        <div class="container">
            <div class="contact-section" data-aos="fade-up" data-aos-duration="700">
                <div class="doctor-img-con"></div>
                <div class="contact-txt-con">
                    <div class="generic-title mb-0">
                        <span class="sub-txt d-block">GET IN TOUCH</span>
                        <h2>Provide The Best Medical
                            Service for You!</h2>
                    </div>
                    <div class="submit-btn">
                        <a href="contact.html">Book an Appointment</a>
                        <a href="contact.html">
                            <figure class="mb-0">
                                <img src="assets/images/top-arrow.png" alt="top-arrow">
                            </figure>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- GET IN TOUCH SECTION -->
    <!-- FOOTER SECTION -->
    <section class="footer-main-section w-100 float-left">
        <div class="container">
            <div class="footer-inner-con">
                <div class="footer-box footer-logo-box">
                    <figure>
                        <img class="logo_mainp" src="assets/images/logo.png" alt="logo" />

                    </figure>
                    <p>Quis autem vel eum iure reprehenderit rui
                        in ea voluptate velit esse quam nihil moles
                        illum rui dolorem eum fugiat...</p>
                    <p class="mb-0">Suscipit laboriosam, nisi ut aliruid commo
                        nostrum veniam...</p>
                </div>
                <div class="footer-box footer-pages-links">
                    <h4>Our Services</h4>
                    <ul class="list-unstyled mb-0">
                        <li><i class="fas fa-angle-right"></i><a href="services.html">Cardiologist</a></li>
                        <li><i class="fas fa-angle-right"></i><a href="services.html">Pulmonary</a></li>
                        <li><i class="fas fa-angle-right"></i><a href="services.html">Gynecology</a></li>
                        <li><i class="fas fa-angle-right"></i><a href="services.html">Opthalmology</a></li>
                        <li><i class="fas fa-angle-right"></i><a href="services.html">Psychiatry</a></li>
                    </ul>
                </div>
                <div class="footer-box contact-details-box">
                    <h4>Contact Us</h4>
                    <ul class="list-unstyled mb-0">
                        <li><i class="fas fa-map-marker-alt"></i> 121 King Street Melbourne,
                            3000, Australia</li>
                        <li><i class="fas fa-envelope"></i> <a href="mailto:info@medwell.com">info@medwell.com</a></li>
                        <li><i class="fas fa-headphones"></i> <a href="tel:+568925896325">+5689 2589 6325</a></li>
                        <li><i class="fas fa-phone-alt"></i> <a href="tel:+12025550153">+1-202-555-0153</a></li>
                    </ul>
                </div>
                <div class="footer-box footer-newsletter">
                    <h4>Subscribe to Newsletter</h4>
                    <ul class="list-unstyled">
                        <li>
                            <input type="email" placeholder="Enter Your Email Address:">
                            <button type="submit"><i class="fas fa-paper-plane"></i></button>
                        </li>
                    </ul>
                    <div class="social-links">
                        <ul class="list-unstyled mb-0 d-flex">
                            <li class="d-flex justify-content-center align-items-center mb-0"><a
                                    href="https://www.facebook.com/login/"><i class="fab fa-facebook-f"></i></a></li>
                            <li class="d-flex justify-content-center align-items-center mb-0"><a
                                    href="https://twitter.com/i/flow/login?input_flow_data=%7B%22requested_variant%22%3A%22eyJsYW5nIjoiZW4ifQ%3D%3D%22%7D"><i
                                        class="fab fa-twitter"></i></a></li>
                            <li class="d-flex justify-content-center align-items-center mb-0"><a
                                    href="https://www.linkedin.com/login"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="copyright-con w-100 float-left text-center">
        <p class="mb-0">Copyright © 2023 medwell All rights reserved.</p>
    </div>
    <a id="button"></a>
    <!-- FOOTER SECTION -->

    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.js"></script>
    <script src="assets/js/aos.js"></script>
    <script src="assets/js/jquery.validate.js"></script>
    <script src="assets/js/contact-form.js"></script>
    <script>
        $(window).on('load', function () {
            // Preloader
            $('.loader').fadeOut();
            $('.loader-mask').delay(350).fadeOut('slow');
        });
    </script>
    <script>
        var btn = $('#button');

        $(window).scroll(function () {
            if ($(window).scrollTop() > 300) {
                btn.addClass('show');
            }
            else {
                btn.removeClass('show');
            }
        });
        btn.on('click', function (e) {
            e.preventDefault();
            $('html, body').animate({ scrollTop: 0 }, '300');
        });
    </script>
    <script>
        AOS.init();
    </script>
    <script>
        $('#owl-carouselone').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            autoplay: true,
            autoplayTimeout: 10000,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 3
                }
            }
        })
        $('#owl-carouseltwo').owlCarousel({
            loop: true,
            margin: 30,
            nav: true,
            autoplay: true,
            autoplayTimeout: 10000,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 3
                }
            }
        })
    </script>
    <script>
        AOS.init();
        function lightbox_open() {
            var lightBoxVideo = document.getElementById("VisaChipCardVideo");
            //   window.scrollTo(0, 0);
            document.getElementById('light').style.display = 'block';
            document.getElementById('fade1').style.display = 'block';
            lightBoxVideo.play();
        }

        function lightbox_close() {
            var lightBoxVideo = document.getElementById("VisaChipCardVideo");
            document.getElementById('light').style.display = 'none';
            document.getElementById('fade1').style.display = 'none';
            lightBoxVideo.pause();
        }
    </script>
    <script>
        $(document).ready(function () {

            var counters = $(".count");
            var countersQuantity = counters.length;
            var counter = [];

            for (i = 0; i < countersQuantity; i++) {
                counter[i] = parseInt(counters[i].innerHTML);
            }

            var count = function (start, value, id) {
                var localStart = start;
                setInterval(function () {
                    if (localStart < value) {
                        localStart++;
                        counters[id].innerHTML = localStart;
                    }
                }, 40);
            }

            for (j = 0; j < countersQuantity; j++) {
                count(0, counter[j], j);
            }
        });



        $('.count').each(function () {
            $(this).prop('Counter', 0).animate({
                Counter: $(this).text()
            }, {
                duration: 3300,
                easing: 'swing',
                step: function (now) {
                    $(this).text(Math.ceil(now));
                }
            });
        });
    </script>
</body>

</html>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <title>Medwell | Contact</title>
    <link rel="icon" href="assets/images/fav-icon.png">
    <link rel="stylesheet" href="assets/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">

    <link rel="stylesheet" href="assets/css/superclasses.css">
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel="stylesheet" href="assets/css/mobile.css">
    <link rel="stylesheet" href="assets/css/common.css" />
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
    <!-- <section class="w-100 float-left contact-banner-sec sub-banner-con position-relative">
        <div class="wrapper2">
            <div class="sub-banner-inner-box banner-inner-box position-relative text-center w-100 float-left">
                <h1 data-aos="fade-up" data-aos-duration="700">Contact Us</h1>
                <p data-aos="fade-up" data-aos-duration="700">Ruis aute irure dolor in reprehenderit in voluptate velit
                    essecillum <br>
                    dolore fugiat nulla pariatur</p>
                <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-duration="700">
                    <ol class="breadcrumb d-inline-block mb-0">
                        <li class="breadcrumb-item d-inline-block"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active text-white d-inline-block" aria-current="page">Contact Us</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section> -->
    <!-- BANNER SECTION -->
    <!-- PRICING SECTION -->
    <br>
    <br>
    <section class="contact-details-section bg-design w-100 float-left padding-top padding-bottom position-relative">
        <div class="container">
            <div class="generic-title text-center">
                <span class="d-block sub-txt" data-aos="fade-up" data-aos-duration="700">GET IN TOUCH</span>
                <h2 data-aos="fade-up" data-aos-duration="700">Feel Free To Contact</h2>
            </div>
            <div class="contact-links-main-sec">
                <div class="contact-links-box">
                    <div class="contact-img-box" data-aos="fade-up" data-aos-duration="700">
                        <figure>
                            <img src="assets/images/contact-img1.png" alt="contact-img1">
                        </figure>
                    </div>
                    <div class="contact-link">
                        <h5 data-aos="fade-up" data-aos-duration="700">Our Location</h5>
                        <p data-aos="fade-up" data-aos-duration="700">121 King Street, Melbourne
                            Victoria 3000 Australia</p>
                        <a class="contact-btn" href="#" data-aos="fade-up" data-aos-duration="700">Get Directions<i
                                class="fas fa-angle-right"></i></a>
                    </div>
                </div>
                <div class="contact-links-box">
                    <div class="contact-img-box" data-aos="fade-up" data-aos-duration="700">
                        <figure>
                            <img src="assets/images/contact-img2.png" alt="contact-img2">
                        </figure>
                    </div>
                    <div class="contact-link">
                        <h5 data-aos="fade-up" data-aos-duration="700">Email Us</h5>
                        <ul class="list-unstyled">
                            <li data-aos="fade-up" data-aos-duration="700"><a href="mailto:support@medwell.com"
                                    data-aos="fade-up" data-aos-duration="700">support@medwell.com</a></li>
                            <li data-aos="fade-up" data-aos-duration="700"><a href="mailto:medwell@gmail.com"
                                    data-aos="fade-up" data-aos-duration="700">medwell@gmail.com</a></li>
                        </ul>
                        <a class="contact-btn" href="#" data-aos="fade-up" data-aos-duration="700">Send Email<i
                                class="fas fa-angle-right"></i></a>
                    </div>
                </div>
                <div class="contact-links-box">
                    <div class="contact-img-box" data-aos="fade-up" data-aos-duration="700">
                        <figure>
                            <img src="assets/images/contact-img3.png" alt="contact-img3">
                        </figure>
                    </div>
                    <div class="contact-link">
                        <h5 data-aos="fade-up" data-aos-duration="700">Phone</h5>
                        <ul class="list-unstyled">
                            <li data-aos="fade-up" data-aos-duration="700"><a href="tel:+01234567899">+012 (345) 678
                                    99</a></li>
                            <li data-aos="fade-up" data-aos-duration="700"><a href="tel:+1234567847858">+12345678 478
                                    58</a></li>
                        </ul>
                        <a class="contact-btn" href="#" data-aos="fade-up" data-aos-duration="700">Call Us<i
                                class="fas fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- PRICING SECTION -->
    <!-- CONTACT SECTION -->
    <section class="w-100 float-left contact-page-form-section contact-con position-relative">
        <div class="dots-img position-relative">
            <div class="padding-top padding-bottom contact-inner-con position-relative">
                <div class="container">
                    <div class="contact-form">
                        <span class="sub-txt d-block" data-aos="fade-up" data-aos-duration="700">Request a
                            consultation</span>
                        <h2 data-aos="fade-up" data-aos-duration="700">Make an Appointent</h2>
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
    <!-- MAP SECTION -->
    <div class="responsive-map w-100 float-left padding-top padding-bottom">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.8387096759334!2d144.9532000767644!3d-37.817246734238644!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4dd5a05d97%3A0x3e64f855a564844d!2s121%20King%20St%2C%20Melbourne%20VIC%203000%2C%20Australia!5e0!3m2!1sen!2s!4v1692879195247!5m2!1sen!2s"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <!-- MAP SECTION -->
    <!-- GET IN TOUCH SECTION -->
    <section class="get-in-touch-section w-100 float-left pt-0">
        <div class="container">
            <div class="contact-section">
                <div class="doctor-img-con"></div>
                <div class="contact-txt-con">
                    <div class="generic-title mb-0">
                        <span class="sub-txt d-block" data-aos="fade-up" data-aos-duration="700">GET IN TOUCH</span>
                        <h2 data-aos="fade-up" data-aos-duration="700">Provide The Best Medical
                            Service for You!</h2>
                    </div>
                    <div class="submit-btn" data-aos="fade-up" data-aos-duration="700"><a href="contact.html">Book an
                            Appointment</a>
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
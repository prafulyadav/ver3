<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <title>Medwell | Home</title>
    <link rel="icon" href="assets/images/fav-icon.png">
    <link rel="stylesheet" href="assets/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/aos.css">
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

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        /* Responsive styles using media queries */
        @media (max-width: 767px) {

            th,
            td {
                display: block;
                width: 100%;
                box-sizing: border-box;
            }

            th {
                text-align: center;
            }

            tbody tr {
                margin-bottom: 10px;
            }
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
    <section class="w-100 float-left banner-con position-relative">
        <div class="wrapper2">
            <div class="banner-inner-box position-relative">
                <div class="banner-inner-con">
                    <div class="banner-title">
                        <h1 data-aos="fade-up" data-aos-duration="300">Medical &
                            Health Care
                            Solutions.</h1>
                        <p data-aos="fade-up" data-aos-duration="300">Caring is our calling. Changing Health Care for
                            Good.
                            We’re here for life. Feel better.</p>
                        <div class="banner-btn d-flex align-items-center" data-aos="fade-up" data-aos-duration="300">
                            <a href="#">Book an Appointment</a>
                            <a href="#">
                                <figure class="mb-0 d-flex align-items-center justify-content-center">
                                    <img src="assets/images/top-arrow.png" alt="top-arrow">
                                </figure>
                            </a>
                        </div>
                    </div>
                    <div class="banner-details d-flex position-relative">
                        <figure class="mb-0">
                            <img src="assets/images/doctor-img.png" alt="doctor-img">
                        </figure>
                        <div class="banner-details-txt">
                            <p data-aos="fade-up" data-aos-duration="300">Duis aute irure dolor in reprehenderit in
                                voluptate velit
                                esse cillum dolore eu fugiat nulla pariatur excepteur sint
                                occaecat cupidatat non proident.</p>
                            <div class="banner-static-box">
                                <ul class="mb-0 list-unstyled">
                                    <li class="d-flex align-items-center justify-content-center" data-aos="fade-up"
                                        data-aos-duration="300">
                                        <figure class="mb-0 d-flex align-items-center justify-content-center">
                                            <img src="assets/images/thumb-icon.png" alt="thumb-icon">
                                        </figure>
                                        <div class="banner-static-txt">
                                            <div class="static-value">98%</div>
                                            <span class="d-block">Positive Reviews</span>
                                            <span class="d-block">From Our Clients</span>
                                        </div>
                                    </li>
                                    <li class="d-flex align-items-center justify-content-end" data-aos="fade-up"
                                        data-aos-duration="300">
                                        <figure class="mb-0 d-flex align-items-center justify-content-center">
                                            <img src="assets/images/experienced-icon.png" alt="experienced-icon">
                                        </figure>
                                        <div class="banner-static-txt">
                                            <div class="static-value">38+</div>
                                            <span class="d-block">Experienced Doctors</span>
                                            <span class="d-block">Our Treatment Office</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="client-review d-flex align-items-center">
                            <div class="d-flex align-items-center review-img">
                                <figure class="mb-0">
                                    <img src="assets/images/review-img1.jpg" alt="review-img">
                                </figure>
                                <figure class="mb-0">
                                    <img src="assets/images/review-img2.jpg" alt="review-img">
                                </figure>
                                <figure class="mb-0">
                                    <img src="assets/images/review-img3.jpg" alt="review-img">
                                </figure>
                            </div>
                            <div class="review-txt">
                                <span>4.9</span>
                                <figure class="mb-0 d-inline-block">
                                    <img src="assets/images/star-img.png" alt="star-img">
                                </figure>
                                <span class="d-block">32k Total Reviews</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- BANNER SECTION -->
    <!-- Billing Section -->
    <section class="w-100 float-left about-con about-us-section position-relative" style="padding: 40px;">
        <div class="container">
            <table id="example" class="table table-striped table-bordered" cellspacing="0" width="50%">
                <thead>
                    <tr>
                        <th>Order</th>
                        <th>Description</th>
                        <th>Deadline</th>
                        <th>Status</th>
                        <th>Amount</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Alphabet puzzle</td>
                        <td>2016/01/15</td>
                        <td>Done</td>
                        <td data-order="1000">€1.000,00</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Layout for poster</td>
                        <td>2016/01/31</td>
                        <td>Planned</td>
                        <td data-order="1834">€1.834,00</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Image creation</td>
                        <td>2016/01/23</td>
                        <td>To Do</td>
                        <td data-order="1500">€1.500,00</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Create font</td>
                        <td>2016/02/26</td>
                        <td>Done</td>
                        <td data-order="1200">€1.200,00</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Sticker production</td>
                        <td>2016/02/18</td>
                        <td>Planned</td>
                        <td data-order="2100">€2.100,00</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Glossy poster</td>
                        <td>2016/03/17</td>
                        <td>To Do</td>
                        <td data-order="899">€899,00</td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>Beer label</td>
                        <td>2016/05/28</td>
                        <td>Confirmed</td>
                        <td data-order="2499">€2.499,00</td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>Shop sign</td>
                        <td>2016/04/19</td>
                        <td>Offer</td>
                        <td data-order="1099">€1.099,00</td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>X-Mas decoration</td>
                        <td>2016/10/31</td>
                        <td>Confirmed</td>
                        <td data-order="1750">€1.750,00</td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>Halloween invite</td>
                        <td>2016/09/12</td>
                        <td>Planned</td>
                        <td data-order="400">€400,00</td>
                    </tr>
                    <tr>
                        <td>11</td>
                        <td>Wedding announcement</td>
                        <td>2016/07/09</td>
                        <td>To Do</td>
                        <td data-order="299">€299,00</td>
                    </tr>
                    <tr>
                        <td>12</td>
                        <td>Member pasport</td>
                        <td>2016/06/22</td>
                        <td>Offer</td>
                        <td data-order="149">€149,00</td>
                    </tr>
                    <tr>
                        <td>13</td>
                        <td>Drink tickets</td>
                        <td>2016/11/01</td>
                        <td>Confirmed</td>
                        <td data-order="199">€199,00</td>
                    </tr>
                    <tr>
                        <td>14</td>
                        <td>Album cover</td>
                        <td>2017/03/15</td>
                        <td>To Do</td>
                        <td data-order="4999">€4.999,00</td>
                    </tr>
                    <tr>
                        <td>15</td>
                        <td>Shipment box</td>
                        <td>2017/02/08</td>
                        <td>Offer</td>
                        <td data-order="1399">€1.399,00</td>
                    </tr>

                    <tr>
                        <td>16</td>
                        <td>Wooden puzzle</td>
                        <td>2017/01/11</td>
                        <td>Done</td>
                        <td data-order="1000">€1.000,00</td>
                    </tr>
                    <tr>
                        <td>17</td>
                        <td>Fashion Layout</td>
                        <td>2016/01/30</td>
                        <td>Planned</td>
                        <td data-order="1834">€1.834,00</td>
                    </tr>
                    <tr>
                        <td>18</td>
                        <td>Toy creation</td>
                        <td>2016/01/10</td>
                        <td>To Do</td>
                        <td data-order="1550">€1.550,00</td>
                    </tr>
                    <tr>
                        <td>19</td>
                        <td>Create stamps</td>
                        <td>2016/02/26</td>
                        <td>Done</td>
                        <td data-order="1220">€1.220,00</td>
                    </tr>
                    <tr>
                        <td>20</td>
                        <td>Sticker design</td>
                        <td>2017/02/18</td>
                        <td>Planned</td>
                        <td data-order="2100">€2.100,00</td>
                    </tr>
                    <tr>
                        <td>21</td>
                        <td>Poster rock concert</td>
                        <td>2017/04/17</td>
                        <td>To Do</td>
                        <td data-order="899">€899,00</td>
                    </tr>
                    <tr>
                        <td>22</td>
                        <td>Wine label</td>
                        <td>2017/05/28</td>
                        <td>Confirmed</td>
                        <td data-order="2799">€2.799,00</td>
                    </tr>
                    <tr>
                        <td>23</td>
                        <td>Shopping bag</td>
                        <td>2017/04/19</td>
                        <td>Offer</td>
                        <td data-order="1299">€1.299,00</td>
                    </tr>
                    <tr>
                        <td>24</td>
                        <td>Decoration for Easter</td>
                        <td>2017/10/31</td>
                        <td>Confirmed</td>
                        <td data-order="1650">€1.650,00</td>
                    </tr>
                    <tr>
                        <td>25</td>
                        <td>Saint Nicolas colorbook</td>
                        <td>2017/09/12</td>
                        <td>Planned</td>
                        <td data-order="510">€510,00</td>
                    </tr>
                    <tr>
                        <td>26</td>
                        <td>Wedding invites</td>
                        <td>2017/07/09</td>
                        <td>To Do</td>
                        <td data-order="399">€399,00</td>
                    </tr>
                    <tr>
                        <td>27</td>
                        <td>Member pasport</td>
                        <td>2017/06/22</td>
                        <td>Offer</td>
                        <td data-order="249">€249,00</td>
                    </tr>
                    <tr>
                        <td>28</td>
                        <td>Drink tickets</td>
                        <td>2017/11/01</td>
                        <td>Confirmed</td>
                        <td data-order="199">€199,00</td>
                    </tr>
                    <tr>
                        <td>29</td>
                        <td>Blue-Ray cover</td>
                        <td>2018/03/15</td>
                        <td>To Do</td>
                        <td data-order="1999">€1.999,00</td>
                    </tr>
                    <tr>
                        <td>30</td>
                        <td>TV carton</td>
                        <td>2019/02/08</td>
                        <td>Offer</td>
                        <td data-order="1369">€1.369,00</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <!-- Billing Section -->
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
                        <li><i class="fas fa-map-marker-alt"></i>121 King Street Melbourne,
                            3000, Australia</li>
                        <li><i class="fas fa-envelope"></i><a href="mailto:info@medwell.com">info@medwell.com</a></li>
                        <li><i class="fas fa-headphones"></i><a href="tel:+568925896325">+5689 2589 6325</a></li>
                        <li><i class="fas fa-phone-alt"></i><a href="tel:+12025550153">+1-202-555-0153</a></li>
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
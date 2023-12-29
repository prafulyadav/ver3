<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <title>Medwell | Doctors</title>
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
   <?php include"./components/navbar.php";?>
    <!-- HEADER SECTION -->
    <!-- BANNER SECTION -->
    <!-- <section class="w-100 float-left doctors-banner-sec sub-banner-con position-relative">
        <div class="wrapper2">
            <div class="sub-banner-inner-box banner-inner-box position-relative text-center w-100 float-left">
                <h1 data-aos="fade-up" data-aos-duration="700">Doctors</h1>
                <p data-aos="fade-up" data-aos-duration="700">Ruis aute irure dolor in reprehenderit in voluptate velit
                    essecillum <br>
                    dolore fugiat nulla pariatur</p>
                <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-duration="700">
                    <ol class="breadcrumb d-inline-block mb-0">
                        <li class="breadcrumb-item d-inline-block"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active text-white d-inline-block" aria-current="page">Doctors</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section> -->
    <!-- BANNER SECTION -->
    <br>
    <br>
    <!-- TEAM SECTION -->
    <section class="team-section bg-design w-100 float-left padding-top padding-bottom">
        <div class="container">
            <div class="generic-title text-center">
                <span class="sub-txt d-block" data-aos="fade-up" data-aos-duration="700">OUR TEAM</span>
                <h2 class="mb-0" data-aos="fade-up" data-aos-duration="700">Meet Our Professional Team</h2>
            </div>
            <div class="team-members-con">
                <ul class="list-unstyled mb-0">
                    <li class="text-center">
                        <figure data-aos="fade-up" data-aos-duration="700">
                            <img src="assets/images/team-img1.jpg" alt="team-img1">
                        </figure>
                        <h4 data-aos="fade-up" data-aos-duration="700">Alice Waters</h4>
                        <span class="d-block" data-aos="fade-up" data-aos-duration="700">Internist</span>
                        <div class="social-links">
                            <ul class="list-unstyled mb-0 d-flex justify-content-center" data-aos="fade-up"
                                data-aos-duration="700">
                                <li class="d-flex justify-content-center align-items-center"><a
                                        href="https://www.facebook.com/login/"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li class="d-flex justify-content-center align-items-center"><a
                                        href="https://twitter.com/i/flow/login?input_flow_data=%7B%22requested_variant%22%3A%22eyJsYW5nIjoiZW4ifQ%3D%3D%22%7D"><i
                                            class="fab fa-twitter"></i></a></li>
                                <li class="d-flex justify-content-center align-items-center"><a
                                        href="https://www.linkedin.com/login"><i class="fab fa-linkedin-in"></i></a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="text-center">
                        <figure data-aos="fade-up" data-aos-duration="700">
                            <img src="assets/images/team-img2.jpg" alt="team-img2">
                        </figure>
                        <h4 data-aos="fade-up" data-aos-duration="700">Jamie Oliver</h4>
                        <span class="d-block" data-aos="fade-up" data-aos-duration="700">Osteopaths</span>
                        <div class="social-links">
                            <ul class="list-unstyled mb-0 d-flex justify-content-center" data-aos="fade-up"
                                data-aos-duration="700">
                                <li class="d-flex justify-content-center align-items-center"><a
                                        href="https://www.facebook.com/login/"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li class="d-flex justify-content-center align-items-center"><a
                                        href="https://twitter.com/i/flow/login?input_flow_data=%7B%22requested_variant%22%3A%22eyJsYW5nIjoiZW4ifQ%3D%3D%22%7D"><i
                                            class="fab fa-twitter"></i></a></li>
                                <li class="d-flex justify-content-center align-items-center"><a
                                        href="https://www.linkedin.com/login"><i class="fab fa-linkedin-in"></i></a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="text-center">
                        <figure data-aos="fade-up" data-aos-duration="700">
                            <img src="assets/images/team-img3.jpg" alt="team-img3">
                        </figure>
                        <h4 data-aos="fade-up" data-aos-duration="700">Clare Smyth</h4>
                        <span class="d-block" data-aos="fade-up" data-aos-duration="700">Gynecologist</span>
                        <div class="social-links">
                            <ul class="list-unstyled mb-0 d-flex justify-content-center" data-aos="fade-up"
                                data-aos-duration="700">
                                <li class="d-flex justify-content-center align-items-center"><a
                                        href="https://www.facebook.com/login/"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li class="d-flex justify-content-center align-items-center"><a
                                        href="https://twitter.com/i/flow/login?input_flow_data=%7B%22requested_variant%22%3A%22eyJsYW5nIjoiZW4ifQ%3D%3D%22%7D"><i
                                            class="fab fa-twitter"></i></a></li>
                                <li class="d-flex justify-content-center align-items-center"><a
                                        href="https://www.linkedin.com/login"><i class="fab fa-linkedin-in"></i></a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="text-center">
                        <figure data-aos="fade-up" data-aos-duration="700">
                            <img src="assets/images/team-img4.jpg" alt="team-img4">
                        </figure>
                        <h4 data-aos="fade-up" data-aos-duration="700">Bobby Flay</h4>
                        <span class="d-block" data-aos="fade-up" data-aos-duration="700">Surgeon</span>
                        <div class="social-links">
                            <ul class="list-unstyled mb-0 d-flex justify-content-center" data-aos="fade-up"
                                data-aos-duration="700">
                                <li class="d-flex justify-content-center align-items-center"><a
                                        href="https://www.facebook.com/login/"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li class="d-flex justify-content-center align-items-center"><a
                                        href="https://twitter.com/i/flow/login?input_flow_data=%7B%22requested_variant%22%3A%22eyJsYW5nIjoiZW4ifQ%3D%3D%22%7D"><i
                                            class="fab fa-twitter"></i></a></li>
                                <li class="d-flex justify-content-center align-items-center"><a
                                        href="https://www.linkedin.com/login"><i class="fab fa-linkedin-in"></i></a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="text-center">
                        <figure data-aos="fade-up" data-aos-duration="700">
                            <img src="assets/images/team-img5.jpg" alt="team-img5">
                        </figure>
                        <h4 data-aos="fade-up" data-aos-duration="700">David Hall</h4>
                        <span class="d-block" data-aos="fade-up" data-aos-duration="700">Internist</span>
                        <div class="social-links">
                            <ul class="list-unstyled mb-0 d-flex justify-content-center" data-aos="fade-up"
                                data-aos-duration="700">
                                <li class="d-flex justify-content-center align-items-center"><a
                                        href="https://www.facebook.com/login/"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li class="d-flex justify-content-center align-items-center"><a
                                        href="https://twitter.com/i/flow/login?input_flow_data=%7B%22requested_variant%22%3A%22eyJsYW5nIjoiZW4ifQ%3D%3D%22%7D"><i
                                            class="fab fa-twitter"></i></a></li>
                                <li class="d-flex justify-content-center align-items-center"><a
                                        href="https://www.linkedin.com/login"><i class="fab fa-linkedin-in"></i></a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="text-center">
                        <figure data-aos="fade-up" data-aos-duration="700">
                            <img src="assets/images/team-img6.jpg" alt="team-img6">
                        </figure>
                        <h4 data-aos="fade-up" data-aos-duration="700">Deborah Robison</h4>
                        <span class="d-block" data-aos="fade-up" data-aos-duration="700">Osteopaths</span>
                        <div class="social-links">
                            <ul class="list-unstyled mb-0 d-flex justify-content-center" data-aos="fade-up"
                                data-aos-duration="700">
                                <li class="d-flex justify-content-center align-items-center"><a
                                        href="https://www.facebook.com/login/"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li class="d-flex justify-content-center align-items-center"><a
                                        href="https://twitter.com/i/flow/login?input_flow_data=%7B%22requested_variant%22%3A%22eyJsYW5nIjoiZW4ifQ%3D%3D%22%7D"><i
                                            class="fab fa-twitter"></i></a></li>
                                <li class="d-flex justify-content-center align-items-center"><a
                                        href="https://www.linkedin.com/login"><i class="fab fa-linkedin-in"></i></a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="text-center">
                        <figure data-aos="fade-up" data-aos-duration="700">
                            <img src="assets/images/team-img7.jpg" alt="team-img7">
                        </figure>
                        <h4 data-aos="fade-up" data-aos-duration="700">Larry Hansley</h4>
                        <span class="d-block" data-aos="fade-up" data-aos-duration="700">Gynecologist</span>
                        <div class="social-links">
                            <ul class="list-unstyled mb-0 d-flex justify-content-center" data-aos="fade-up"
                                data-aos-duration="700">
                                <li class="d-flex justify-content-center align-items-center"><a
                                        href="https://www.facebook.com/login/"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li class="d-flex justify-content-center align-items-center"><a
                                        href="https://twitter.com/i/flow/login?input_flow_data=%7B%22requested_variant%22%3A%22eyJsYW5nIjoiZW4ifQ%3D%3D%22%7D"><i
                                            class="fab fa-twitter"></i></a></li>
                                <li class="d-flex justify-content-center align-items-center"><a
                                        href="https://www.linkedin.com/login"><i class="fab fa-linkedin-in"></i></a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="text-center">
                        <figure data-aos="fade-up" data-aos-duration="700">
                            <img src="assets/images/team-img8.jpg" alt="team-img8">
                        </figure>
                        <h4 data-aos="fade-up" data-aos-duration="700">PateraWright</h4>
                        <span class="d-block" data-aos="fade-up" data-aos-duration="700">Surgeon</span>
                        <div class="social-links">
                            <ul class="list-unstyled mb-0 d-flex justify-content-center" data-aos="fade-up"
                                data-aos-duration="700">
                                <li class="d-flex justify-content-center align-items-center"><a
                                        href="https://www.facebook.com/login/"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li class="d-flex justify-content-center align-items-center"><a
                                        href="https://twitter.com/i/flow/login?input_flow_data=%7B%22requested_variant%22%3A%22eyJsYW5nIjoiZW4ifQ%3D%3D%22%7D"><i
                                            class="fab fa-twitter"></i></a></li>
                                <li class="d-flex justify-content-center align-items-center"><a
                                        href="https://www.linkedin.com/login"><i class="fab fa-linkedin-in"></i></a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- TEAM SECTION -->
    <!-- PATIENTS REVIEWS SECTION -->
    <section class="patients-reviews-sec w-100 float-left padding-top padding-bottom">
        <div class="container">
            <div class="generic-title text-center">
                <span class="d-block sub-txt" data-aos="fade-up" data-aos-duration="700">OUR TESTIMONIALS</span>
                <h2 class="mb-0" data-aos="fade-up" data-aos-duration="700">What Patients are Saying!</h2>
            </div>
            <div id="owl-carouselone" class="owl-carousel owl-theme" data-aos="fade-up" data-aos-duration="700">
                <div class="item">
                    <div class="review-box">
                        <figure>
                            <img src="assets/images/quote-img.png" alt="quote-img">
                        </figure>
                        <p>Quisuam est rui dolorem ipsum rui
                            dolor sit amet, consectetur, adipise
                            velit sed quia non numquam eiusm
                            tempora incidunt ut labore</p>
                        <div class="patient-details d-flex">
                            <div class="patient-img">
                                <figure class="mb-0">
                                    <img src="assets/images/patient-img1.png" alt="patient-img1">
                                </figure>
                            </div>
                            <div class="patient-rating">
                                <figure>
                                    <img src="assets/images/rating-stars.png" alt="rating-stars">
                                </figure>
                                <h5>Kevin Andrew</h5>
                                <span class="d-block">Happy Client</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="review-box">
                        <figure>
                            <img src="assets/images/quote-img.png" alt="quote-img">
                        </figure>
                        <p>Ruisuam est rui dolorem ipsum rui
                            dolor sit amet, consectetur, adipise
                            velit sed quia non numquam eiusm
                            tempora incidunt ut labore</p>
                        <div class="patient-details d-flex">
                            <div class="patient-img">
                                <figure class="mb-0">
                                    <img src="assets/images/patient-img2.png" alt="patient-img2">
                                </figure>
                            </div>
                            <div class="patient-rating">
                                <figure>
                                    <img src="assets/images/rating-stars.png" alt="rating-stars">
                                </figure>
                                <h5>Peri James</h5>
                                <span class="d-block">Happy Client</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="review-box">
                        <figure>
                            <img src="assets/images/quote-img.png" alt="quote-img">
                        </figure>
                        <p>Nuisuam est rui dolorem ipsum rui
                            dolor sit amet, consectetur, adipise
                            velit sed quia non numquam eiusm
                            tempora incidunt ut labore</p>
                        <div class="patient-details d-flex">
                            <div class="patient-img">
                                <figure class="mb-0">
                                    <img src="assets/images/patient-img3.png" alt="patient-img3">
                                </figure>
                            </div>
                            <div class="patient-rating">
                                <figure>
                                    <img src="assets/images/rating-stars.png" alt="rating-stars">
                                </figure>
                                <h5>Naurth Reough</h5>
                                <span class="d-block">Happy Client</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="review-box">
                        <figure>
                            <img src="assets/images/quote-img.png" alt="quote-img">
                        </figure>
                        <p>Quisuam est rui dolorem ipsum rui
                            dolor sit amet, consectetur, adipise
                            velit sed quia non numquam eiusm
                            tempora incidunt ut labore</p>
                        <div class="patient-details d-flex">
                            <div class="patient-img">
                                <figure class="mb-0">
                                    <img src="assets/images/patient-img1.png" alt="patient-img1">
                                </figure>
                            </div>
                            <div class="patient-rating">
                                <figure>
                                    <img src="assets/images/rating-stars.png" alt="rating-stars">
                                </figure>
                                <h5>Kevin Andrew</h5>
                                <span class="d-block">Happy Client</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="review-box">
                        <figure>
                            <img src="assets/images/quote-img.png" alt="quote-img">
                        </figure>
                        <p>Ruisuam est rui dolorem ipsum rui
                            dolor sit amet, consectetur, adipise
                            velit sed quia non numquam eiusm
                            tempora incidunt ut labore</p>
                        <div class="patient-details d-flex">
                            <div class="patient-img">
                                <figure class="mb-0">
                                    <img src="assets/images/patient-img2.png" alt="patient-img2">
                                </figure>
                            </div>
                            <div class="patient-rating">
                                <figure>
                                    <img src="assets/images/rating-stars.png" alt="rating-stars">
                                </figure>
                                <h5>Peri James</h5>
                                <span class="d-block">Happy Client</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="review-box">
                        <figure>
                            <img src="assets/images/quote-img.png" alt="quote-img">
                        </figure>
                        <p>Nuisuam est rui dolorem ipsum rui
                            dolor sit amet, consectetur, adipise
                            velit sed quia non numquam eiusm
                            tempora incidunt ut labore</p>
                        <div class="patient-details d-flex">
                            <div class="patient-img">
                                <figure class="mb-0">
                                    <img src="assets/images/patient-img3.png" alt="patient-img3">
                                </figure>
                            </div>
                            <div class="patient-rating">
                                <figure>
                                    <img src="assets/images/rating-stars.png" alt="rating-stars">
                                </figure>
                                <h5>Naurth Reough</h5>
                                <span class="d-block">Happy Client</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="review-box">
                        <figure>
                            <img src="assets/images/quote-img.png" alt="quote-img">
                        </figure>
                        <p>Quisuam est rui dolorem ipsum rui
                            dolor sit amet, consectetur, adipise
                            velit sed quia non numquam eiusm
                            tempora incidunt ut labore</p>
                        <div class="patient-details d-flex">
                            <div class="patient-img">
                                <figure class="mb-0">
                                    <img src="assets/images/patient-img1.png" alt="patient-img1">
                                </figure>
                            </div>
                            <div class="patient-rating">
                                <figure>
                                    <img src="assets/images/rating-stars.png" alt="rating-stars">
                                </figure>
                                <h5>Kevin Andrew</h5>
                                <span class="d-block">Happy Client</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="review-box">
                        <figure>
                            <img src="assets/images/quote-img.png" alt="quote-img">
                        </figure>
                        <p>Ruisuam est rui dolorem ipsum rui
                            dolor sit amet, consectetur, adipise
                            velit sed quia non numquam eiusm
                            tempora incidunt ut labore</p>
                        <div class="patient-details d-flex">
                            <div class="patient-img">
                                <figure class="mb-0">
                                    <img src="assets/images/patient-img2.png" alt="patient-img2">
                                </figure>
                            </div>
                            <div class="patient-rating">
                                <figure>
                                    <img src="assets/images/rating-stars.png" alt="rating-stars">
                                </figure>
                                <h5>Peri James</h5>
                                <span class="d-block">Happy Client</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="review-box">
                        <figure>
                            <img src="assets/images/quote-img.png" alt="quote-img">
                        </figure>
                        <p>Nuisuam est rui dolorem ipsum rui
                            dolor sit amet, consectetur, adipise
                            velit sed quia non numquam eiusm
                            tempora incidunt ut labore</p>
                        <div class="patient-details d-flex">
                            <div class="patient-img">
                                <figure class="mb-0">
                                    <img src="assets/images/patient-img3.png" alt="patient-img3">
                                </figure>
                            </div>
                            <div class="patient-rating">
                                <figure>
                                    <img src="assets/images/rating-stars.png" alt="rating-stars">
                                </figure>
                                <h5>Naurth Reough</h5>
                                <span class="d-block">Happy Client</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- PATIENTS REVIEWS SECTION -->
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
                    <div class="submit-btn"><a href="contact.html">Book an Appointment</a>
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
    <?php include"./components/footer.php";?>
    <!-- FOOTER SECTION -->

    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.js"></script>
    <script src="assets/js/aos.js"></script>
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
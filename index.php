<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
  <title>Medical</title>
  <link rel="icon" href="assets/images/fav-icon.png" />
  <link rel="stylesheet" href="assets/bootstrap/bootstrap.min.css" />
  <link rel="stylesheet" href="assets/css/owl.carousel.min.css" />
  <!-- <link rel="stylesheet" href="assets/css/aos.css" /> -->
  <link rel="stylesheet" href="assets/css/superclasses.css" />
  <link rel="stylesheet" href="assets/css/custom.css" />
  <link rel="stylesheet" href="assets/css/mobile.css" />
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
      color: white;
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
      background-color: transparent;
      color: white;
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
  <section class="w-100 float-left banner-con position-relative">
    <div class="wrapper2">
      <div class="banner-inner-box position-relative">
        <div class="banner-inner-con">
          <div class="banner-title">
            <h1 data-aos="fade-up" data-aos-duration="700">
              Medical & Health Care Solutions.
            </h1>
            <p data-aos="fade-up" data-aos-duration="700">
              Caring is our calling. Changing Health Care for Good. We’re here
              for life. Feel better.
            </p>
            <div class="banner-btn d-flex align-items-center" data-aos="fade-up" data-aos-duration="700">
              <a href="#appointment1">Book an Appointment</a>
              <a href="#appointment1">
                <figure class="mb-0 d-flex align-items-center justify-content-center">
                  <img src="assets/images/top-arrow.png" alt="top-arrow" />
                </figure>
              </a>
            </div>
          </div>
          <div class="banner-details d-flex position-relative">
            <figure class="mb-0">
              <img src="assets/images/doctor-img.png" alt="doctor-img" />
            </figure>
            <div class="banner-details-txt">
              <p data-aos="fade-up" data-aos-duration="700">
                Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur excepteur sint occaecat
                cupidatat non proident.
              </p>
              <div class="banner-static-box">
                <ul class="mb-0 list-unstyled">
                  <li class="d-flex align-items-center justify-content-center" data-aos="fade-up"
                    data-aos-duration="700">
                    <figure class="mb-0 d-flex align-items-center justify-content-center">
                      <img src="assets/images/thumb-icon.png" alt="thumb-icon" />
                    </figure>
                    <div class="banner-static-txt">
                      <div class="static-value">98%</div>
                      <span class="d-block">Positive Reviews</span>
                      <span class="d-block">From Our Clients</span>
                    </div>
                  </li>
                  <li class="d-flex align-items-center justify-content-end" data-aos="fade-up" data-aos-duration="700">
                    <figure class="mb-0 d-flex align-items-center justify-content-center">
                      <img src="assets/images/experienced-icon.png" alt="experienced-icon" />
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
                  <img src="assets/images/review-img1.jpg" alt="review-img" />
                </figure>
                <figure class="mb-0">
                  <img src="assets/images/review-img2.jpg" alt="review-img" />
                </figure>
                <figure class="mb-0">
                  <img src="assets/images/review-img3.jpg" alt="review-img" />
                </figure>
              </div>
              <div class="review-txt">
                <span>4.9</span>
                <figure class="mb-0 d-inline-block">
                  <img src="assets/images/star-img.png" alt="star-img" />
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
  <!-- SERVICE SECTION -->
  <section class="w-100 float-left service-con padding-top padding-bottom">
    <div class="container">
      <div class="service-box">
        <div class="service-box-content" data-aos="fade-up" data-aos-duration="700">
          <span class="d-block sub-txt">What We Provide</span>
          <h2>Our Medical Services</h2>
          <p class="mb-0">
            Molestiae non recusandae earum rerum hic tenetur asa piente
            delectus.
          </p>
        </div>
        <div class="service-box-item" data-aos="fade-up" data-aos-duration="700">
          <figure>
            <img src="assets/images/cardiologist-icon.png" alt="cardiologist-icon" />
          </figure>
          <h4>Cardiologist</h4>
          <p>
            Duis aute irure dolor in reprehenderit in voluta zesse cillum...
          </p>
          <a href="#">Read More <i class="fas fa-angle-right"></i></a>
        </div>
        <div class="service-box-item" data-aos="fade-up" data-aos-duration="700">
          <figure>
            <img src="assets/images/pulmonary-icon.png" alt="pulmonary-icon" />
          </figure>
          <h4>Pulmonary</h4>
          <p>
            Guis aute irure dolor in reprehenderit in voluta zesse cillum...
          </p>
          <a href="#">Read More <i class="fas fa-angle-right"></i></a>
        </div>
        <div class="service-box-item" data-aos="fade-up" data-aos-duration="700">
          <figure>
            <img src="assets/images/gynecology-icon.png" alt="gynecology-icon" />
          </figure>
          <h4>Gynecology</h4>
          <p>
            Nuis aute irure dolor in reprehenderit in voluta zesse cillum...
          </p>
          <a href="#">Read More <i class="fas fa-angle-right"></i></a>
        </div>
        <div class="service-box-item" data-aos="fade-up" data-aos-duration="700">
          <figure>
            <img src="assets/images/pphthalmology-icon.png" alt="pphthalmology-icon" />
          </figure>
          <h4>Ophthalmology</h4>
          <p>
            Euis aute irure dolor in reprehenderit in voluta zesse cillum...
          </p>
          <a href="#">Read More <i class="fas fa-angle-right"></i></a>
        </div>
        <div class="service-box-item" data-aos="fade-up" data-aos-duration="700">
          <figure>
            <img src="assets/images/psychiatry-icon.png" alt="psychiatry-icon" />
          </figure>
          <h4>Psychiatry</h4>
          <p>
            Quis aute irure dolor in reprehenderit in voluta zesse cillum...
          </p>
          <a href="#">Read More <i class="fas fa-angle-right"></i></a>
        </div>
        <div class="service-provide-box" data-aos="fade-up" data-aos-duration="700">
          <div class="service-provide-title">
            <h3>We Provide Best Medical Treatment.</h3>
            <p>Reprehenderit in voluta zesse.</p>
            <div class="provide-btn d-flex align-items-center">
              <a href="#">Book Appointment</a>
              <a href="#" class="provide-arrow">
                <figure class="mb-0 d-flex align-items-center justify-content-center">
                  <img src="assets/images/samll-arrow.png" alt="top-arrow" />
                </figure>
              </a>
            </div>
          </div>
          <div class="service-provide-img">
            <figure class="mb-0">
              <img src="assets/images/treatment-img.jpg" alt="treatment-img" />
            </figure>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- SERVICE SECTION -->
  <!-- ABOUT SECTION -->
  <section class="w-100 float-left about-con design-img padding-top padding-bottom position-relative">
    <div class="wrapper3">
      <div class="about-box" data-aos="fade-up" data-aos-duration="700">
        <div class="about-box-img">
          <div class="vedio-img position-relative">
            <div class="vedio-sub-img">
              <img class="thumb poster-con index1-poster" src="assets/images/about-img1.jpg" alt="vedio-img" />
              <img class="thumb poster-con index1-poster" src="assets/images/about-img2.jpg" alt="vedio-img" />
              <img class="thumb poster-con index1-poster" src="assets/images/about-img3.jpg" alt="vedio-img" />
            </div>
            <div class="btn-outer">
              <a href="javascript:void(0)" onclick="lightbox_open();">
                <div class="video-wrap">
                  <img src="assets/images/play-icon.png" alt="play-icon" />
                </div>
              </a>
            </div>
          </div>
        </div>
        <div class="about-box-title" data-aos="fade-up" data-aos-duration="700">
          <span class="d-block sub-txt">About us</span>
          <h2>Welcome to Medwell Hospital & Healthcare</h2>
          <p>
            Donec pulvinar tellus egetmagna aliquet ultricies. nec eleifend
            sem convallis vitae soluta nobis est eligendi optio cumque nihio
            impedit ruo minus id quod maxime placeat facere.
          </p>
          <div class="generic-list">
            <ul class="list-unstyled mb-0">
              <li>Monthly Checkups</li>
              <li>Caring Medical Team</li>
              <li>Proactive and Fast Results</li>
            </ul>
            <ul class="list-unstyled mb-0">
              <li>Cosmetic Filling</li>
              <li>Dental X-Ray</li>
              <li>Complete Crown</li>
            </ul>
          </div>
          <div class="generic-btn">
            <a href="doctors.html"> Read More </a>
            <a href="doctors.html">
              <figure class="mb-0">
                <img src="assets/images/long-arrow.png" alt="long-arrow" />
              </figure>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div id="light">
      <a class="boxclose" id="boxclose" onclick="lightbox_close();"></a>
      <iframe src="https://www.youtube.com/embed/kNXMJBQ6oL4" allowfullscreen=""></iframe>
    </div>

    <div id="fade1" onClick="lightbox_close();"></div>
  </section>
  <!-- ABOUT SECTION -->
  <!-- CONTACT SECTION -->
  <section class="w-100 float-left contact-con position-relative" id="appointment1">
    <div class="dots-img position-relative">
      <div class="padding-top padding-bottom contact-inner-con position-relative">
        <div class="container">
          <div class="contact-form" data-aos="fade-up" data-aos-duration="700">
            <span class="sub-txt d-block">Request a consultation</span>
            <h2>Make an Appointent</h2>
            <form class="form-box" method="post" id="contactpage">
              <ul class="list-unstyled" data-aos="fade-up" data-aos-duration="700">
                <li>
                  <input type="text" name="fname" id="fname" placeholder="Your Name:" />
                </li>
                <li>
                  <input type="tel" name="phone" id="phone" placeholder="Phone No:" />
                </li>
                <li>
                  <input type="email" placeholder="Your Email:" name="email" id="email" />
                </li>
                <li>
                  <input placeholder="Date:" type="text" onfocus="(this.type = 'date')" id="date" />
                </li>
                <li>
                  <textarea placeholder="Message:" name="subject" id="subject"></textarea>
                </li>
              </ul>
              <div class="submit-btn" data-aos="fade-up" data-aos-duration="700">
                <button type="submit" id="submit">
                  Book an Appointment
                  <figure class="mb-0">
                    <img src="assets/images/top-arrow.png" alt="top-arrow" />
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
  <!-- PROCESS SECTION -->
  <section class="work-process-sec w-100 float-left padding-bottom padding-top">
    <div class="container">
      <div class="generic-title text-center" data-aos="fade-up" data-aos-duration="700">
        <span class="d-block sub-txt">WORK PROCESS</span>
        <h2 class="mb-0">Let’s See How We Work</h2>
      </div>
      <div class="process-con">
        <ul class="list-unstyled mb-0">
          <li class="text-center" data-aos="fade-up" data-aos-duration="700">
            <div class="process-img-box">
              <figure>
                <img src="assets/images/process-img1.png" alt="process-img1" />
              </figure>
              <span>01</span>
            </div>
            <h4>Seeing Patients</h4>
            <p>
              Rure dolor aen voluta <br />
              zesse cillum...
            </p>
          </li>
          <li class="text-center" data-aos="fade-up" data-aos-duration="700">
            <div class="process-img-box">
              <figure>
                <img src="assets/images/process-img2.png" alt="process-img2" />
              </figure>
              <span>02</span>
            </div>
            <h4>Making a Diagnosis</h4>
            <p>
              Gure dolor aen voluta <br />
              zesse cillum...
            </p>
          </li>
          <li class="text-center" data-aos="fade-up" data-aos-duration="700">
            <div class="process-img-box">
              <figure>
                <img src="assets/images/process-img3.png" alt="process-img3" />
              </figure>
              <span>03</span>
            </div>
            <h4>Developing a Treatment</h4>
            <p>
              Hure dolor aen voluta <br />
              zesse cillum...
            </p>
          </li>
          <li class="text-center" data-aos="fade-up" data-aos-duration="700">
            <div class="process-img-box">
              <figure>
                <img src="assets/images/process-img4.png" alt="process-img4" />
              </figure>
              <span>04</span>
            </div>
            <h4>Documenting Patient</h4>
            <p>
              Zure dolor aen voluta <br />
              zesse cillum...
            </p>
          </li>
        </ul>
      </div>
    </div>
  </section>
  <!-- PROCESS SECTION -->
  <!-- TEAMS SECTIONS -->
  <section class="team-section w-100 float-left padding-top padding-bottom">
    <div class="container">
      <div class="generic-title text-center" data-aos="fade-up" data-aos-duration="700">
        <span class="sub-txt d-block">OUR TEAM</span>
        <h2 class="mb-0">Meet Our Professional Team</h2>
      </div>
      <div class="team-members-con">
        <ul class="list-unstyled mb-0">
          <li class="text-center" data-aos="fade-up" data-aos-duration="700">
            <figure>
              <img src="assets/images/team-img1.jpg" alt="team-img1" />
            </figure>
            <h4>Alice Waters</h4>
            <span class="d-block">Internist</span>
            <div class="social-links">
              <ul class="list-unstyled mb-0 d-flex justify-content-center">
                <li class="d-flex justify-content-center align-items-center">
                  <a href="https://www.facebook.com/login/"><i class="fab fa-facebook-f"></i></a>
                </li>
                <li class="d-flex justify-content-center align-items-center">
                  <a
                    href="https://twitter.com/i/flow/login?input_flow_data=%7B%22requested_variant%22%3A%22eyJsYW5nIjoiZW4ifQ%3D%3D%22%7D"><i
                      class="fab fa-twitter"></i></a>
                </li>
                <li class="d-flex justify-content-center align-items-center">
                  <a href="https://www.linkedin.com/login"><i class="fab fa-linkedin-in"></i></a>
                </li>
              </ul>
            </div>
          </li>
          <li class="text-center" data-aos="fade-up" data-aos-duration="700">
            <figure>
              <img src="assets/images/team-img2.jpg" alt="team-img2" />
            </figure>
            <h4>Jamie Oliver</h4>
            <span class="d-block">Osteopaths</span>
            <div class="social-links">
              <ul class="list-unstyled mb-0 d-flex justify-content-center">
                <li class="d-flex justify-content-center align-items-center">
                  <a href="https://www.facebook.com/login/"><i class="fab fa-facebook-f"></i></a>
                </li>
                <li class="d-flex justify-content-center align-items-center">
                  <a
                    href="https://twitter.com/i/flow/login?input_flow_data=%7B%22requested_variant%22%3A%22eyJsYW5nIjoiZW4ifQ%3D%3D%22%7D"><i
                      class="fab fa-twitter"></i></a>
                </li>
                <li class="d-flex justify-content-center align-items-center">
                  <a href="https://www.linkedin.com/login"><i class="fab fa-linkedin-in"></i></a>
                </li>
              </ul>
            </div>
          </li>
          <li class="text-center" data-aos="fade-up" data-aos-duration="700">
            <figure>
              <img src="assets/images/team-img3.jpg" alt="team-img3" />
            </figure>
            <h4>Clare Smyth</h4>
            <span class="d-block">Gynecologist</span>
            <div class="social-links">
              <ul class="list-unstyled mb-0 d-flex justify-content-center">
                <li class="d-flex justify-content-center align-items-center">
                  <a href="https://www.facebook.com/login/"><i class="fab fa-facebook-f"></i></a>
                </li>
                <li class="d-flex justify-content-center align-items-center">
                  <a
                    href="https://twitter.com/i/flow/login?input_flow_data=%7B%22requested_variant%22%3A%22eyJsYW5nIjoiZW4ifQ%3D%3D%22%7D"><i
                      class="fab fa-twitter"></i></a>
                </li>
                <li class="d-flex justify-content-center align-items-center">
                  <a href="https://www.linkedin.com/login"><i class="fab fa-linkedin-in"></i></a>
                </li>
              </ul>
            </div>
          </li>
          <li class="text-center" data-aos="fade-up" data-aos-duration="700">
            <figure>
              <img src="assets/images/team-img4.jpg" alt="team-img4" />
            </figure>
            <h4>Bobby Flay</h4>
            <span class="d-block">Surgeon</span>
            <div class="social-links">
              <ul class="list-unstyled mb-0 d-flex justify-content-center">
                <li class="d-flex justify-content-center align-items-center">
                  <a href="https://www.facebook.com/login/"><i class="fab fa-facebook-f"></i></a>
                </li>
                <li class="d-flex justify-content-center align-items-center">
                  <a
                    href="https://twitter.com/i/flow/login?input_flow_data=%7B%22requested_variant%22%3A%22eyJsYW5nIjoiZW4ifQ%3D%3D%22%7D"><i
                      class="fab fa-twitter"></i></a>
                </li>
                <li class="d-flex justify-content-center align-items-center">
                  <a href="https://www.linkedin.com/login"><i class="fab fa-linkedin-in"></i></a>
                </li>
              </ul>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </section>
  <!-- TEAMS SECTIONS -->
  <!-- PATIENTS REVIEWS SECTION -->
  <section class="patients-reviews-sec w-100 float-left padding-top padding-bottom">
    <div class="container">
      <div class="generic-title text-center" data-aos="fade-up" data-aos-duration="700">
        <span class="d-block sub-txt">OUR TESTIMONIALS</span>
        <h2 class="mb-0">What Patients are Saying!</h2>
      </div>
      <div id="owl-carouselone" class="owl-carousel owl-theme" data-aos="fade-up" data-aos-duration="700">
        <div class="item">
          <div class="review-box">
            <figure>
              <img src="assets/images/quote-img.png" alt="quote-img" />
            </figure>
            <p>
              Quisuam est rui dolorem ipsum rui dolor sit amet, consectetur,
              adipise velit sed quia non numquam eiusm tempora incidunt ut
              labore
            </p>
            <div class="patient-details d-flex">
              <div class="patient-img">
                <figure class="mb-0">
                  <img src="assets/images/patient-img1.png" alt="patient-img1" />
                </figure>
              </div>
              <div class="patient-rating">
                <figure>
                  <img src="assets/images/rating-stars.png" alt="rating-stars" />
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
              <img src="assets/images/quote-img.png" alt="quote-img" />
            </figure>
            <p>
              Ruisuam est rui dolorem ipsum rui dolor sit amet, consectetur,
              adipise velit sed quia non numquam eiusm tempora incidunt ut
              labore
            </p>
            <div class="patient-details d-flex">
              <div class="patient-img">
                <figure class="mb-0">
                  <img src="assets/images/patient-img2.png" alt="patient-img2" />
                </figure>
              </div>
              <div class="patient-rating">
                <figure>
                  <img src="assets/images/rating-stars.png" alt="rating-stars" />
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
              <img src="assets/images/quote-img.png" alt="quote-img" />
            </figure>
            <p>
              Nuisuam est rui dolorem ipsum rui dolor sit amet, consectetur,
              adipise velit sed quia non numquam eiusm tempora incidunt ut
              labore
            </p>
            <div class="patient-details d-flex">
              <div class="patient-img">
                <figure class="mb-0">
                  <img src="assets/images/patient-img3.png" alt="patient-img3" />
                </figure>
              </div>
              <div class="patient-rating">
                <figure>
                  <img src="assets/images/rating-stars.png" alt="rating-stars" />
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
              <img src="assets/images/quote-img.png" alt="quote-img" />
            </figure>
            <p>
              Quisuam est rui dolorem ipsum rui dolor sit amet, consectetur,
              adipise velit sed quia non numquam eiusm tempora incidunt ut
              labore
            </p>
            <div class="patient-details d-flex">
              <div class="patient-img">
                <figure class="mb-0">
                  <img src="assets/images/patient-img1.png" alt="patient-img1" />
                </figure>
              </div>
              <div class="patient-rating">
                <figure>
                  <img src="assets/images/rating-stars.png" alt="rating-stars" />
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
              <img src="assets/images/quote-img.png" alt="quote-img" />
            </figure>
            <p>
              Ruisuam est rui dolorem ipsum rui dolor sit amet, consectetur,
              adipise velit sed quia non numquam eiusm tempora incidunt ut
              labore
            </p>
            <div class="patient-details d-flex">
              <div class="patient-img">
                <figure class="mb-0">
                  <img src="assets/images/patient-img2.png" alt="patient-img2" />
                </figure>
              </div>
              <div class="patient-rating">
                <figure>
                  <img src="assets/images/rating-stars.png" alt="rating-stars" />
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
              <img src="assets/images/quote-img.png" alt="quote-img" />
            </figure>
            <p>
              Nuisuam est rui dolorem ipsum rui dolor sit amet, consectetur,
              adipise velit sed quia non numquam eiusm tempora incidunt ut
              labore
            </p>
            <div class="patient-details d-flex">
              <div class="patient-img">
                <figure class="mb-0">
                  <img src="assets/images/patient-img3.png" alt="patient-img3" />
                </figure>
              </div>
              <div class="patient-rating">
                <figure>
                  <img src="assets/images/rating-stars.png" alt="rating-stars" />
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
              <img src="assets/images/quote-img.png" alt="quote-img" />
            </figure>
            <p>
              Quisuam est rui dolorem ipsum rui dolor sit amet, consectetur,
              adipise velit sed quia non numquam eiusm tempora incidunt ut
              labore
            </p>
            <div class="patient-details d-flex">
              <div class="patient-img">
                <figure class="mb-0">
                  <img src="assets/images/patient-img1.png" alt="patient-img1" />
                </figure>
              </div>
              <div class="patient-rating">
                <figure>
                  <img src="assets/images/rating-stars.png" alt="rating-stars" />
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
              <img src="assets/images/quote-img.png" alt="quote-img" />
            </figure>
            <p>
              Ruisuam est rui dolorem ipsum rui dolor sit amet, consectetur,
              adipise velit sed quia non numquam eiusm tempora incidunt ut
              labore
            </p>
            <div class="patient-details d-flex">
              <div class="patient-img">
                <figure class="mb-0">
                  <img src="assets/images/patient-img2.png" alt="patient-img2" />
                </figure>
              </div>
              <div class="patient-rating">
                <figure>
                  <img src="assets/images/rating-stars.png" alt="rating-stars" />
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
              <img src="assets/images/quote-img.png" alt="quote-img" />
            </figure>
            <p>
              Nuisuam est rui dolorem ipsum rui dolor sit amet, consectetur,
              adipise velit sed quia non numquam eiusm tempora incidunt ut
              labore
            </p>
            <div class="patient-details d-flex">
              <div class="patient-img">
                <figure class="mb-0">
                  <img src="assets/images/patient-img3.png" alt="patient-img3" />
                </figure>
              </div>
              <div class="patient-rating">
                <figure>
                  <img src="assets/images/rating-stars.png" alt="rating-stars" />
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
          <li data-aos="fade-up" data-aos-duration="700">
            <figure>
              <img src="assets/images/counter-img1.png" alt="counter-img1" />
            </figure>
            <div class="counter-box position-relative">
              <div class="count d-inline-block">3859</div>
              <div class="plus d-inline-block"><span>+</span></div>
            </div>
            <span class="d-block client-status">Professional Doctors</span>
          </li>
          <li data-aos="fade-up" data-aos-duration="700">
            <figure>
              <img src="assets/images/counter-img2.png" alt="counter-img2" />
            </figure>
            <div class="counter-box position-relative">
              <div class="count d-inline-block">8596</div>
              <div class="plus d-inline-block"><span></span></div>
            </div>
            <span class="d-block client-status">Globally Hospitals</span>
          </li>
          <li data-aos="fade-up" data-aos-duration="700">
            <figure>
              <img src="assets/images/counter-img3.png" alt="counter-img3" />
            </figure>
            <div class="counter-box position-relative">
              <div class="count d-inline-block">42</div>
              <div class="plus d-inline-block"><span>+</span></div>
            </div>
            <span class="d-block client-status">Years of Expereince</span>
          </li>
          <li data-aos="fade-up" data-aos-duration="700">
            <figure>
              <img src="assets/images/counter-img4.png" alt="counter-img4" />
            </figure>
            <div class="counter-box position-relative">
              <div class="count d-inline-block">852</div>
              <div class="plus d-inline-block"><span>+</span></div>
            </div>
            <span class="d-block client-status">Successful Operations</span>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!-- COUNTER SECTION -->
  <!-- BLOG SECTION -->
  <section class="blogs-section w-100 float-left padding-top padding-bottom">
    <div class="container">
      <div class="generic-title text-center" data-aos="fade-up" data-aos-duration="700">
        <span class="sub-txt d-block">ARTICLES & TIPS</span>
        <h2>Latest News & Blogs</h2>
      </div>
      <div class="blogs-inner-con" data-aos="fade-up" data-aos-duration="700">
        <div id="owl-carouseltwo" class="owl-carousel owl-theme">
          <div class="item">
            <div class="blog-box">
              <div class="blog-first-img blog-img-box"></div>
              <div class="blog-details">
                <span class="d-block"><i class="fas fa-calendar-alt"></i> Mar 20, 2021</span>
                <h4>
                  <a href="single-blog.html">Get the Home care and nursing service</a>
                </h4>
                <p>Debitis aut rerum nec sitatoe bus saerue eveniet...</p>
                <a href="single-blog.html">Read More <i class="fas fa-angle-right"></i></a>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="blog-box">
              <div class="blog-second-img blog-img-box"></div>
              <div class="blog-details">
                <span class="d-block"><i class="fas fa-calendar-alt"></i> Feb 14, 2022</span>
                <h4>
                  <a href="single-blog.html">Effective Ways to Manage Hypertension</a>
                </h4>
                <p>Debitis aut rerum nec sitatoe bus saerue eveniet...</p>
                <a href="single-blog.html">Read More <i class="fas fa-angle-right"></i></a>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="blog-box">
              <div class="blog-third-img blog-img-box"></div>
              <div class="blog-details">
                <span class="d-block"><i class="fas fa-calendar-alt"></i> Jun 07, 2022</span>
                <h4>
                  <a href="single-blog.html">Dental or Implant. What is the Best?</a>
                </h4>
                <p>Debitis aut rerum nec sitatoe bus saerue eveniet...</p>
                <a href="single-blog.html">Read More <i class="fas fa-angle-right"></i></a>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="blog-box">
              <div class="blog-first-img blog-img-box"></div>
              <div class="blog-details">
                <span class="d-block"><i class="fas fa-calendar-alt"></i> Mar 20, 2021</span>
                <h4>
                  <a href="single-blog.html">Get the Home care and nursing service</a>
                </h4>
                <p>Debitis aut rerum nec sitatoe bus saerue eveniet...</p>
                <a href="single-blog.html">Read More <i class="fas fa-angle-right"></i></a>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="blog-box">
              <div class="blog-second-img blog-img-box"></div>
              <div class="blog-details">
                <span class="d-block"><i class="fas fa-calendar-alt"></i> Feb 14, 2022</span>
                <h4>
                  <a href="single-blog.html">Effective Ways to Manage Hypertension</a>
                </h4>
                <p>Debitis aut rerum nec sitatoe bus saerue eveniet...</p>
                <a href="single-blog.html">Read More <i class="fas fa-angle-right"></i></a>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="blog-box">
              <div class="blog-third-img blog-img-box"></div>
              <div class="blog-details">
                <span class="d-block"><i class="fas fa-calendar-alt"></i> Jun 07, 2022</span>
                <h4>
                  <a href="single-blog.html">Dental or Implant. What is the Best?</a>
                </h4>
                <p>Debitis aut rerum nec sitatoe bus saerue eveniet...</p>
                <a href="single-blog.html">Read More <i class="fas fa-angle-right"></i></a>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="blog-box">
              <div class="blog-first-img blog-img-box"></div>
              <div class="blog-details">
                <span class="d-block"><i class="fas fa-calendar-alt"></i> Mar 20, 2021</span>
                <h4>
                  <a href="single-blog.html">Get the Home care and nursing service</a>
                </h4>
                <p>Debitis aut rerum nec sitatoe bus saerue eveniet...</p>
                <a href="single-blog.html">Read More <i class="fas fa-angle-right"></i></a>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="blog-box">
              <div class="blog-second-img blog-img-box"></div>
              <div class="blog-details">
                <span class="d-block"><i class="fas fa-calendar-alt"></i> Feb 14, 2022</span>
                <h4>
                  <a href="single-blog.html">Effective Ways to Manage Hypertension</a>
                </h4>
                <p>Debitis aut rerum nec sitatoe bus saerue eveniet...</p>
                <a href="single-blog.html">Read More <i class="fas fa-angle-right"></i></a>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="blog-box">
              <div class="blog-third-img blog-img-box"></div>
              <div class="blog-details">
                <span class="d-block"><i class="fas fa-calendar-alt"></i> Jun 07, 2022</span>
                <h4>
                  <a href="single-blog.html">Dental or Implant. What is the Best?</a>
                </h4>
                <p>Debitis aut rerum nec sitatoe bus saerue eveniet...</p>
                <a href="single-blog.html">Read More <i class="fas fa-angle-right"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- BLOG SECTION -->o
  <!-- GET IN TOUCH SECTION -->
  <section class="get-in-touch-section w-100 float-left">
    <div class="container">
      <div class="contact-section" data-aos="fade-up" data-aos-duration="700" style="background-color: #02a6c7;">
        <div class="doctor-img-con"></div>
        <div class="contact-txt-con">
          <div class="generic-title mb-0">
            <span class="sub-txt d-block">GET IN TOUCH</span>
            <h2>Provide The Best Medical Service for You!</h2>
          </div>
          <div class="submit-btn">
            <a href="contact.html">Book an Appointment</a>
            <a href="contact.html">
              <figure class="mb-0">
                <img src="assets/images/top-arrow.png" alt="top-arrow" />
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
  <script src="assets/js/jquery.validate.js"></script>
  <script src="assets/js/contact-form.js"></script>
  <script>
    $(window).on("load", function () {
      // Preloader
      $(".loader").fadeOut();
      $(".loader-mask").delay(350).fadeOut("slow");
    });
  </script>
  <script>
    var btn = $("#button");

    $(window).scroll(function () {
      if ($(window).scrollTop() > 300) {
        btn.addClass("show");
      } else {
        btn.removeClass("show");
      }
    });
    btn.on("click", function (e) {
      e.preventDefault();
      $("html, body").animate({ scrollTop: 0 }, "300");
    });
  </script>
  <script>
    AOS.init();
  </script>
  <script>
    $("#owl-carouselone").owlCarousel({
      loop: true,
      margin: 10,
      nav: true,
      autoplay: true,
      autoplayTimeout: 10000,
      autoplayHoverPause: true,
      responsive: {
        0: {
          items: 1,
        },
        600: {
          items: 2,
        },
        1000: {
          items: 3,
        },
      },
    });
    $("#owl-carouseltwo").owlCarousel({
      loop: true,
      margin: 30,
      nav: true,
      autoplay: true,
      autoplayTimeout: 10000,
      autoplayHoverPause: true,
      responsive: {
        0: {
          items: 1,
        },
        600: {
          items: 2,
        },
        1000: {
          items: 3,
        },
      },
    });
  </script>
  <script>
    AOS.init();
    function lightbox_open() {
      var lightBoxVideo = document.getElementById("VisaChipCardVideo");
      //   window.scrollTo(0, 0);
      document.getElementById("light").style.display = "block";
      document.getElementById("fade1").style.display = "block";
      lightBoxVideo.play();
    }

    function lightbox_close() {
      var lightBoxVideo = document.getElementById("VisaChipCardVideo");
      document.getElementById("light").style.display = "none";
      document.getElementById("fade1").style.display = "none";
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
      };

      for (j = 0; j < countersQuantity; j++) {
        count(0, counter[j], j);
      }
    });

    $(".count").each(function () {
      $(this)
        .prop("Counter", 0)
        .animate(
          {
            Counter: $(this).text(),
          },
          {
            duration: 3300,
            easing: "swing",
            step: function (now) {
              $(this).text(Math.ceil(now));
            },
          }
        );
    });
  </script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>RxClinic - Register as Doctor</title>
    <meta content="" name="description">

    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/rxclinic_logo_1.png" rel="icon">
    <link href="assets/img/rxclinic_logo_1.png" rel="apple-touch-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,800" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/styleregister.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: FlexStart - v1.9.0
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="index.php" class="logo d-flex align-items-center">
                <img src="assets/img/rxlogowithname.png" alt="">
              </a>
              

            <nav id="navbar" class="navbar">
                <ul>
                    <!-- <li><a class="nav-link scrollto active" href="#about">WHY RxClinic?</a></li>
          <li><a class="nav-link scrollto" href="#values">OUR PLANS</a></li>
          <li><a class="nav-link scrollto" href="#features">HOW IT WORKS</a></li>
          <li><a class="nav-link scrollto" href="#services">OUR SERVICES</a></li>
          <li><a class="nav-link scrollto" href="#clients">OUR PARTNERS</a></li>
          <li><a class="nav-link scrollto" href="#contact">CONTACT</a></li> -->
                    <li class="dropdown"><a href="#"><span>LOG IN</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="landingpagelogin.php">Member</a></li>
                            <li><a href="logindoctorpage.php">Doctor</a></li>
                            <li><a href="loginadminpage.php">Admin</a></li>
                        </ul>
                    </li>
                    <li><a class="getstarted scrollto" href="index.php">SIGN IN</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center">

        <div class="container" data-aos="fade-up">
            <div class="row">
                <!-- <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                    <img src="assets/img/doctor.jpg" class="img-fluid" alt="">
                </div> -->
                <div class="col-sm-9 col-md-7 col-lg-7 mx-auto">
                    <div class="card border-0 shadow rounded-3 my-5">
                        <div class="card-body p-4 p-sm-5">
                            <!-- <h5 class="card-title text-center mb-5 fw-light fs-5">Sign In</h5> -->
                            <h2 class="card-title text-center mb-4 fw-bold fs-7">REGISTER as DOCTOR</h2>
                            <h5 class="mb-2"><strong>STEP 1 : </strong> Doctor's Details</h5>
                            <!-- <h1 class="card-title text-left mt-1 mb-2 fw-light fs-6"><strong>Basic Info:</strong></h1> -->
                            <form class="d-inline-flex">
                                <div class="form-floating mb-2 d-inline-flex">
                                    <input type="email" class="form-control" id="floatingInput"
                                        placeholder="name@example.com">
                                    <label for="floatingInput">First Name</label>
                                </div>
                                <p>&nbsp;&nbsp;&nbsp;&nbsp;</p>
                                <div class="form-floating mb-3 d-inline-flex">
                                    <input type="email" class="form-control" id="floatingInput"
                                        placeholder="name@example.com">
                                    <label for="floatingInput">Middle Name</label>
                                </div>
                                <p>&nbsp;&nbsp;&nbsp;&nbsp;</p>
                                <div class="form-floating mb-3 d-inline-flex">
                                    <input type="email" class="form-control" id="floatingInput"
                                        placeholder="name@example.com">
                                    <label for="floatingInput">Last Name</label>
                                </div>
                            </form>
                            <div class="form-floating mb-3">
                                <input type="date" class="form-control" id="floatingInput"
                                    placeholder="name@example.com">
                                <label for="floatingInput">Date of Birth</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="floatingInput"
                                    placeholder="name@example.com">
                                <label for="floatingInput">Phone Number</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="floatingInput"
                                    placeholder="name@example.com">
                                <label for="floatingInput">Email Address</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="floatingInput"
                                    placeholder="name@example.com">
                                <label for="floatingInput">Address</label>
                            </div>
                            <div class="form-floating mb-3 d-inline-flex">
                                <input type="number" class="form-control" id="floatingInput"
                                    placeholder="name@example.com">
                                <label for="floatingInput">Payment Fee</label>
                            </div>
                            <h5 class="mb-2 mt-4"><strong>STEP 2 : </strong> Identification</h5>
                            <!-- <h1 class="card-title text-left mt-1 mb-2 fw-light fs-6"><strong>Basic Info:</strong></h1> -->
                            <div class="form-floating mb-2">
                                <input type="number" class="form-control" id="floatingInput"
                                    placeholder="name@example.com">
                                <label for="floatingInput">PRC Number</label>
                            </div>
                            <div class="mb-3">
                                <label for="floatingInput">PRC Image</label>
                                <input type="file" accept="image/png, image/jpeg" class="form-control mt-2"
                                    id="floatingInput" placeholder="name@example.com">
                            </div>
                            <div class="form-floating mb-3">
                                <input type="number" class="form-control" id="floatingInput"
                                    placeholder="name@example.com">
                                <label for="floatingInput">PTR Number</label>
                            </div>
                            <div class="form-floating mb-2">
                                <input type="number" class="form-control" id="floatingInput"
                                    placeholder="name@example.com">
                                <label for="floatingInput">Philhealth Number</label>
                            </div>
                            <div class="mb-3">
                                <label for="floatingInput">PhilHealth Image</label>
                                <input type="file" accept="image/png, image/jpeg" class="form-control mt-2"
                                    id="floatingInput" placeholder="name@example.com">
                            </div>
                            <h5 class="mb-2 mt-5"><strong>STEP 3 : </strong> Specialization</h5>
                            <!-- <h1 class="card-title text-left mt-1 mb-2 fw-light fs-6"><strong>Basic Info:</strong></h1> -->
                            <div class="field mb-3">
                                <div class="label">
                                    Main Specialization
                                </div>
                                <select class="form-control mb-2" id="floatingInput">
                                    <option>Cardiology</option>
                                    <option>Otolaryngology</option>
                                    <option>Endocrinology</option>
                                    <option>Family Medicine</option>
                                    <option>Gastroenterology</option>
                                    <option>General Dentistry</option>
                                    <option>General Medicine</option>
                                    <option>Internal Medicine</option>
                                    <option>Mental Health</option>
                                    <option>Nephrology</option>
                                    <option>Neurology</option>
                                    <option>Nutritionist-Dietitian</option>
                                    <option>Family Medicine</option>
                                    <option>Obstetrics and Gynecology</option>
                                    <option>Oncology</option>
                                    <option>Opthalmology</option>
                                    <option>Pediatrics</option>
                                    <option>Pulmonology</option>
                                    <option>Rehabilitation Medicine</option>
                                    <option>Rheumatology</option>
                                    <option>Urology</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="floatingInput" class="mb-2">Certificates</label>
                                <input type="file" accept="image/png, image/jpeg" class="form-control"
                                    id="floatingInput" placeholder="name@example.com">
                            </div>
                            <div class="form-floating mb-2 mt-2">
                                <input type="" class="form-control" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput">Sub Specialization</label>
                            </div>
                            <div class="mb-2">
                                <label for="floatingInput">Certificates</label>
                                <input type="file" accept="image/png, image/jpeg" class="form-control mt-2"
                                    id="floatingInput" placeholder="name@example.com">
                            </div>
                            <h5 class="mb-2 mt-5"><strong>STEP 4 : </strong> Credentials</h5>
                            <div class="mb-2">
                                <label for="floatingInput">Resume</label>
                                <input type="file" accept="image/png, image/jpeg" class="form-control mt-2"
                                    id="floatingInput" placeholder="name@example.com">
                            </div>
                            <div class="form-floating mb-3 mt-3">
                                <input type="date" class="form-control mt-2" id="floatingInput"
                                    placeholder="name@example.com">
                                <label for="floatingInput">NBI Clearance</label>
                            </div>
                            <div class="mb-2">
                                <input type="file" accept="image/png, image/jpeg" class="form-control mt-2"
                                    id="floatingInput" placeholder="name@example.com">
                            </div>
                            <div class="form-floating mb-3 mt-3">
                                <input type="date" class="form-control mt-2" id="floatingInput"
                                    placeholder="name@example.com">
                                <label for="floatingInput">Member Certificate</label>
                            </div>
                            <div class="mb-2">
                                <input type="file" accept="image/png, image/jpeg" class="form-control mt-2"
                                    id="floatingInput" placeholder="name@example.com">
                            </div>

                            <label for="floatingInput">VAT or NON-VAT</label>
                            <div class="row">
                                <div class="col mb-3">
                                    <input type="radio" id="huey" name="drone" value="huey" checked>
                                    <label for="huey">VAT</label>
                                </div>
                                <div class="col">
                                    <input type="radio" id="dewey" name="drone" value="dewey">
                                    <label for="dewey">NON-VAT</label>
                                </div>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="number" class="form-control" id="floatingInput"
                                    placeholder="name@example.com">
                                <label for="floatingInput">TIN Number</label>
                            </div>
                            <div class="mb-2">
                                <label for="floatingInput">COR - BIR 2303</label>
                                <input type="file" accept="image/png, image/jpeg" class="form-control mt-2"
                                    id="floatingInput" placeholder="name@example.com">
                            </div>
                            <div class="mb-2">
                                <label for="floatingInput">Sworn statement declaration of Receipt</label>
                                <input type="file" accept="image/png, image/jpeg" class="form-control mt-2"
                                    id="floatingInput" placeholder="name@example.com">
                            </div>
                            <div class="d-grid mt-4">
                                <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit">
                                    Register
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </section>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>RxClinic</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flexstart-bootstrap-startup-template/ -->
                Designed by <a href="index.php">RxClinic Group</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>
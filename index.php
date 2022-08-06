<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>RxClinic</title>
  <meta content="" name="description">

  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="./assets/img/rxclinic_logo_1.png" rel="icon">
  <link href="./assets/img/rxclinic_logo_1.png" rel="apple-touch-icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Google Fonts -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="./assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="./assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="./assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="./assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="./assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="./assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="./assets/css/style.css" rel="stylesheet">

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
        <img src="./assets/img/rxlogowithname.png" alt="">
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#about">WHY RxClinic?</a></li>
          <li><a class="nav-link scrollto" href="#values">OUR PLANS</a></li>
          <li><a class="nav-link scrollto" href="#features">HOW IT WORKS</a></li>
          <li><a class="nav-link scrollto" href="#services">OUR SERVICES</a></li>
          <!-- <li><a class="nav-link scrollto" href="#clients">OUR PARTNERS</a></li> -->
          <li><a class="nav-link scrollto" href="#contact">CONTACT</a></li>
          <!-- <li><a class="getstarted scrollto" href="landingpagelogin.php">LOGIN</a></li> -->
          <li class="dropdown"><a href="#"><span>LOG IN</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="landingpagelogin.php">Member</a></li>
              <li><a href="logindoctorpage.php">Doctor</a></li>
              <li><a href="loginadminpage.php">Admin</a></li>
            </ul>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">

    <div class="container" data-aos="fade-up">
      <div class="row mt-5">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
          <div class="card border-0 shadow rounded-3 my-5">
            <div class="card-body p-4 p-sm-5">
              <!-- <h5 class="card-title text-center mb-5 fw-light fs-5">Sign In</h5> -->
              <h2 class="card-title text-left mb-2 fw-bold fs-5">CONSULT A DOCTOR NOW.</h2>
              <h1 class="card-title text-left mt-1 mb-3 fw-light fs-6">Enter your email to continue:</h1>
              <form>
                <div class="form-floating mb-3">
                  <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                  <label for="floatingInput">Email address</label>
                </div>
                <!-- <div class="form-floating mb-3">
                  <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                  <label for="floatingPassword">Password</label>
                </div> -->

                <div class="form-check mb-3">
                  <input class="form-check-input" type="checkbox" value="" id="rememberPasswordCheck">
                  <label class="form-check-label" for="rememberPasswordCheck">By proceeding, you agree with RxClinic's
                    <a href="termsandconditions.php">Terms & Conditions</a> and <a href="dataprivacypolicy.php">Data
                      Privacy Policy</a>
                  </label>
                </div>

                <form action="?" method="POST">
                  <div class="g-recaptcha ms-5" data-sitekey="6LeCUykhAAAAAI0y0IWcl89tPwViUmFnc2azl2Lt"></div>
                  <br />
                  <script src="https://www.google.com/recaptcha/api.js"></script>
                </form>

                <form action="about_patient.php" novalidate>
                  <div class="d-grid">
                    <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit">Sign
                      in</button>
                  </div>
                </form>
                <hr class="my-4">
                <div class="d-grid mb-2">
                  <button class="btn btn-google btn-login text-uppercase fw-bold" type="submit">
                    <i class="fa fa-google me-2"></i> Sign in with Google
                  </button>
                </div>
                <div class="d-grid">
                  <button class="btn btn-facebook btn-login text-uppercase fw-bold" type="submit">
                    <i class="fa fa-facebook-f me-2"></i> Sign in with Facebook
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
          <img src="./assets/img/doctors_rafiki_1.png" class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <!-- ======= About Section ======= -->
  <section id="about" class="about">

    <div class="container" data-aos="fade-up">
      <div class="row gx-0">

        <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
          <div class="content">
            <h3>Why RxClinic?</h3>
            <h2>We are RxClinic</h2>
            <p>
              You can access licensed doctors at any time, without an appointment, thanks to the telehealth
              subscription service RxClinic. Anytime and as frequently as you'd like, you can speak with a doctor in a
              most convenient way.
            </p>
            <div class="text-center text-lg-start">
              <a href="#" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Read More</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>

        <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
          <img src="./assets/img/about2.jpg" class="img-fluid" alt="">
        </div>

      </div>
    </div>

  </section><!-- End About Section -->

  <!-- ======= Values Section ======= -->
  <section id="values" class="values">

    <div class="container" data-aos="fade-up">

      <header class="section-header">
        <h2>OUR PLANS</h2>
        <p>We Got You Covered</p>
      </header>

      <div class="row">

        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
          <div class="box">
            <img src="./assets/img/money.jpg" class="img-fluid" alt="">
            <h3>Best value for money: enterprise and corporate accounts.</h3>
            <p>Enterprise Account means, collectively, all Accounts that belong to the Customer's subscription. An
              Enterprise Account may represent a team, group or other subdivision within the Customer's organization
              or the whole organization.</p>
          </div>
        </div>

        <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
          <div class="box">
            <img src="./assets/img/vip.jpg" class="img-fluid" alt="">
            <h3>Get a personalized VIP code that you can buy for your whole company.</h3>
            <p>The VIP code is a specific referral code. Any registering client who may have received this code can
              enter it in the available field. This VIP code is for referral tracking only and is not attached to any
              special bonuses or offers.</p>
          </div>
        </div>

        <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="600">
          <div class="box">
            <img src="./assets/img/purchase1.png" class="img-fluid" alt="">
            <h3>Minimum purchase of 10,000 consults.</h3>
            <p>Without an appointment, RxClinic enables you to chat with a general practitioner whenever you need to.
              Only P199 is charged for a consultation at RxClinic. To use the service, you can pay with a credit card
              or GCash.</p>
          </div>
        </div>

      </div>

    </div>

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Pricing</h2>
          <p>Annual Plans</p>
        </header>

        <div class="row gy-4" data-aos="fade-left">

          <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
            <div class="box">
              <h3 style="color: #07d5c0;">Personal Plan</h3>
              <div class="price"><sup>₱</sup>499<span> / yr</span></div>
              <img src="./assets/img/single1.png" class="img-fluid" alt="">
              <ul>
                <li>12 Months Membership</li>
                <li>Unlimited Consultation</li>
                <li>e-Prescription, e-Laboratory Request, e-Medical Certificate</li>
                <li>Access to Partner Benefits</li>
                <li>1 member</li>
                <!-- <li class="na">Pharetra massa</li>
                <li class="na">Massa ultricies mi</li> -->
              </ul>
              <a href="#" class="btn-buy">Subscribe</a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="box">
              <span class="featured">Featured</span>
              <h3 style="color: #65c600;">Partner Plan</h3>
              <div class="price"><sup>₱</sup>799<span> / yr</span></div>
              <img src="./assets/img/partner1.png" class="img-fluid" alt="">
              <ul>
                <li>12 Months Membership</li>
                <li>Unlimited Consultation</li>
                <li>e-Prescription, e-Laboratory Request, e-Medical Certificate</li>
                <li>Access to Partner Benefits</li>
                <li>2 members</li>
              </ul>
              <a href="#" class="btn-buy">Subscribe</a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="300">
            <div class="box">
              <h3 style="color: #ff901c;">Family Plan</h3>
              <div class="price"><sup>₱</sup>999<span> / yr</span></div>
              <img src="./assets/img/family1.jpg" class="img-fluid" alt="">
              <ul>
                <li>12 Months Membership</li>
                <li>Unlimited Consultation</li>
                <li>e-Prescription, e-Laboratory Request, e-Medical Certificate</li>
                <li>Access to Partner Benefits</li>
                <li>5 members</li>
              </ul>
              <a href="#" class="btn-buy">Subscribe</a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="400">
            <div class="box">
              <h3 style="color: #ff0071;">Ultimate Plan</h3>
              <div class="price"><sup>₱</sup>1299<span> / yr</span></div>
              <img src="./assets/img/family2.png" class="img-fluid" alt="">
              <ul>
                <li>12 Months Membership</li>
                <li>Unlimited Consultation</li>
                <li>e-Prescription, e-Laboratory Request, e-Medical Certificate</li>
                <li>Access to Partner Benefits</li>
                <li>10 members</li>
              </ul>
              <a href="#" class="btn-buy">Subscribe</a>
            </div>
          </div>

        </div>

      </div>

    </section><!-- End Pricing Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Features</h2>
          <p>How It Works</p>
        </header>
        <div class="row">
          <!-- Feature Tabs -->
          <div class="row feture-tabs" data-aos="fade-up">
            <div class="col-lg-6">
              <!-- Tabs -->
              <ul class="nav nav-pills mb-3">
                <li>
                  <a class="nav-link active" data-bs-toggle="pill" href="#tab1">Steps </a>
                </li>
                <li>
                  <a class="nav-link" data-bs-toggle="pill" href="#tab2">Payment</a>
                </li>
                <li>
                  <!-- <a class="nav-link" data-bs-toggle="pill" href="#tab3">Corrupti</a>
              </li> -->
              </ul><!-- End Tabs -->

              <!-- Tab Content -->
              <div class="tab-content">

                <div class="tab-pane fade show active" id="tab1">
                  <!-- <p>Consequuntur inventore voluptates consequatur aut vel et. Eos doloribus expedita. Sapiente atque consequatur minima nihil quae aspernatur quo suscipit voluptatem.</p> -->
                  <div class="d-flex align-items-center mb-2">
                    <i class="bi bi-check2"></i>
                    <h4>Step 1</h4>
                  </div>
                  <p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspEnter your email to create a RxClinic account. It's totally
                    FREE!</p>
                  <div class="d-flex align-items-center mb-2">
                    <i class="bi bi-check2"></i>
                    <h4>Step 2</h4>
                  </div>
                  <p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspChoose your plan.</p>
                  <div class="d-flex align-items-center mb-2">
                    <i class="bi bi-check2"></i>
                    <h4>Step 3</h4>
                  </div>
                  <p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspCall (09) 12-345-6789</p>
                  <div class="d-flex align-items-center mb-2">
                    <i class="bi bi-check2"></i>
                    <h4>Step 4</h4>
                  </div>
                  <p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspConsult with the doctor of your choice.</p>
                </div>

                <!-- End Tab 1 Content -->

                <div class="tab-pane fade show" id="tab2">
                  <p>Consequuntur inventore voluptates consequatur aut vel et. Eos doloribus expedita. Sapiente atque
                    consequatur minima nihil quae aspernatur quo suscipit voluptatem.</p>
                  <div class="d-flex align-items-center mb-2">
                    <i class="bi bi-check2"></i>
                    <h4>Repudiandae rerum velit modi et officia quasi facilis</h4>
                  </div>
                  <p>Laborum omnis voluptates voluptas qui sit aliquam blanditiis. Sapiente minima commodi dolorum non
                    eveniet magni quaerat nemo et.</p>
                  <div class="d-flex align-items-center mb-2">
                    <i class="bi bi-check2"></i>
                    <h4>Incidunt non veritatis illum ea ut nisi</h4>
                  </div>
                  <p>Non quod totam minus repellendus autem sint velit. Rerum debitis facere soluta tenetur. Iure
                    molestiae assumenda sunt qui inventore eligendi voluptates nisi at. Dolorem quo tempora. Quia et
                    perferendis.</p>
                </div><!-- End Tab 2 Content -->

                <div class="tab-pane fade show" id="tab3">
                  <p>Consequuntur inventore voluptates consequatur aut vel et. Eos doloribus expedita. Sapiente atque
                    consequatur minima nihil quae aspernatur quo suscipit voluptatem.</p>
                  <div class="d-flex align-items-center mb-2">
                    <i class="bi bi-check2"></i>
                    <h4>Repudiandae rerum velit modi et officia quasi facilis</h4>
                  </div>
                  <p>Laborum omnis voluptates voluptas qui sit aliquam blanditiis. Sapiente minima commodi dolorum non
                    eveniet magni quaerat nemo et.</p>
                  <div class="d-flex align-items-center mb-2">
                    <i class="bi bi-check2"></i>
                    <h4>Incidunt non veritatis illum ea ut nisi</h4>
                  </div>
                  <p>Non quod totam minus repellendus autem sint velit. Rerum debitis facere soluta tenetur. Iure
                    molestiae assumenda sunt qui inventore eligendi voluptates nisi at. Dolorem quo tempora. Quia et
                    perferendis.</p>
                </div><!-- End Tab 3 Content -->

              </div>

            </div>

            <div class="col-lg-6">
              <img src="./assets/img/works.png" class="img-fluid" alt="">
            </div>

          </div><!-- End Feature Tabs -->

          <!-- Feature Icons -->
          <div class="row feature-icons" data-aos="fade-up">
            <h3>Enjoy these benefits when you consult our licensed doctors:</h3>

            <div class="row">

              <div class="col-xl-4 text-center" data-aos="fade-right" data-aos-delay="100">
                <img src="./assets/img/benefits2.png" class="img-fluid p-4" alt="">
              </div>

              <div class="col-xl-8 d-flex content">
                <div class="row align-self-center gy-4">

                  <div class="col-md-6 icon-box" data-aos="fade-up">
                    <i class="ri-file-list-3-line"></i>
                    <div>
                      <h4>e-Prescription</h4>
                      <p>An electronic prescription is a digital version of a paper prescription. During your
                        consultation, your healthcare provider can send your electronic prescription to you as a SMS
                        or email. </p>
                    </div>
                  </div>

                  <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                    <i class="ri-medicine-bottle-line"></i>
                    <div>
                      <h4>e-Laboratory Requests</h4>
                      <p>Electronic based laboratory forms provide a more complete, accurate, clear, and
                        understandable format than paper-based laboratory records. </p>
                    </div>
                  </div>

                  <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                    <i class="ri-file-paper-line"></i>
                    <div>
                      <h4>e-Medical Certificate</h4>
                      <p>A medical certificate or doctor's certificate is a written statement from a physician or
                        another medically qualified health care provider which attests to the result of a medical
                        examination of a patient.</p>
                    </div>
                  </div>

                  <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                    <i class="ri-health-book-line"></i>
                    <div>
                      <h4>General Health Information</h4>
                      <p>Health information is any personal information about your health or disability. It includes
                        information or opinion about your illness, injury or disability. </p>
                    </div>
                  </div>

                  <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                    <i class="ri-nurse-line"></i>
                    <div>
                      <h4>Proper Medication</h4>
                      <p>Using medications correctly at the right time and in the right way can usually prevent health
                        conditions from becoming worse while also reducing the risk of hospitalization and death.</p>
                    </div>
                  </div>

                  <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
                    <i class="ri-mental-health-line"></i>
                    <div>
                      <h4>Mental Health</h4>
                      <p>Mental health includes our emotional, psychological, and social well-being. It affects how we
                        think, feel, and act. It also helps determine how we handle stress, relate to others, and make
                        choices.</p>
                    </div>
                  </div>

                </div>
              </div>

            </div>

          </div><!-- End Feature Icons -->

        </div>

    </section><!-- End Features Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Services</h2>
          <p>RxClinic Offers You These Services</p>
        </header>

        <div class="row gy-4">

          <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-box blue">
              <i class="ri-heart-line icon"></i>
              <h3>Primary Care</h3>
              <p>Primary healthcare is the provision of health services, including diagnosis and treatment of a health
                condition, and support in managing long-term healthcare. Includes Dermatology, Otolaryngology, General
                Dentisty,
                Family Medicine, General Medicine, Internal Medicine, Mental Health, Nutritionist-Dietitian, Oncology,
                Ophthalmology, Pediatrics, Pulmonology, Rehabilitation Medicine, Rheumatology and Urology.</p>
              <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-box green">
              <i class="ri-syringe-line icon"></i>
              <h3>Secondary Care</h3>
              <p>Secondary care simply means being taken care of by someone who has particular expertise in whatever
                problem a patient is having. Includes Cardiology, Endocrinology, Gastroenterology, Nephrology,
                Neurology, and Obstetrics & Gynecology. <br><br><br><br></p>
              <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <!-- <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-box orange">
              <i class="ri-hospital-line icon"></i>
              <h3>Tertiary Care</h3>
              <p>Is highly specialized medical care usually over an extended period of time that involves advanced and complex procedures and treatments performed by medical specialists in state-of-the-art facilities. We offer these tertiary care services: General Surgery, Neck Surgery, Orthopedic Surgery, and Vascular Surgery.<br><br><br><br></p>
              <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>
        </div> -->

        </div>

    </section><!-- End Services Section -->


    <!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>F.A.Q</h2>
          <p>Frequently Asked Questions</p>
        </header>

        <div class="row">
          <div class="col-lg-6">
            <!-- F.A.Q List 1-->
            <div class="accordion accordion-flush" id="faqlist1">
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                    What is RxClinic?
                  </button>
                </h2>
                <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                  <div class="accordion-body">
                    Without an appointment, RxClinic offers 24/7 access to qualified medical professionals who can
                    manage your general and mental health concerns. From the convenience of your home, you can visit a
                    doctor through phone or chat.
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                    What are the key features of RxClinic?
                  </button>
                </h2>
                <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                  <div class="accordion-body">
                    <ul>
                      <li>24/7 Without an appointment, you can chat, call, or use the site to consult a general
                        practitioner whenever you like.</li>
                      <li>Principal Medical Counsel. Get over-the-phone primary medical advice on routine healthcare,
                        common ailments including cough, fever, cold, and allergies, and legal medications.</li>
                      <li>Interpretation of diagnostic data or general health information. Doctors at RxClinic can
                        answer any health-related question, including how to interpret test findings and diagnose
                        problems.</li>
                      <li>Access to electronic medical records. Important medical documentation including an
                        e-prescription, an e-laboratory request, and an e-medical certificate may be provided by
                        RxClinic doctors at their discretion.</li>
                      <li>Access to doctors right away. Use a Fast Pass to see a doctor with a guaranteed wait time of
                        five minutes, or you'll get a refund.</li>
                      <li>Support for mental health. Take advantage of the certified psychologists at RxClinic who are
                        skilled in providing mental health first aid.</li>
                      <!-- <li class="na">Pharetra massa</li>
                      <li class="na">Massa ultricies mi</li> -->
                    </ul>
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                    How can I be assured that I am talking to a licensed doctor?
                  </button>
                </h2>
                <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                  <div class="accordion-body">
                    Prior to hiring, RxClinic analyzes each of the doctors who are submitting applications and
                    confirms that they are PRC-licensed. To ensure that its licensed doctors are competent to provide
                    you with high-quality healthcare, RxClinic also holds rigorous training sessions for their
                    continuing medical education (CME).
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-4">
                    What is the difference between RxClinic Health Plans and RxClinic Pay per Consult products?
                  </button>
                </h2>
                <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                  <div class="accordion-body">
                    Depending on the type of plan you buy, RxClinic Health Plans are subscription-based and are paid
                    monthly or annually.
                    <br><br>
                    Pay per Consult goods are compensated for each consultation. To use these goods, you do not need
                    to be a member of the RxClinic Health Plan.
                  </div>
                </div>
              </div>

            </div>
          </div>

          <div class="col-lg-6">

            <!-- F.A.Q List 2-->
            <div class="accordion accordion-flush" id="faqlist2">

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-1">
                    Do you also have specialized doctors on RxClinic?
                  </button>
                </h2>
                <div id="faq2-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                  <div class="accordion-body">
                    Yes, we do have a wide range of specialists in medicine. If you're a RxClinic member, you can
                    schedule an appointment using the app.
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-2">
                    What will happen if the app crashes, will I still be able to continue the chat consult?
                  </button>
                </h2>
                <div id="faq2-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                  <div class="accordion-body">
                    Users may contact our hotline at (+63) 912 345 5679 or send an email to
                    rxclinics@telehealth.com.ph to obtain a refund if the consultation is not completed. Within 48
                    hours, we will verify your refund request.
                    <br><br>
                    Refunds are subject to case-by-case consideration, and our RxClinic wellness representative will
                    look into each request for a refund.
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-3">
                    How come I don’t see the KonsultaChat section in my KonsultaMD app?
                  </button>
                </h2>
                <div id="faq2-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                  <div class="accordion-body">
                    The most recent version of the RxClinic app includes the RxClinic Chat App. To get the most recent
                    version of the app, please go to the apps store on your phone.
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-4">
                    What happens if no doctor attends to me?
                  </button>
                </h2>
                <div id="faq2-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                  <div class="accordion-body">
                    As soon as you start a conversation in the KonsultaChat room, our doctors are alerted, and you can
                    be confident that they will get back to you as soon as you acknowledge that you have read the
                    consultation disclaimer.
                  </div>
                </div>
              </div>

            </div>
          </div>

        </div>

      </div>

    </section><!-- End F.A.Q Section -->

    <!-- ======= Clients Section ======= -->

    <!-- <section id="clients" class="clients">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Our Partners</h2>
          <p>RxClinic Partners</p>
        </header>

        <div class="clients-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="./assets/img/clients/medical1.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="./assets/img/clients/medical2.jfif" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="./assets/img/clients/medical3.jpg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="./assets/img/clients/medical4.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="./assets/img/clients/medical5.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="./assets/img/clients/medical6.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="./assets/img/clients/medical7.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="./assets/img/clients/medical8.png" class="img-fluid" alt=""></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>

    </section> -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </header>

        <div class="row gy-4">

          <div class="col-lg-6">

            <div class="row gy-4">
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-geo-alt"></i>
                  <h3>Address</h3>
                  <p>1069 Batumbakal Street,<br>New York, Pampanga</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-telephone"></i>
                  <h3>Call Us</h3>
                  <p>+63 912 345 6789<br>+69 998 765 4321</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-envelope"></i>
                  <h3>Email Us</h3>
                  <p>rxclinics@telehealth.com.ph<br>rxclinic@telehealth.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-clock"></i>
                  <h3>Open Hours</h3>
                  <p>Monday - Friday<br>9:00AM - 05:00PM</p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" class="php-email-form">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>

                  <button type="submit">Send Message</button>
                </div>

              </div>
            </form>

          </div>

        </div>

      </div>

    </section><!-- End Contact Section -->

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

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="./assets/vendor/purecounter/purecounter.js"></script>
    <script src="./assets/vendor/aos/aos.js"></script>
    <script src="./assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="./assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="./assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="./assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="./assets/js/main.js"></script>

</body>

</html>
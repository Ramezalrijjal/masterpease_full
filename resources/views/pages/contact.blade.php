<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Tourist - Travel Agency HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark px-5 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i>Al Hashemi Street. Irbid. Jordan</small>
                    <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>00962797155813</small>
                    <small class="text-light"><i class="fa fa-envelope-open me-2"></i>Ramezalrijjal@yahoo.com</small>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-twitter fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-instagram fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href=""><i class="fab fa-youtube fw-normal"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
            <a href="" class="navbar-brand p-0">
                <h1 class="text-primary m-0"><i class="fa fa-map-marker-alt me-3"></i>SHMLAT</h1>
                <!-- <img src="img/logo.png" alt="Logo"> -->
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="index" class="nav-item nav-link">Home</a>
                    <a href="/about" class="nav-item nav-link active">About</a>
                    <a href="service" class="nav-item nav-link">Services</a>
                    <a href="package" class="nav-item nav-link">Packages</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu m-0">
                            <a href="destination" class="dropdown-item">Destination</a>
                            <a href="booking" class="dropdown-item">Booking</a>
                            <a href="team" class="dropdown-item">Travel Guides</a>
                            <a href="testimonial" class="dropdown-item">Testimonial</a>
                            <a href="profile" class="dropdown-item">profile</a>
                        </div>
                    </div>
                    <a href="contact" class="nav-item nav-link">Contact</a>
                </div>
                <a href="login" class="btn btn-primary rounded-pill py-2 px-4">Register</a>
            </div>
        </nav>

        <div class="container-fluid bg-primary py-5 mb-5 hero-header">
            <div class="container py-5">
                <div class="row justify-content-center py-5">
                    <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                        <h1 class="display-3 text-white animated slideInDown">Contact Us</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                                <li class="breadcrumb-item text-white active" aria-current="page">Contact</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar & Hero End -->


    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Contact Us</h6>
                <h1 class="mb-5">Contact For Any Query</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h5>Get In Touch</h5>
                    <p class="mb-4">"We are at your service at all times."




                    </p>
                    <div class="d-flex align-items-center mb-4">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary" style="width: 50px; height: 50px;">
                            <i class="fa fa-map-marker-alt text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h5 class="text-primary">Office</h5>
                            <p class="mb-0">Al Hashemi Street. Irbid. Jordan</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-4">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary" style="width: 50px; height: 50px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h5 class="text-primary">Mobile</h5>
                            <p class="mb-0">00962797155813</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary" style="width: 50px; height: 50px;">
                            <i class="fa fa-envelope-open text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h5 class="text-primary">Email</h5>
                            <p class="mb-0">Ramezalrijjal@yahoo.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <iframe class="iframe" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d114860.45606770055!2d35.89252114349909!3d32.537943764842126!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sar!2sjo!4v1691609478798!5m2!1sar!2sjo" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-lg-4 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
                    <form method="post" action="{{route('contact.insert')}}">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" name=" Name" class="form-control" id="name" placeholder="Your Name">
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" name=" Email" class="form-control" id="email" placeholder="Your Email">
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" name="Subject" class="form-control" id="subject" placeholder="Subject">
                                    <label for="subject">Subject</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" name="Message" placeholder="Leave a message here" id="message" style="height: 100px"></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Company</h4>
                    <a class="btn btn-link" href="">About Us</a>
                    <a class="btn btn-link" href="">Contact Us</a>
                    <a class="btn btn-link" href="">Privacy Policy</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="">FAQs & Help</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Contact</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Al Hashemi Street. Irbid. Jordan</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>00962797155813</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>Ramezalrijjal@yahoo.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Gallery</h4>
                    <div class="row g-2 pt-2">
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="../travel-agency-html-template/img/Agricultural Tourism/andreas-weilguny-vGHQ8yt8lhY-unsplash.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="../travel-agency-html-template/img/Agricultural Tourism/chittima-stanmore-PtQM-Iv8Cnc-unsplash.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="../travel-agency-html-template/img/desert-4954346_1280.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="../travel-agency-html-template/img/Agricultural Tourism/markus-spiske-1zYB6H7scJw-unsplash (1).jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="../travel-agency-html-template/img/mohammed-darayseh-yLkmeQ2mi5c-unsplash.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="../travel-agency-html-template/img/Agricultural Tourism/natalia-arkusha-tOm17s3YbFc-unsplash.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Newsletter</h4>
                    <p>The latest updates can be found here</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control border-primary w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">Shmlat</a>, All Right Reserved.

                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed By Ramez <a class="border-bottom" href="https://htmlcodex.com"></a>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <a href="">Home</a>
                            <a href="">Cookies</a>
                            <a href="">Help</a>
                            <a href="">FQAs</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
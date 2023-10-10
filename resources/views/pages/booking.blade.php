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
    <link href="{{ asset('booking/style.css') }}" rel="stylesheet">
 
  
    <link rel="stylesheet" href="booking.css">
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
            <!-- <div class="container py-5"> -->
                <div class="row justify-content-center py-5">
                    <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                        <h1 class="display-3 text-white animated slideInDown">Booking</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                                <li class="breadcrumb-item text-white active" aria-current="page">Booking</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            <!-- </div> -->
        </div>
    </div>
    <!-- Navbar & Hero End -->
 
    <!DOCTYPE html>
<html>
<head>
    <title> booking  </title>
    <script>
        function redirectToPayment() {
            // يمكنك استبدال "payment_page.html" برابط الصفحة الخاصة بالدفع
            window.location.href = "payment_options.html";
        }
    </script>
    
</head>
<body>
    <!-- <div class="container">
        <div class="form-container">
            <h2>Book Your Exceptional Tourist Experience</h2>
            <p>Please fill out the form below to book your exceptional tourist experience. We will get in touch with you to confirm the details and make the necessary arrangements. We look forward to serving you and providing an unforgettable tourist experience. We will respond to you as soon as possible to confirm the booking and provide further details.</p>
            
            <form action="process_booking.php" method="POST">
                <label for="tripName">Tour Name:</label>
                <input type="text" id="tripName" name="tripName" required>
                <label for="tripPrice">Price:</label>
                <input type="number" id="tripPrice" name="tripPrice" required>
                <label for="tripDate">Tour Date:</label>
                <input type="date" id="tripDate" name="tripDate" required>
                <label for="numAdults">Number of Adults:</label>
                <input type="number" id="numAdults" name="numAdults" required>
                <label for="numChildren">Number of Children:</label>
                <input type="number" id="numChildren" name="numChildren" required>
            </form>
        </div>
        
        <div class="form-container">
            <h2>Contact Information</h2>
            <p>If you have any inquiries or require additional assistance, please feel free to contact us using the information below. Thank you for choosing our exceptional tourist experience.</p>
            
            <form action="process_booking.php" method="POST">
                <label for="userName">Your Name:</label>
                <input type="text" id="userName" name="userName" required>
                <label for="userPhone">Phone Number:</label>
                <input type="tel" id="userPhone" name="userPhone" required>
                <label for="userEmail">Email Address:</label>
                <input type="email" id="userEmail" name="userEmail" required>
                <label for="userAddress">Address:</label>
                <textarea id="userAddress" name="userAddress" rows="4" required></textarea>
            </form>
        </div>
        
        <div class="button-container">
            <input type="submit" value="Book Tour">
        </div>
    </div> -->
    
    <!-- Process Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center pb-4 wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Process</h6>
                <h1 class="mb-5">3 Easy Steps</h1>
            </div>
            <div class="row gy-5 gx-4 justify-content-center">
                <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative border border-primary pt-5 pb-4 px-4">
                        <div class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle shadow" style="width: 100px; height: 100px;">
                            <i class="fa fa-globe fa-3x text-white"></i>
                        </div>
                        <h5 class="mt-4">Choose A Destination</h5>
                        <hr class="w-25 mx-auto bg-primary mb-1">
                        <hr class="w-50 mx-auto bg-primary mt-0">
                        <p class="mb-0">Choose your favorite destination to enjoy a unique experience like no other</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="position-relative border border-primary pt-5 pb-4 px-4">
                        <div class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle shadow" style="width: 100px; height: 100px;">
                            <i class="fa fa-dollar-sign fa-3x text-white"></i>
                        </div>
                        <h5 class="mt-4">Pay Online / Transfer to an electronic wallet</h5>
                        <hr class="w-25 mx-auto bg-primary mb-1">
                        <hr class="w-50 mx-auto bg-primary mt-0">
                        <p class="mb-0">Choose the payment method that suits you</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="position-relative border border-primary pt-5 pb-4 px-4">
                        <div class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle shadow" style="width: 100px; height: 100px;">
                            <i class="fa fa-plane fa-3x text-white"></i>
                        </div>
                        <h5 class="mt-4">Join our travels</h5>
                        <hr class="w-25 mx-auto bg-primary mb-1">
                        <hr class="w-50 mx-auto bg-primary mt-0">
                        <p class="mb-0">Experience the journey with us, to find everything you want
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Process Start -->
   

    <!-- Booking Start -->
    <div class="container">
        <div class="form-container">
            <h2>Book Your Exceptional Tourist Experience</h2>
            <p>Please fill out the form below to book your exceptional tourist experience. We will get in touch with you to confirm the details and make the necessary arrangements. We look forward to serving you and providing an unforgettable tourist experience. We will respond to you as soon as possible to confirm the booking and provide further details.</p>
            
            <form action="process_booking.php" method="POST">
                <label for="tripName">Tour Name:</label>
                <input type="text" id="tripName" name="tripName" required>
                <label for="tripPrice">Price:</label>
                <input type="number" id="tripPrice" name="tripPrice" required>
                <label for="tripDate">Tour Date:</label>
                <input type="date" id="tripDate" name="tripDate" required>
                <label for="numAdults">Number of Adults:</label>
                <input type="number" id="numAdults" name="numAdults" required>
                <!-- <label for="numChildren">Number of Children:</label>
                <input type="number" id="numChildren" name="numChildren" required> -->
            </form>
        </div>
        
        <div class="form-container">
            <h2>Contact Information</h2>
            <p>If you have any inquiries or require additional assistance, please feel free to contact us using the information below. Thank you for choosing our exceptional tourist experience.</p>
            
            <form action="process_booking.php" method="POST">
                <label for="userName">Your Name:</label>
                <input type="text" id="userName" name="userName" required>
                <label for="userPhone">Phone Number:</label>
                <input type="tel" id="userPhone" name="userPhone" required>
                <label for="userEmail">Email Address:</label>
                <input type="email" id="userEmail" name="userEmail" required>
                <label for="userAddress">Address:</label>
                <textarea id="userAddress" name="userAddress" rows="4" required></textarea>
            </form>
        </div>
        
        <div class="button-container">
            <!-- <input type="submit" value="Book Tour"> -->
            <button type="button" class="btn btn-primary" onclick="redirectToPayment()">Book Tour</button>
        </div>
    </div>

    <script>
        function redirectToPayment() {
            const tripName = document.getElementById("tripName").value;
            const tripPrice = document.getElementById("tripPrice").value;
            const tripDate = document.getElementById("tripDate").value;
            const numAdults = document.getElementById("numAdults").value;
            const userName = document.getElementById("userName").value;
            const userPhone = document.getElementById("userPhone").value;
            const userEmail = document.getElementById("userEmail").value;
            const userAddress = document.getElementById("userAddress").value;

            if (tripName && tripPrice && tripDate && numAdults && userName && userPhone && userEmail && userAddress) {
                window.location.href = "payment_options.html";
            } else {
                alert("Please fill out all required fields.");
            }
        }
    </script>
    <!-- <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="booking p-5">
                <div class="row g-5 align-items-center">
                    <div class="col-md-6 text-white">
                        <h6 class="text-white text-uppercase">Booking</h6>
                        <h1 class="text-white mb-4">Online Booking</h1>
                        <p class="mb-4">
                            "Please fill out the form below to book your exceptional tourist experience. We will get in touch with you to confirm the details and make the necessary arrangements.
                            
                            We look forward to serving you and providing an unforgettable tourist experience. We will respond to you as soon as possible to confirm the booking and provide further details.</p>
                        <p class="mb-4">Please feel free to contact us if you have any inquiries or require additional assistance.

                            Thank you for choosing our tourist experience!</p>
                        <a class="btn btn-outline-light py-3 px-5 mt-2" href="">Read More</a>
                    </div>
                    <div class="col-md-6">
                        <h1 class="text-white mb-4">Book A Tour</h1>
                        <form>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control bg-transparent" id="name" placeholder="Your Name">
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control bg-transparent" id="email" placeholder="Your Email">
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating date" id="date3" data-target-input="nearest">
                                        <input type="text" class="form-control bg-transparent datetimepicker-input" id="datetime" placeholder="Date & Time" data-target="#date3" data-toggle="datetimepicker" />
                                        <label for="datetime">Date & Time</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <select class="form-select bg-transparent" id="select1">
                                            <option value="1">Destination 1</option>
                                            <option value="2">Destination 2</option>
                                            <option value="3">Destination 3</option>
                                        </select>
                                        <label for="select1">Destination</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control bg-transparent" placeholder="Special Request" id="message" style="height: 100px"></textarea>
                                        <label for="message">Special Request</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-outline-light w-100 py-3" type="submit">Book Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Booking Start -->
 
    <!-- Footer Start -->
    <!-- <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
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
                            <img class="img-fluid bg-light p-1" src="../travel-agency-html-template/img/chijui-yeh-zrUAX7Qbg-g-unsplash.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="../travel-agency-html-template/img/222.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="../travel-agency-html-template/img/desert-4954346_1280.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="../travel-agency-html-template/img/food.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="../travel-agency-html-template/img/mohammed-darayseh-yLkmeQ2mi5c-unsplash.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="../travel-agency-html-template/img/path-18197_1280.jpg" alt="">
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
                        &copy; <a class="border-bottom" href="#">shamlat</a>, All Right Reserved.
                        Designed By Ramez<a class="border-bottom" href="https://htmlcodex.com"></a>
                      </*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                         <!-- <a class="border-bottom" href="https://htmlcodex.com"></a>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <a href="">Home</a>
                            <a href="">Cookies</a>
                            <a href="">Help</a>
                            <a href="">FQAs</a> -->
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
    <script>
        // function redirectToPayment() {
       
        //     window.location.href = "payment_page.html";
        // }
        
    function redirectToPaymentOptions() {
        window.location.href = "payment_options.html";
    }


    </script>
</body>

</html>
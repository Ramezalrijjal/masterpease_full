<!DOCTYPE html>
<html>
<head>
    <title>Previous Trips</title>
    <link rel="stylesheet" type="text/css" href="trips.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
</head>
<body>
   
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
                    <a href="index.html" class="nav-item nav-link active">Home</a>
                    <a href="about.html" class="nav-item nav-link">About</a>
                    <a href="service.html" class="nav-item nav-link">Services</a>
                    <a href="package.html" class="nav-item nav-link">Packages</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu m-0">
                            <a href="destination.html" class="dropdown-item">Destination</a>
                            <a href="booking.html" class="dropdown-item">Booking</a>
                            <a href="team.html" class="dropdown-item">Travel Guides</a>
                            <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                            <a href="profile.html" class="dropdown-item">profile</a>
                            <a href="trips.html" class="dropdown-item">trips</a>
                        </div>
                    </div>
                    <a href="contact.html" class="nav-item nav-link">Contact</a>
                </div>
                <a href="login.html" class="btn btn-primary rounded-pill py-2 px-4">Register</a>
            </div>
        </nav>
    <header>
        <h1>Previous Trips</h1>
    </header>
    <div class="trip-container">
        <div class="trip">
            <img src="../travel-agency-html-template/img/chijui-yeh-zrUAX7Qbg-g-unsplash.jpg" alt="Trip 1">
            <h2>Beach Paradise Getaway</h2>
            <p>Date: May 15, 2023</p>
            <p>Duration: 5 days</p>
            <p>Destination: Sun Coast Resort</p>
            <p>Highlights: Relaxing on the sandy beaches, snorkeling, beach volleyball</p>
            <p>Rating: 4.5/5</p>
            <p>Price: $1200</p>
        </div>
        <div class="trip">
            <img src="../travel-agency-html-template/img/path-18197_1280.jpg" alt="Trip 2">
            <h2>Mountain Adventure Retreat</h2>
            <p>Date: September 22, 2023</p>
            <p>Duration: 3 days</p>
            <p>Destination: Pine Peak Lodge</p>
            <p>Highlights: Hiking through scenic trails, campfire nights, stargazing</p>
            <p>Rating: 4.8/5</p>
            <p>Price: $900</p>
        </div>
        <!-- Add more trips here -->
    </div>
    <div class="buttons">
        <a class="main-button" href="index.html">Back to home bage</a>
        <button class="close-button" onclick="closeWebsite()">Close Website</button>
    </div>
</body>
</html>

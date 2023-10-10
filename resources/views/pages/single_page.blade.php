<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Tourist - Travel Agency HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }
    h1 {
            color: #33a821ce;
            margin-bottom: 20px;
        }
    .header {
      /* background-color: #007bff; */
      color: white;
      text-align: center;
      padding: 10px;
    }
    .container {
      max-width: 800px;
      margin: 0 auto;
      padding: 20px;
    }
    .gallery {
      display: flex;
      justify-content: center;
      align-items: center;
      flex-wrap: wrap;
      margin-top: 20px;
    }
    .gallery img {
      width: 200px;
      height: 150px;
      margin: 5px;
    }
    .details {
      margin-top: 20px;
      text-align: center;
    }
    .btn {
      background-color: #31d547;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      margin: 10px;
      text-decoration: none;
      cursor: pointer;
    }
    .rege{
            border-style: solid;
            border-width: 4px;
            text-decoration: none;
            border-radius: 50px;
            color: #298b2a;
            background-color: #93ea94;
            padding: 5px;
        }
    .hero-header {
      background: url('path-to-your-image.jpg') no-repeat center;
      background-size: cover;
    }
  </style>
</head>
<body>
  
     <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
      <a href="" class="navbar-brand p-0">
          <h1 ><i ></i>SHMLAT</h1>
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

            <div class="row">
                <div class="row justify-content-center py-5">
                    <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                        <h1 class="display-3 text-white animated slideInDown">details of the trip</h1>
                        <nav aria-label="breadcrumb">
                            <!-- <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                                <li class="breadcrumb-item text-white active" aria-current="page">details of the trip</li>
                            </ol> -->
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
  <div class="header">
    
  </div>
  <div class="container">
    <div class="gallery">
      <img src="../travel-agency-html-template/img/path-18197_1280.jpg" alt=" 1">
      <img src="../travel-agency-html-template/img/swietokrzyskie-mountains-2842785_1280.jpg" alt=" 2">
      <img src="../travel-agency-html-template/img/zipline-168019_1280.jpg" alt=" 3">
      <img src="../travel-agency-html-template/img/zipline-168019_1280.jpg" alt=" 3">
      <img src="../travel-agency-html-template/img/zipline-168019_1280.jpg" alt=" 3">
      <img src="../travel-agency-html-template/img/zipline-168019_1280.jpg" alt=" 3">
    </div>
    <div class="details">
      <h2>jarash</h2>
      <p>    From golden sandy beaches to towering mountains, our region offers a diverse range of places and activities to cater to all your interests."</p>
      <p>12.00 jd</p>
      <p>Trip Dates: From January 1st to January 10th, 2024</p>
      <a href="index.html" class="btn">Back to Homepage </a>
      <a href="booking.html" class="btn"> Booknow</a>
    </div>
  </div>
</body>
</html>

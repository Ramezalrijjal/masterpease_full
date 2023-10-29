<!DOCTYPE html>
<html>
<head>
    <title>Agricultural Tourism - Tours</title>
    
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
   background-image: url(../travel-agency-html-template/img/ries-bosch-jMgXJ_cGA4k-unsplash.jpg);
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
    margin: 0;
    padding: 0;
        }
        .container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
        }
        h1 {
            color: #33a821ce;
            margin-bottom: 20px;
            text-align: center;
        }
        h2 {
            color: #33a821ce;
            margin-bottom: 20px;
        }
        .tour-card {
            display: flex;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .tour-image {
            flex: 1;
            max-width: 300px;
            height: 310px;
        }
        .tour-details {
            flex: 2;
            padding: 20px;
        }
        .tour-title {
            font-size: 24px;
            margin-bottom: 10px;
            color: #000;
        }
        .tour-description {
            color: #fff;
            margin-bottom: 10px;
        }
        .tour-price {
            font-size: 18px;
            color: #fff;
            margin-bottom: 10px;
        }
        .tour-button {
            display: inline-block;
            background-color: #33a821ce;
            color: #fff;
            padding: 8px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
            text-decoration: none;
        }
        .tour-button:hover {
            background-color: #298b2a;
        }
        .home-button {
    display: inline-block;
    margin-top: 20px auto ;
    
    padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    border: 2px solid #007bff; 
    border-radius: 5px;
    font-size: 18px;
    text-align: center;
    text-decoration: none;
    transition: background-color 0.3s ease;
}
.home-button:hover {
    background-color: #0056b3;
}


        .reg{color: #298b2a;
        text-decoration: none;
        border: 2px solid #298b2a;
  border-radius: 12px;
  padding: 5px;}
    </style>
</head>
<body>
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
            <a href="" class="navbar-brand p-0">
                <h1 class="rega"><i class="fa fa-map-marker-alt me-3"></i>SHMLAT</h1>
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
    <div class="container">
        <h1>Agricultural Tourism - Tours</h1>
        <h2>The magic of agritourism: an experience close to nature and rural life:</h2>

        <div class="row">
            <div class="col-md-6">
                {{-- <div class="tour-card">
                    <img src="../travel-agency-html-template/img/Agricultural Tourism/andreas-weilguny-vGHQ8yt8lhY-unsplash.jpg" alt="Tour 1" class="tour-image">
                    <div class="tour-details">
                        <h2 class="tour-title">Organic Farm Experience</h2>
                        <p class="tour-description">Explore our lush organic farm and learn about sustainable agriculture practices. Enjoy hands-on activities and fresh produce.</p>
                        <p class="tour-price">$50 per person</p>
                        <a href="single_page.html" class="tour-button">Book Now</a>
                    </div>
                </div> --}}


                <!-- resources/views/tours/index.blade.php -->

@foreach ($pages as $Agricultural )
<div class="tour-card">
    <img src="{{ $services->image }}" alt="Tour {{ $tour->id }}" class="tour-image">
    <div class="tour-details">
        <h2 class="tour-title">{{ $services->title }}</h2>
        <p class="tour-description">{{ $services->description }}</p>
        <p class="tour-price">${{ $services->price }} per person</p>
        <a href="single_page.html" class="tour-button">Book Now</a>
    </div>
</div>
@endforeach

            </div>
            <div class="col-md-6">
                <div class="tour-card">
                    <img src="../travel-agency-html-template/img/Agricultural Tourism/chittima-stanmore-PtQM-Iv8Cnc-unsplash.jpg" alt="Tour 2" class="tour-image">
                    <div class="tour-details">
                        <h2 class="tour-title">Vineyard Tour and Wine Tasting</h2>
                        <p class="tour-description">Discover our scenic vineyard and indulge in a wine tasting experience. Learn about the wine-making process from our experts.</p>
                        <p class="tour-price">$75 per person</p>
                        <a href="single_page.html" class="tour-button">Book Now</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="tour-card">
                    <img src="../travel-agency-html-template/img/Agricultural Tourism/evangelos-mpikakis-2ieJFbTwBhU-unsplash.jpg" alt="Tour 3" class="tour-image">
                    <div class="tour-details">
                        <h2 class="tour-title">Rustic Meal Experience</h2>
                        <p class="tour-description">Embark on the experience of harvesting and enjoying a rustic meal, transporting you back in time to traditional settings.</p>
                        <p class="tour-price">$50 per person</p>
                        <a href="single_page.html" class="tour-button">Book Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="tour-card">
                    <img src="../travel-agency-html-template/img/Agricultural Tourism/maksym-kaharlytskyi-u3rIzY-wv5M-unsplash.jpg" alt="Tour 4" class="tour-image">
                    <div class="tour-details">
                        <h2 class="tour-title">Farm-to-Table Culinary Tour</h2>
                        <p class="tour-description">Experience the farm-to-table journey as you explore our farm and learn to prepare fresh, delicious meals with our chefs.</p>
                        <p class="tour-price">$60 per person</p>
                        <a href="single_page.html" class="tour-button">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a href="index.html" class="home-button">Back to Home</a>

 
</body>
</html>

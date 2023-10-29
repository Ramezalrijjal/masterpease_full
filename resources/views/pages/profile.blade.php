<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="profile.css">
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
    <div class="container">
        <div class="profile-card">
            <div class="text-center">
                <img class="profile-img" id="profileImage" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg" alt="Profile Image">
                <div class="profile-name">Edogaru</div>
                <div class="email">edogaru@mail.com.my</div>
                
                <input type="file" id="imageInput" accept="image/*" style="margin-top: 20px;">
            </div>
            
            <div class="row">
                <div class="col-md-6">
                    <label class="labels">Name</label>
                    <input type="text" class="form-control" placeholder="First Name" value="">
                </div>
                <div class="col-md-6">
                    <label class="labels">Surname</label>
                    <input type="text" class="form-control" placeholder="Surname" value="">
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <label class="labels">Mobile Number</label>
                    <input type="text" class="form-control" placeholder="Enter phone number" value="">
                </div>
                <div class="col-md-6">
                    <label class="labels">Email ID</label>
                    <input type="text" class="form-control" placeholder="Enter email id" value="">
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <label class="labels">Address Line 1</label>
                    <input type="text" class="form-control" placeholder="Enter address line 1" value="">
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <label class="labels">Address Line 2</label>
                    <input type="text" class="form-control" placeholder="Enter address line 2" value="">
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <label class="labels">Postcode</label>
                    <input type="text" class="form-control" placeholder="Enter postcode" value="">
                </div>
                <div class="col-md-6">
                    <label class="labels">State</label>
                    <input type="text" class="form-control" placeholder="Enter state" value="">
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <label class="labels">Country</label>
                    <input type="text" class="form-control" placeholder="Enter country" value="">
                </div>
                <div class="col-md-6">
                    <label class="labels">State/Region</label>
                    <input type="text" class="form-control" placeholder="Enter state/region" value="">
                </div>
            </div>

            <div class="mt-5 text-center">
                <button class="btn btn-primary profile-button" type="button">Save Profile</button>
                <a href="index.html" class="back-button">Back to Home</a>

            </div>
        </div>
    </div>

    <script>
        const imageInput = document.getElementById('imageInput');
        const profileImage = document.getElementById('profileImage');

        imageInput.addEventListener('change', function(event) {
            const selectedFile = event.target.files[0];
            if (selectedFile) {
                const imageUrl = URL.createObjectURL(selectedFile);
                profileImage.src = imageUrl;
            }
        });
    </script>
</body>
</html>
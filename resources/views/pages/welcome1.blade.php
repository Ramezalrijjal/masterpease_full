<!DOCTYPE html>
<html>
<head>
    <title>Welcome Page</title>
    <link rel="stylesheet" href="{{ asset('css/welcome1.css') }}">
   
</head>
<body>
    <div class="container">
        <h1>Welcome to Our Website!</h1>
        <p>We're excited to have you here. Explore our amazing tourist experiences and book your next adventure.</p>
        <p>See you soon.</p>
        <br><br>
        <p id="note">Please confirm your reservation within 48 hours, or it will be canceled</p>
        <button class="button" onclick="confirmReservation()">Confirm</button>
        <div id="confirmationMessage" style="display: none;">
            <p id="reservation">Your reservation has been confirmed!</p>
          
        </div>
    </div>

    <script>
        function confirmReservation() {
            var confirmationMessage = document.getElementById("confirmationMessage");
            confirmationMessage.style.display = "block";
            setTimeout(function() {
                window.location.href = "trips.html"; 
            }, 5000); 
        }
    </script>
</body>
</html>

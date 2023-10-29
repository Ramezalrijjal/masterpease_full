<!DOCTYPE html>
<html>
<head>
    <title>Payment Options</title>
   
   <link rel="stylesheet" href="{{ asset('css/payment_options.css') }}" >
  
</head>
<body>
    <div class="container">
        <h1>Select Payment Method</h1>
        <p>Choose a payment method:</p>
        <ul>
            <li>
                {{-- <img src="../travel-agency-html-template/img/إدارة-مكتب.jpg" alt="Pay at Office"> --}}
                <img src="{{ asset('assets/img/إدارة-مكتب.jpg') }}" alt="Pay at Office">
                
                <a href="{{route('welcome1')}}">Pay at Office</a>

            </li>
            <li>
                {{-- <img src="../travel-agency-html-template/img/Old_Visa_Logo.svg.png" alt="Pay with Visa"> --}}
                <img src="{{ asset('assets/img/Old_Visa_Logo.svg.png') }}" alt="Pay with Visa">

                <a href="{{ route('payment1')}}">Pay with Visa</a>
            </li>
            {{-- <li>
                <img src="../travel-agency-html-template/img/manage-money-main--split--paypal-cash-card--ratio=1-1--for=all_v2.png" alt="Pay with PayPal">
                <a href="payment.html">Pay with PayPal</a>
            </li> --}}
        </ul>
    </div>
</body>
</html>

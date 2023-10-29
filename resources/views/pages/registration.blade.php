<!-- <!DOCTYPE html>
<html>
<head>
    <title>Registration page </title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background: #f1f1f1;
        }

        .register-container {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 400px;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .register-container h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        .register-form label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        .register-form input[type="text"],
        .register-form input[type="email"],
        .register-form input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .register-form button {
            width: 100%;
            padding: 10px;
            background: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .register-form button:hover {
            background: #0056b3;
        }

        .social-buttons {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        .social-buttons button {
            width: 30%;
            padding: 10px;
            background: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .social-buttons button:hover {
            background: #0056b3;
        }

        .login-link {
            text-align: center;
            margin-top: 10px;
        }

        .login-link a {
            color: #007bff;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="register-container">
        <h1>Create a new account  </h1>
        <form class="register-form">
            <label for="fullname"> fullname:</label>
            <input type="text" id="fullname" name="fullname">
            <label for="email"> email:</label>
            <input type="email" id="email" name="email">
            <label for="username">username :</label>
            <input type="text" id="username" name="username">
            <label for="password">password :</label>
            <input type="password" id="password" name="password">
            
            <button type="button" onclick="register()">registration</button>
        </form>
        <div class="social-buttons">
            <button onclick="registerWithFacebook()">Facebook</button>
            <button onclick="registerWithTwitter()">Twitter</button>
            <button onclick="registerWithGoogle()">Google</button>
        </div>
        <div class="login-link">
            <p>Do you already have an account?
                <a href="login.html"> sign in</a></p>
        </div>
    </div>

    <script>
        function register() {
            // تنفيذ التحقق من تفاصيل التسجيل وإنشاء حساب جديد
            alert("Account successfully created!");
            window.location.href = "login.html";
        }

        function registerWithFacebook() {
            // اتخذ الإجراءات المناسبة لتسجيل الدخول باستخدام Facebook
            alert(' Your account was created with Facebook');
            window.location.href = "login.html";
        }

        function registerWithTwitter() {
            // اتخذ الإجراءات المناسبة لتسجيل الدخول باستخدام Twitter
            alert('Your account was created using Twitter');
            window.location.href = "login.html";
        }

        function registerWithGoogle() {
            // اتخذ الإجراءات المناسبة لتسجيل الدخول باستخدام Google
            alert('Your account was created with Google');
            window.location.href = "login.html";
        }
    </script>
</body>
</html> -->

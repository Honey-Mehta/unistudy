<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unistudy Login</title>
    
    <!-- Favicon -->
    <link rel="icon" href="path/to/favicon.ico" type="image/x-icon">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .signup-container {
            background-color: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 50%;
        }
        .signup-container h1 {
            text-align: center;
            color: #333;
            margin-bottom: 1.5rem;
        }
        .input-container {
            position: relative;
            width: 100%;
        }
        .signup-container input[type="text"],
        .signup-container input[type="email"],
        .signup-container input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        .eye-icon {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            color: #333;
            opacity: 0.7;
        }
        .eye-icon:hover {
            opacity: 1;
        }
        .signup-container button {
            width: 100%;
            padding: 10px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        .signup-container button:hover {
            background-color: #218838;
        }
        .signup-container .links {
            text-align: center;
            margin-top: 1rem;
        }
        .signup-container .links a {
            color: #007bff;
            text-decoration: none;
        }
        .signup-container .links a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="signup-container">
        <h1>Signup</h1>
        <form method="post" id="signup">
            <div class="input-container">
                <input type="text" name="first_name" placeholder="Please Enter Your First Name" required>
            </div>
            <div class="input-container">
                <input type="text" name="last_name" placeholder="Please Enter Your Last Name" required>
            </div>
            <div class="input-container">
                <input type="email" name="email" placeholder="Please Enter Your Email" required>
            </div>
            <div class="input-container">   
                <select id="countryCode" name="countrycode" style="width:20%; box-sizing: border-box;border-radius: 5px; margin: 8px 0;padding: 10px;">
                    <option value="+1">United States (+1)</option>
                    <option value="+44">United Kingdom (+44)</option>
                    <option value="+91">India (+91)</option>
                    <option value="+61">Australia (+61)</option>
                    <!-- Add other countries -->
                </select>
                <input type="tel" id="phoneNumber" name="mobile_number" placeholder="Enter phone number" required style="width:79%; box-sizing: border-box;border-radius: 5px; margin: 8px 0;padding: 10px;">
            </div>
            <div class="input-container">
                <input type="password" id="password" name="password" placeholder="Password">
                <i class="fas fa-eye eye-icon" id="togglePassword" onclick="togglePassword()"></i>
            </div>
            <button type="submit">Signup</button>
        </form>
        <div id="message_login"></div>
        <div class="links">
            <a href="#">Forgot Password?</a><br>
            <a href="#">Create an Account</a>
        </div>
    </div>

    <script>
        function togglePassword() {
            const passwordField = document.getElementById('password');
            const toggleIcon = document.getElementById('togglePassword');
            if (passwordField.type === 'password') {
                passwordField.type = 'text';
                toggleIcon.classList.remove('fa-eye');
                toggleIcon.classList.add('fa-eye-slash');
            } else {
                passwordField.type = 'password';
                toggleIcon.classList.remove('fa-eye-slash');
                toggleIcon.classList.add('fa-eye');
            }
        }
    </script>

    <script>
        $(document).ready(function(abcabn) {
            $("#signup").on('submit', function(abcabn) {
                abcabn.preventDefault();
                $.ajax({
                    url: "php/insert.php",
                    type: "POST",
                    data: new FormData(this),
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(data) {
                        
                        $("#message_login").html(data);
                    },
                    error: function() {
                        Swal.fire({
                            title: 'Error!',
                            text: 'There was a problem with the signup. Please try again later.',
                            icon: 'error',
                            confirmButtonText: 'OK'
                        });
                    }
                });
            });
        });
    </script>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UniStudy</title>
    <link rel="stylesheet" href="styles.css">
    <style>
    /* Basic Reset */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Body Styling */
body {
    font-family: Arial, sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-color: #f0f2f5;
}

/* Container Styling */
.login-container {
    width: 100%;
    max-width: 400px;
    background-color: #fff;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
}

/* Form Styling */
.login-form h2 {
    text-align: center;
    margin-bottom: 20px;
}

.input-group {
    margin-bottom: 15px;
}

.input-group label {
    display: block;
    margin-bottom: 5px;
}

.input-group input {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
}

/* Button Styling */
button {
    width: 100%;
    padding: 10px;
    border: none;
    background-color: #007bff;
    color: white;
    font-size: 16px;
    border-radius: 5px;
    cursor: pointer;
}

button:hover {
    background-color: #0056b3;
}

/* Responsive Styling */
@media (max-width: 600px) {
    .login-container {
        padding: 15px;
    }

    .input-group input, button {
        padding: 15px;
    }
}

    </style>
</head>
<body>
    <div class="login-container">
        <form class="login-form"  id="login" method="post">
            <h2>UniStudy Login</h2>
            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="email" required>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button>Login</button>
            <div class="input-group mb-0" id="message_login">
				
			</div>
        </form>
    </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>




</body>
</html>


<script>
$(document).ready(function(abcabn) {
$("#login").on('submit', (function(abcabn) {
    abcabn.preventDefault();
    $.ajax({
        url: "php/login.php",
        type: "POST",
        data: new FormData(this),
        contentType: false,
        cache: false,
        processData: false,
        success: function(data) {
            $("#message_login").html(data);
        },
        error: function() {}
    });

}));
});
</script>

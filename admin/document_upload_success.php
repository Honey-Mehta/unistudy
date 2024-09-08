<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document Upload Success</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        #successMessage {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: #155724;
            padding: 20px;
            border: 1px solid #c3e6cb;
            border-radius: 10px;
            z-index: 9999;
            text-align: center;
            font-size: 20px;
            background-color: #d4edda;
        }
        #closeButton {
            margin-top: 15px;
            font-size: 16px;
        }
    </style>
</head>
<body>

<div id="successMessage">
    Document Uploaded Successfully!
    <br>
    <button id="closeButton" class="btn btn-success" onclick="redirectToHome()">Close</button>
</div>

<script>
function redirectToHome() {
    window.location.href = 'https://mail.google.com/mail/u/0/#inbox'; // Change 'index.html' to your home page URL
}
</script>

</body>
</html>

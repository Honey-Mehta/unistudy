<?php
function getRegistrationSuccessEmailBody($firstName) {
    return "
    <html>
    <head>
        <style>
            .email-container {
                font-family: Arial, sans-serif;
                color: #333;
                background-color: #f4f4f4;
                padding: 20px;
            }
            .email-header {
                background-color: #4CAF50;
                color: white;
                padding: 10px;
                text-align: center;
            }
            .email-body {
                background-color: white;
                padding: 20px;
                border-radius: 5px;
                box-shadow: 0 0 10px rgba(0,0,0,0.1);
            }
            .email-footer {
                text-align: center;
                padding: 10px;
                color: #777;
                font-size: 12px;
            }
            .button {
                display: inline-block;
                padding: 10px 20px;
                margin: 20px 0;
                font-size: 16px;
                color: white;
                background-color: #4CAF50;
                text-decoration: none;
                border-radius: 5px;
            }
        </style>
    </head>
    <body>
        <div class='email-container'>
            <div class='email-header'>
                <h1>Uni-Study Registration Successful</h1>
            </div>
            <div class='email-body'>
                <p>Dear $firstName,</p>
                <p>Thank you for registering with Uni-Study! We are excited to have you on board.</p>
                <p>Here are some resources to get you started:</p>
                <ul>
                    <li><a href='#'>Your Dashboard</a></li>
                    <li><a href='#'>Support</a></li>
                    <li><a href='#'>Contact Us</a></li>
                      <li><a href='upload_documents.php?edit=<?php echo $last_id; ?>'>Please Upload Your Documents here</a></li>
                </ul>
                <a class='button' href='#'>Go to Dashboard</a>
                <p>Best regards,<br>Uni-Study Team</p>
            </div>
            <div class='email-footer'>
                <p>&copy; 2024 Uni-Study. All rights reserved.</p>
            </div>
        </div>
    </body>
    </html>
    ";
}
?>
<?php  
include('./mail.php');
include('../common/config.php');
include('./email_template.php'); 

// Start the session (if not already started)
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Extract POST data safely
$student = mysqli_real_escape_string($conn, $_POST['student']);
$programlevel = mysqli_real_escape_string($conn, $_POST['programlevel']);
$universityname = mysqli_real_escape_string($conn, $_POST['universityname']);

// Check if an application already exists for this student, program level, and university
$check_sql = "SELECT * FROM create_application 
              WHERE student_name = '$student'";

$check_result = mysqli_query($conn, $check_sql);

if (mysqli_num_rows($check_result) > 0) {
    // Application already exists
    echo '<script>
        Swal.fire({
            title: "Application Already Registered",
            text: "An application with these details already exists.",
            icon: "warning",
            timer: 5000,
            timerProgressBar: true,
            willClose: () => {
                window.location.href = "programs_and_schools.php";
            }
        });
    </script>';
} else {
    // Insert into create_application table
    $sql = "INSERT INTO create_application (student_name, program_level, university_name) 
            VALUES ('$student', '$programlevel', '$universityname')";

    $us = mysqli_query($conn, $sql);

    if ($us) {
        // Get the last inserted ID
        $last_id = mysqli_insert_id($conn);

        // Fetch student data
        $fetch = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM student WHERE id='$student'"));

        if ($fetch) {
            $email = $fetch['email'];
            $firstName = $fetch['first_name'];

            // Send the email
            $to = $email;
            $toName = 'Uni-Study';
            $subject = 'Uni-Study';
            $body = getRegistrationSuccessEmailBody($firstName, $last_id); 
            sendEmail($to, $toName, $subject, $body);

            // Success message and redirection
            echo '<script>
                document.getElementById("loader").style.display = "block";
                setTimeout(function(){
                    document.getElementById("loader").style.display = "none";
                    Swal.fire({
                        title: "Application Created Successfully!",
                        text: "Application Created Successfully...",
                        icon: "success",
                        timer: 7000,
                        timerProgressBar: true,
                        willClose: () => {
                           window.location.href = "show_application.php?student=' . urlencode($student) . '&programlevel=' . urlencode($programlevel) . '&universityname=' . urlencode($universityname) . '";
                        }
                    });
                }, 2000);
            </script>';
        } else {
            echo '<div class="alert alert-danger">
                <strong>Error: </strong> Could not fetch student data.
            </div>';
        }
    } else {
        // Handle the error and show a message
        echo '<div class="alert alert-danger">
            <strong>Registration Failed: </strong>' . mysqli_error($conn) . '
        </div>';
    }
}
?>

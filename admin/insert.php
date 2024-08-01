<?php 
include('./mail.php');
include('./common/config.php');
include('./email_template.php'); 

extract($_POST);
$country_of_interest = implode(",", $country_of_interest);
$service_of_interest = implode(",", $service_of_interest);
$student_created_date = date("Y-m-d h:i:sa");

// Check if the email is already registered
$email_check_query = "SELECT * FROM student WHERE email = '$email' or mobile_number='$mobile_number'";
$email_check_result = mysqli_query($conn, $email_check_query);

if (mysqli_num_rows($email_check_result) > 0) {
    echo '<div class="alert alert-danger" style="">
    <button type="button" class="close" data-dismiss="alert" style="margin-left: 5px"> x </button>
    <strong> Student already registered </strong></div>';
} else {
    $sql = "INSERT INTO student (first_name, last_name, middle_name, dob, country, passport_num, passport_expiry_date, gender, email, status, referall_source, country_of_interest, service_of_interest, mobile_number, student_created_date) VALUES ('$first_name', '$last_name', '$middle_name', '$dob', '$country', '$passport_num', '$passport_expiry_date', '$gender', '$email', '$status', '$referall_source', '$country_of_interest', '$service_of_interest', '$mobile_number', '$student_created_date')";
    $us = mysqli_query($conn, $sql);

    if ($us) {
        $last_id = mysqli_insert_id($conn);

        $to = $email;
        $toName = 'Uni-Study';
        $subject = 'Uni-Study';
        $body = getRegistrationSuccessEmailBody($first_name, $last_id); 

        sendEmail($to, $toName, $subject, $body);
       

        // Show loader

        echo '<script>
    document.getElementById("loader").style.display = "block";
    setTimeout(function() {
    document.getElementById("loader").style.display = "none";
        Swal.fire({
            title: "Student Registered successfully! Please check a confirmation mail is sent to your mail account",
            text: "Redirecting to students page...",
            icon: "success",
            timer: 7000,
            timerProgressBar: true,
            customClass: {
                popup: "wide-tall-swal-popup"
            },
            willClose: () => {
                window.location.href = "students.php";
            }
        });
    }, 2000); // Show SweetAlert after 2 seconds
</script>';







    } else {
        echo '<div class="alert alert-danger" style="">
        <button type="button" class="close" data-dismiss="alert" style="margin-left: 5px"> x </button>
        <strong> Registration Failed </strong></div>';
    }
}
?>

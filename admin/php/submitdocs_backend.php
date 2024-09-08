<?php
include('../../common/config.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    extract($_POST);

  //  echo "<pre>";
  //  print_r($_FILES);
  //  echo "</pre>";

    if (isset($_FILES['marriage_certificate']) && !empty($_FILES['marriage_certificate']['name']) && isset($_FILES['passport']) && !empty($_FILES['passport']['name']) && isset($_FILES['college_transcript']) && !empty($_FILES['college_transcript']['name']) && isset($_FILES['college_diploma']) && !empty($_FILES['college_diploma']['name']) && isset($_FILES['highschool_transcript']) && !empty($_FILES['highschool_transcript']['name']) && isset($_FILES['highschool_diploma']) && !empty($_FILES['highschool_diploma']['name']) && isset($_FILES['medium_of_instruction']) && !empty($_FILES['medium_of_instruction']['name'])  && isset($_FILES['resume']) && !empty($_FILES['resume']['name'])  ) {
        $marriage_certificate = $_FILES['marriage_certificate']['name'];
        $marriageCertificatePath = '../images/' . basename($marriage_certificate);
    
        $passport = $_FILES['passport']['name'];
        $passportPath = '../images/' . basename($passport);
        
        $college_transcript = $_FILES['college_transcript']['name'];
        $college_transcriptPath = '../images/' . basename($college_transcript);


          $college_diploma = $_FILES['college_diploma']['name'];
        $college_diplomaPath = '../images/' . basename($college_diploma);

         $highschool_transcript = $_FILES['highschool_transcript']['name'];
        $highschool_transcriptPath = '../images/' . basename($highschool_transcript);

             $highschool_diploma = $_FILES['highschool_diploma']['name'];
        $highschool_diplomaPath = '../images/' . basename($highschool_diploma);

      $medium_of_instruction = $_FILES['medium_of_instruction']['name'];
        $medium_of_instructionPath = '../images/' . basename($medium_of_instruction);

        $resume = $_FILES['resume']['name'];
        $resumePath = '../images/' . basename($resume);


        // Check if file upload is successful
        if (move_uploaded_file($_FILES['marriage_certificate']['tmp_name'], $marriageCertificatePath) && move_uploaded_file($_FILES['passport']['tmp_name'], $passportPath)&& move_uploaded_file($_FILES['college_diploma']['tmp_name'], $college_diplomaPath)  && move_uploaded_file($_FILES['highschool_transcript']['tmp_name'], $highschool_transcriptPath) && move_uploaded_file($_FILES['highschool_diploma']['tmp_name'], $highschool_diplomaPath)  && move_uploaded_file($_FILES['medium_of_instruction']['tmp_name'], $medium_of_instructionPath) && move_uploaded_file($_FILES['resume']['tmp_name'], $resumePath)) {
            $sql = "INSERT INTO `student` (`email`,`first_name`,`last_name`,`mobile_number`,`nationality`,`region`,`address`,`city`,`postal_code`,`dob`,`marital_status`,`highest_level_of_education`,`country_of_education`,`marriage_certificate`,`image`,`college_transcript`, `college_diploma`,`highschool_transcript`,`highschool_diploma`,`medium_of_instruction`,`resume`) VALUES ('$email','$first_name','$last_name','$phone_number','$nationality','$region','$street_address','$city','$postal_code','$dob','$marital_status','$highest_level_of_education','$country_of_education','$marriage_certificate','$passport','$college_transcript','$college_diploma','$highschool_transcript','$highschool_diploma','$medium_of_instruction','$resume')";

            $insertQuery = mysqli_query($conn, $sql);

            if ($insertQuery) {
                echo '<div class="alert alert-success" role="alert">Profile updated successfully!</div>';
                echo "<script>setTimeout(function(){window.location.href='submitdocs.php';}, 2000);</script>";
            } else {
                echo '<div class="alert alert-danger" role="alert">Failed to update record: ' . mysqli_error($conn) . '</div>';
            }
        } else {
            echo '<div class="alert alert-danger" role="alert">Image upload failed.</div>';
        }
    } else {
        echo '<div class="alert alert-danger" role="alert">No file data received.</div>';
    }
} else {
    echo '<div class="alert alert-danger" role="alert">Invalid request method.</div>';
}
?>

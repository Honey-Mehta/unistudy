<?php 
include('./common/config.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    extract($_POST);


//    echo '<pre>';
// print_r($country_of_institute); 
// echo '</pre>';

// die();
    // Convert array to comma-separated string
    $country_of_institute_string = implode(",", $country_of_institute);
    $name_of_institute_string = implode(",", $name_of_institute);
    $level_of_education_string = implode(",", $level_of_education);
   $primary_language_of_instruction_string = implode(",", $primary_language_of_instruction);
   $degree_name_string = implode(",", $degree_name);
   $attended_institution_from_string = implode(",", $attended_institution_from);
   $attended_institution_to_string = implode(",", $attended_institution_to);
    // Other form processing...
  $graduated_string = implode(",", $graduated);
  $graduation_date_string = implode(",", $graduation_date);
 $certificate_awarded_string = implode(",", $certificate_awarded);



    $last_edited_date = date("Y-m-d H:i:s");

    // Handle file upload
    if (isset($_FILES['file']) && !empty($_FILES['file']['name'])) {
        $image = $_FILES['file']['name'];
        $imagePath = './images/' . basename($image);

        if (move_uploaded_file($_FILES['file']['tmp_name'], $imagePath)) {
            $sql = "UPDATE `student` 
                SET `first_name` = '$first_name', 
                    `image` = '$image', 
                    `middle_name` = '$middle_name',
                    `last_name` = '$last_name',
                    `dob` = '$dob',
                    `passport_num` = '$passport_number',
                    `passport_expiry_date` = '$passport_expiry_date',
                    `marital_status` = '$marital_status',
                    `gender` = '$gender',
                    `address` = '$address',
                    `city` = '$city',
                    `postal_code` = '$postal_code',
                    `email` = '$email',
                    `mobile_number` = '$mobile_number',
                    `country_id` = '$country_id',
                    `state_id` = '$state_id',
                    `country_of_education` = '$country_of_education',
                    `highest_level_of_education` = '$highest_level_of_education',
                    `last_edited_date` = '$last_edited_date',
                    `country_of_institution` = '$country_of_institute_string',
                    `level_of_education` = '$level_of_education_string',
                    `primary_language_of_instruction` = '$primary_language_of_instruction_string',
                    `attended_institution_from`= '$attended_institution_from_string',
                     `attended_institution_to`= '$attended_institution_to_string',
                     `degree_name`='$degree_name_string',
                    `grading_scheme` = '$grading_scheme',
                     `graduated`='$graduated_string',
                    `graduation_date`='$graduation_date_string',
                    `certificate_awarded`='$certificate_awarded_string'

                WHERE `id` = '$id'";

            $insertQuery = mysqli_query($conn, $sql);
                
            if ($insertQuery) {
                echo '<script>
                    document.getElementById("loader").style.display = "block";
                    setTimeout(function() {
                        document.getElementById("loader").style.display = "none";
                        Swal.fire({
                            title: "Profile updated successfully!",
                            text: "Redirecting to students page...",
                            icon: "success",
                            timer: 7000,
                            timerProgressBar: true,
                            willClose: () => {
                                window.location.href = "students.php";
                            }
                        });
                    }, 2000); // Show SweetAlert after 2 seconds
                </script>';
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

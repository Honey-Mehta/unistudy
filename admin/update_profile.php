<?php 
include('./common/config.php');
extract($_POST);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // echo "<pre>";
    // print_r($_FILES);
    // echo "</pre>";
    $last_edited_date=date("Y-m-d h:i:sa");
    if (isset($_FILES['file']) && !empty($_FILES['file']['name'])) {
        $image = $_FILES['file']['name'];
        $imagePath = './images/' . basename($image);

        if (move_uploaded_file($_FILES['file']['tmp_name'], $imagePath)) {
         $sql = "UPDATE `student` 
                    SET `first_name` = '$first_name', 
                        `image` = '$image',`middle_name`='$middle_name',`last_name`='$last_name',`dob`='$dob',`passport_num`='$passport_number',`passport_expiry_date`='$passport_expiry_date',`marital_status`='$marital_status',`gender`='$gender',`address`='$address',`city`='$city',`postal_code`='$postal_code',`email`='$email',`mobile_number`='$mobile_number',`country_id`='$country_id',`state_id`='$state_id',`country_of_education`='$country_of_education',`highest_level_of_education`='$highest_level_of_education',`country_of_institution`='$country_of_institute',`last_edited_date`='$last_edited_date'      WHERE `id` = '$id'";

            $insertQuery = mysqli_query($conn, $sql);
                
            if ($insertQuery) {
                echo '<div class="alert alert-success" role="alert">Profile updated successfully!</div>';
                // Show loader
        echo '<script>
        alert("Profile Updated Successfully...");
          document.getElementById("loader").style.display = "block";
       setTimeout(function() {
           window.location.href = "students.php";
       }, 5000); // 5000 milliseconds = 5 seconds
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

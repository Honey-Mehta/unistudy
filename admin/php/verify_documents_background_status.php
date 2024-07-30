<?php
include('../common/config.php');
extract($_POST);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $sql = "UPDATE `student` 
            SET `passport_status` = '$passport', 
                `marriage_certificate_status` = '$marriage_certificate',
                `college_transcript_status` = '$college_transcript',
                `college_diploma_status` = '$college_diploma',
                `highschool_transcript_status` = '$highschool_transcript',
                `highschool_diploma_status` = '$highschool_diploma',
                `medium_of_instruction_status` = '$medium_of_instruction',
                `resume_status` = '$resume'
            WHERE `id` = '$id'";

    $updateQuery = mysqli_query($conn, $sql);

    if ($updateQuery) {
        echo '<div class="alert alert-success" role="alert">Profile updated successfully!</div>';
        echo '<script>
        alert("Status updated successfully...");
      
       setTimeout(function() {
           window.location.href = "students.php";
       }, 3000); // 5000 milliseconds = 5 seconds
   </script>';
    } else {
        echo '<div class="alert alert-danger" role="alert">Failed to update record: ' . mysqli_error($conn) . '</div>';
    }
} else {
    echo '<div class="alert alert-danger" role="alert">Invalid request method.</div>';
}
?>

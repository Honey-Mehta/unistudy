<?php
include('../../common/config.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Use `extract` with caution; it's safer to access variables directly
    $student_id = $_POST['student2'] ?? null;
     print_r($student_id);
    // Ensure the student ID is available
    if (!$student_id) {
        echo '<div class="alert alert-danger" role="alert">Student ID is missing.</div>';
        exit;
    }

    // Check if the required file fields are set and not empty
    if (isset($_FILES['passport_file']) && !empty($_FILES['passport_file']['name'])) {

        // Set file paths and sanitize the file name
        $passport = basename($_FILES['passport_file']['name']);

       
        $passportPath = '../images/' . $passport;
        
        // Check if the file is a valid PDF
        $fileType = mime_content_type($_FILES['passport_file']['tmp_name']);
        if ($fileType !== 'application/pdf') {
            echo '<div class="alert alert-danger" role="alert">Only PDF files are allowed.</div>';
            exit;
        }

        // Check if file upload is successful
        if (move_uploaded_file($_FILES['passport_file']['tmp_name'], $passportPath)) {

            // Prepare SQL query to update student record
            $sql = "UPDATE `student` SET `image` = '$passport' WHERE `id` = '$student_id'";
            $updateQuery = mysqli_query($conn, $sql);

            if ($updateQuery) {
                echo '<script>
                    setTimeout(function(){
                        Swal.fire({
                            title: "Documents uploaded successfully!",
                            text: "Your marriage certificate has been successfully uploaded.",
                            icon: "success",
                            timer: 7000,
                            timerProgressBar: true,
                            willClose: () => {
                                window.location.href = "#"; // Redirect or reload as needed
                            }
                        });
                    }, 2000);
                </script>';
            } else {
                echo '<div class="alert alert-danger" role="alert">Failed to update record: ' . mysqli_error($conn) . '</div>';
            }
        } else {
            echo '<div class="alert alert-danger" role="alert">File upload failed.</div>';
        }
    } else {
        echo '<div class="alert alert-danger" role="alert">Please select a file to upload.</div>';
    }
} else {
    echo '<div class="alert alert-danger" role="alert">Invalid request method.</div>';
}
?>

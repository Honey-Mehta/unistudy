<?php
include('../../common/config.php');
extract($_POST);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $sql = "UPDATE `programs` 
            SET `university_id` = '$university_id', 
                `program` = '$program',
                `fee` = '$fee',
                `tuition_per_year_approx` = '$tuition_per_year_approx',
 `application_fees` = '$application_fees'
                
            WHERE `id` = '$id'";

    $updateQuery = mysqli_query($conn, $sql);

    if ($updateQuery) {
        // Show loader first
       
        
        echo '<script>
           document.getElementById("loader").style.display = "block";
            setTimeout(function() {
                document.getElementById("loader").style.display = "none";
            Swal.fire({
                    title: "Programs Updated successfully!",
                    text: "Redirecting to Programs page...",
                    icon: "success",
                    timer: 7000,
                    timerProgressBar: true,
                    willClose: () => {
                        window.location.href = "courses_programs.php";
                    }
                });
            }, 2000); // Show SweetAlert after 1 second
        </script>';
    } else {
        echo '<div class="alert alert-danger" role="alert">Failed to update record: ' . mysqli_error($conn) . '</div>';
    }
} else {
    echo '<div class="alert alert-danger" role="alert">Invalid request method.</div>';
}
?>

<?php
include('../../common/config.php');
extract($_POST);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  
 
 $sql = "UPDATE `acadmic_intakes` 
            SET `year` = '$year', 
                `success_score` = '$success_score',
                `intake_status` = '$intake_status',
                `submission_deadline`='$submission_deadline'
            WHERE `id` = '$id'";

  

    $updateQuery = mysqli_query($conn, $sql);

    if ($updateQuery) {
        // Show loader first
       
        
        echo '<script>
           document.getElementById("loader").style.display = "block";
            setTimeout(function() {
                document.getElementById("loader").style.display = "none";
            Swal.fire({
                    title: "Acadmic Intakes Updated Successfully!",
                    text: "Redirecting to University page...",
                    icon: "success",
                    timer: 7000,
                    timerProgressBar: true,
                    willClose: () => {
                        window.location.href = "intakes.php";
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

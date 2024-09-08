<?php
include('../../common/config.php');
extract($_POST);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $sql = "UPDATE `student` 
            SET `status` = '$status'
               
            WHERE `id` = '$id'";

    $updateQuery = mysqli_query($conn, $sql);

    if ($updateQuery) {
        // Show loader first
       
        
        echo '<script>
           document.getElementById("loader").style.display = "block";
            setTimeout(function() {
                document.getElementById("loader").style.display = "none";
            Swal.fire({
                    title:  Status changed successfully!",
                    text: "changed successfully...",
                    icon: "success",
                    timer: 7000,
                    timerProgressBar: true,
                    willClose: () => {
                        window.location.href = "students.php";
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

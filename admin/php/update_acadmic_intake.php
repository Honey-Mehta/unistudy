<?php
include('../../common/config.php');
extract($_POST);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $sql = "UPDATE `student` SET `acadmic_intake` = '$acadmic_intakes' WHERE `id` = '$student_id'";

    $updateQuery = mysqli_query($conn, $sql);

    if ($updateQuery) {
        // Return success message as part of the response
        echo '
        <script>
            document.getElementById("loader").style.display = "block";
            setTimeout(function() {
                document.getElementById("loader").style.display = "none";
                Swal.fire({
                    title: "Academic Intake updated Successfully!",
                    text: "",
                    icon: "success",
                    timer: 7000,
                    timerProgressBar: true,
                    willClose: () => {
                        window.location.reload();
                    }
                });
            }, 2000);
        </script>';
    } else {
        echo '<div class="alert alert-danger" role="alert">Failed to update record: ' . mysqli_error($conn) . '</div>';
    }
} else {
    echo '<div class="alert alert-danger" role="alert">Invalid request method.</div>';
}
?>
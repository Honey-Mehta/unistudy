<?php
include('../../common/config.php');
extract($_POST);

 $imagee = $_FILES['image']['name'];
        $imageePath = '../images/' . basename($imagee);


move_uploaded_file($_FILES['image']['tmp_name'], $imageePath);


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  
  if(empty($imagee))
  {
    $sql = "UPDATE `universities` 
            SET `name` = '$name', 
                `description` = '$description',
                `start_url` = '$url',
                `location`='$location',
                 `location_url`='$location_url',
                   `campus_city`='$campus_city'

            WHERE `id` = '$id'";
  }

  else

  {
           $sql = "UPDATE `universities` 
            SET `name` = '$name', 
                `description` = '$description',
                `start_url` = '$url',
                `location`='$location',
                `location_url`='$location_url',
                   `campus_city`='$campus_city',
                   `image`='$imagee'

            WHERE `id` = '$id'";

  }   

    $updateQuery = mysqli_query($conn, $sql);

    if ($updateQuery) {
        // Show loader first
       
        
        echo '<script>
           document.getElementById("loader").style.display = "block";
            setTimeout(function() {
                document.getElementById("loader").style.display = "none";
            Swal.fire({
                    title: "University Updated successfully!",
                    text: "Redirecting to University page...",
                    icon: "success",
                    timer: 7000,
                    timerProgressBar: true,
                    willClose: () => {
                        window.location.href = "university.php";
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

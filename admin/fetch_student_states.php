<?php
// Connect to the database
include("../common/config.php");
// Check if country_id is set and not empty
if (isset($_POST['country_id']) && !empty($_POST['country_id'])&& isset($_POST['student_id']) && !empty($_POST['student_id'])) {
    // Sanitize the input to avoid SQL injection
    $country_id = intval($_POST['country_id']);
   $student_id = intval($_POST['student_id']);


    $fetch=mysqli_fetch_assoc(mysqli_query($conn,"select * from student where id='".$_POST['student_id']."'"));
  
   
    // Fetch states
    $sql = "SELECT * FROM states WHERE country_id = $country_id";
    $result = mysqli_query($conn, $sql);

    // Check if query was successful
    if ($result) {
        echo '<option value="">Select State</option>';
        while ($row = mysqli_fetch_assoc($result)) {
          $selected = ($row['id'] == $fetch['state_id']) ? "selected" : "";
          echo '<option value="' . $row['id'] . '" ' . $selected . '>' . $row['state_name'] . '</option>';
        }
    } else {
        echo '<option value="">State not available</option>';
    }
} else {
    echo '<option value="">Select Country first</option>';
}
?>

<?php
// Connect to the database
include("../common/config.php");
// Check if country_id is set and not empty
if (isset($_POST['country_id']) && !empty($_POST['country_id'])) {
    // Sanitize the input to avoid SQL injection
    $country_id = intval($_POST['country_id']);

    // Fetch states
    $sql = "SELECT * FROM states WHERE country_id = $country_id";
    $result = mysqli_query($conn, $sql);

    // Check if query was successful
    if ($result) {
        echo '<option value="">Select State</option>';
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<option value="' . $row['id'] . '">' . $row['state_name'] . '</option>';
        }
    } else {
        echo '<option value="">State not available</option>';
    }
} else {
    echo '<option value="">Select Country first</option>';
}
?>




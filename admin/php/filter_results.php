<?php include("../../common/config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Initialize the filters
    $location_filter = isset($_POST['location']) ? $_POST['location'] : [];
    $program_level_filter = isset($_POST['program_level']) ? $_POST['program_level'] : [];
    $discipline_filter = isset($_POST['discipline']) ? $_POST['discipline'] : [];
    $tuition_fee_filter = isset($_POST['tuition_fee']) ? $_POST['tuition_fee'] : [];
    $english_score_filter = isset($_POST['english_score']) ? $_POST['english_score'] : [];
    $intakes_filter = isset($_POST['intakes']) ? $_POST['intakes'] : [];

    // Start building the SQL query
    $sql = "SELECT * FROM programs WHERE 1=1";

    // Add filters to the query
    if (!empty($location_filter)) {
        $locations = implode(",", array_map('intval', $location_filter));
        $sql .= " AND location_id IN ($locations)";
    }
    if (!empty($program_level_filter)) {
        $program_levels = implode(",", array_map('intval', $program_level_filter));
        $sql .= " AND program IN ($program_levels)";
    }
    if (!empty($discipline_filter)) {
        $disciplines = implode(",", array_map('intval', $discipline_filter));
        $sql .= " AND discipline_id IN ($disciplines)";
    }
    if (!empty($tuition_fee_filter)) {
        $tuition_fees = implode(",", array_map('intval', $tuition_fee_filter));
        $sql .= " AND tuition_per_year_approx IN ($tuition_fees)";
    }
    if (!empty($english_score_filter)) {
        $english_scores = implode(",", array_map('intval', $english_score_filter));
        $sql .= " AND english_score_id IN ($english_scores)";
    }
    if (!empty($intakes_filter)) {
        $intakes = implode(",", array_map('intval', $intakes_filter));
        $sql .= " AND intake_id IN ($intakes)";
    }

    // Execute the query
    $result = mysqli_query($conn, $sql);

    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            echo "<table class='table table-bordered'>";
            echo "<thead><tr><th>Program Name</th><th>Location</th><th>Program Level</th><th>Discipline</th><th>Tuition Fee</th><th>English Score</th><th>Intake</th></tr></thead>";
            echo "<tbody>";
            while ($row = mysqli_fetch_assoc($result)) {
                $fetch_uni = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM universities WHERE id='" . $row['university_id'] . "'"));
        
                echo '<div class="flex-item">';
                echo '<a href="university_details.php?id=' . $fetch_uni['university_id'] . '"><div>' . $fetch_uni['name'] . '</div></a>';
                echo '<div class="program-info" style="width:250px; font-weight:bold;"><h5>' . $row['program'] . '</h5></div>';
                echo '<div></div>';
                echo '<hr>';
                echo '<div>Location: </div>';
                echo '<div>Campus City:</div>';
                echo '<div>Gross tuition fee:</div>';
                echo '<div>Application fee: ' . $row['application_fees'] . ' </div>';
                echo '<div>Duration:</div>';
                echo '<hr>';
                echo '<div class="success-prediction-container" style="margin-bottom:50px;">';
                echo 'Success Prediction:';
                echo '<button class="btn btn-info success-prediction" data-toggle="modal" data-target="#universityModal"
                    data-university-name="' . $fetch_uni['name'] . '"
                    data-program-level="' . $row['program'] . '"
                    data-gross-tuition-fee="' . $row['tuition_per_year_approx'] . '"
                    data-application-fee="' . $row['application_fees'] . '">
                    Details
                </button>';
                echo '</div>';
                echo '<div class="create-application-container" style="margin-top:50px; width:100px;">';
                echo '<button class="btn btn-info create-application" data-toggle="modal" data-target="#createApplicationModal" style="border-radius:10px;"
                    data-university-name="' . $row['name'] . '"
                    data-program-level="' . $fetch_program['program'] . '"
                    data-gross-tuition-fee="' . $fetch_program['tuition_per_year_approx'] . '"
                    data-application-fee="' . $fetch_program['application_fees'] . '">
                    Create Application
                </button>';
                echo '</div>';
                echo '</div>';
            }
            echo "</tbody></table>";
        } else {
            echo "<p>No programs found matching your criteria.</p>";
        }
    } else {
        echo "<p>Error executing query: " . mysqli_error($conn) . "</p>";
    }
}

// Close the connection
mysqli_close($conn);
?>

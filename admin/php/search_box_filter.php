<?php
include('../common/config.php');

// Get the search query
$search = $_GET['search'] ?? '';

if (empty($search)) {
    echo "No search query provided.";
    exit;
}

// Prepare and execute the SQL query for universities
$sql = "SELECT * FROM universities WHERE name LIKE ?";
$stmt = $conn->prepare($sql);

if (!$stmt) {
    echo "Error preparing statement for universities: " . $conn->error;
    exit;
}

$search_term = "%" . $search . "%";
$stmt->bind_param("s", $search_term);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $fetch_program = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM programs WHERE university_id='" . $row['id'] . "'"));

        echo '<div class="flex-item">';
        echo '<a href="university_details.php?id=' . $row['id'] . '"><div>' . $row['name'] . '</div></a>';
        echo '<div class="program-info" style="width:250px; font-weight:bold;"><h5>' . $fetch_program['program'] . '</h5></div>';
        echo '<div></div>';
        echo '<hr>';
        echo '<div>Location: </div>';
        echo '<div>Campus City:</div>';
        echo '<div>Gross tuition fee:</div>';
        echo '<div>Application fee: ' . $fetch_program['application_fees'] . ' </div>';
        echo '<div>Duration:</div>';
        echo '<hr>';
        echo '<div class="success-prediction-container" style="margin-bottom:50px;">';
        echo 'Success Prediction:';
        echo '<button class="btn btn-info success-prediction" data-toggle="modal" data-target="#universityModal"
            data-university-name="' . $row['name'] . '"
            data-program-level="' . $fetch_program['program'] . '"
            data-gross-tuition-fee="' . $fetch_program['tuition_per_year_approx'] . '"
            data-application-fee="' . $fetch_program['application_fees'] . '">
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
} else {
    // Prepare and execute the SQL query for programs
    $sql = "SELECT * FROM programs WHERE name LIKE ?";
    $stmt = $conn->prepare($sql);

    if (!$stmt) {
        echo "Error preparing statement for programs: " . $conn->error;
        exit;
    }

    $stmt->bind_param("s", $search_term);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $fetch_university = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM universities WHERE id='" . $row['university_id'] . "'"));

            echo '<div class="flex-item">';
            echo '<a href="university_details.php?id=' . $fetch_university['id'] . '"><div>' . $fetch_university['name'] . '</div></a>';
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
                data-university-name="' . $fetch_university['name'] . '"
                data-program-level="' . $row['program'] . '"
                data-gross-tuition-fee="' . $row['tuition_per_year_approx'] . '"
                data-application-fee="' . $row['application_fees'] . '">
                Details
            </button>';
            echo '</div>';
            echo '<div class="create-application-container" style="margin-top:50px; width:100px;">';
            echo '<button class="btn btn-info create-application" data-toggle="modal" data-target="#createApplicationModal" style="border-radius:10px;"
                data-university-name="' . $fetch_university['name'] . '"
                data-program-level="' . $row['program'] . '"
                data-gross-tuition-fee="' . $row['tuition_per_year_approx'] . '"
                data-application-fee="' . $row['application_fees'] . '">
                Create Application
            </button>';
            echo '</div>';
            echo '</div>';
        }
    } else {
        echo "No results found.";
    }
}

// Close connection
$conn->close();
?>

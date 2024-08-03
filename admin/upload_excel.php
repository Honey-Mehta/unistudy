<?php
$mysqli = new mysqli("localhost", "root", "", "uni_study");

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

if (isset($_POST['submit'])) {
    $file = $_FILES['file']['tmp_name'];
    $handle = fopen($file, "r");

    // Check if the file was opened successfully
    if ($handle === FALSE) {
        die("Failed to open the file.");
    }

    // Skip the header row
    fgetcsv($handle, 1000, ",");

    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $start_url = $mysqli->real_escape_string($data[0]);
        $name = $mysqli->real_escape_string($data[1]);
        $program = $mysqli->real_escape_string($data[2]);
        $application_fees = $mysqli->real_escape_string($data[3]);
        $description = $mysqli->real_escape_string($data[4]);
        
      

        // Check if the university already exists
        $checkQuery = "SELECT id FROM universities WHERE name = '$name'";
        $result = $mysqli->query($checkQuery);

        if ($result->num_rows == 0) {
            // Insert the new university record
            $insertUniversityQuery = "INSERT INTO universities (start_url, name, description) VALUES ('$start_url', '$name', '$description')";
            $mysqli->query($insertUniversityQuery);
            $university_id = $mysqli->insert_id;
        } else {
            $row = $result->fetch_assoc();
            $university_id = $row['id'];
        }

        // Insert the program record
        $insertProgramQuery = "INSERT INTO programs (university_id,program,application_fees) VALUES ('$university_id','$program','$application_fees')";
        $mysqli->query($insertProgramQuery);
    }

    fclose($handle);
    echo "Data imported successfully!";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Import CSV File</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="file" required>
        <button type="submit" name="submit">Upload and Import</button>
    </form>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Uni-Study</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>

   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

  

  <script>
  $("#mobile_code").intlTelInput({
	initialCountry: "in",
	separateDialCode: true,
	 utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.4/js/utils.js"
});
  </script>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
      var input = document.querySelector("#phone");
      window.intlTelInput(input, {
        initialCountry: "auto",
        geoIpLookup: function (callback) {
          fetch('https://ipinfo.io?token=0a891acebe3dc6')
            .then(function (resp) {
              return resp.json();
            })
            .then(function (resp) {
              var countryCode = (resp && resp.country) ? resp.country : "us";
              callback(countryCode);
            });
        },
        utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js"
      });
    });
  </script>

  <style>
   .box{
      background-image: url("./images/study_abroad.jpg"); 
      width:100%;
       height:400px;
       background-size: cover; /* Ensures the image covers the entire element */
   
    background-repeat: no-repeat; /* Prevents the image from repeating */
   
   }
  
            .file-upload-wrapper {
            position: relative;
            display: inline-block;
        }
        .file-upload-input {
            width: 100%;
            height: 45px;
            opacity: 0;
            position: absolute;
            top: 0;
            left: 0;
            cursor: pointer;
        }
        .file-upload-label {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 45px;
            background-color: #f8f9fa;
            border: 1px solid #ced4da;
            border-radius: 5px;
            font-size: 16px;
            color: #495057;
            cursor: pointer;
        }
        .file-upload-label i {
            margin-right: 8px;
        }
     
  </style>

</head>
<body>

<div class="container mt-5" style="height:100px; ">
<div class="row ">

<div class="col-sm-4">
 <h2>Uni-Study</h2>
 </div>
  
 <div class="col-sm-4">
  
  <ul class="nav justify-content-center">
    <li class="nav-item">
      <a class="nav-link" href="#">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Resources</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Free Assessment</a>
    </li>
   
  </ul>
</div>


<div class="col-sm-4">
 
 </div>


</div>
</div>








<div class="container-fluid box" style="background-color:#F3E6BC; ">
  <div class="row">
     <div style="padding-top:100px; padding-left:200px; padding-bottom:100px;">
     <h1>Submit your documents !</h1>
     <h2>Let's start your student journey!<h2>
     </div>

  </div>
</div>



<div class="container-fluid" style="background-color:#F3E6BC; padding-top:50px;">
  <div class="row">
     <h1 class="text-center">Admission Requirements</h1>
<h5 class="text-center">Please ensure all the documents to be uploaded are clear and can be read. Documents should be in PDF only (please download camscanner or use notes in iphone). If you need two or more application at different colleges, we will contact you for more details.
NOTE: You can only submit here once, if you have submitted your documents with us before, and you need some changes, please email admissions@unistudyca.com

Email *</h5>
  </div>
</div>




<div class="container-fluid" style="background-color:#F3E6BC; padding-top:100px;">
 <div class="row">
  <div class="col-sm-4">
  </div>

   <div class="col-sm-4">
    
  <form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
  </div>


  <div class="form-group">
    <label for="exampleInputEmail1">First Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter First Name" name="first_name">
  </div>
 


   <div class="form-group">
    <label for="exampleInputEmail1">Last Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Last Name" name="last_name">
  </div>
 
  
    <div class="form-group">
      <label for="phone">Phone Number</label></br>
      <input type="tel" class="form-control" id="phone" name="phone_number">
    </div>
 
 
 


    <div class="form-group">
    <label for="exampleInputEmail1">Nationality</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Nationality" name="nationality">
  </div>
 



<div class="form-group">
    <label for="exampleInputEmail1">Region</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Region" name="region">
  </div>


<div class="form-group">
    <label for="exampleInputEmail1">Street Address</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Street Address" name="street_address">
  </div>




<div class="form-group">
    <label for="exampleInputEmail1">City</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter City" name="city">
  </div>


<div class="form-group">
    <label for="exampleInputEmail1">State/Province</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter State" name="state">
  </div>


<div class="form-group">
    <label for="exampleInputEmail1">Postal Code</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Postal Code" name="postal_code">
  </div>


<div class="form-group">
    <label for="exampleInputEmail1">Date of Birth</label>
    <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Postal Code" name="date">
  </div>

 <div class="form-group">
                <label for="maritalStatus">Marital Status</label>
                <select class="form-control" id="maritalStatus" name="marital_status">
                    <option value="" selected disabled>Select Marital Status</option>
                    <option value="single">Single</option>
                    <option value="married">Married</option>
                    <option value="divorced">Divorced</option>
                    <option value="widowed">Widowed</option>
                </select>
            </div>
            

 <div class="form-group">

                 <label>Marriage Certificate</label>
                <label for="fileUpload" class="file-upload-label">
                    <i class="fas fa-upload"></i> 
                </label>
                <input type="file" class="file-upload-input" id="fileUpload" name="file">
            </div>

<div class="form-group">
                <label for="maritalStatus">Highest Level of Education</label>
                <select class="form-control" id="highest_level_of_education" name="highest_level_of_education">
                    <option>---Select Program Level---</option> <?php
        // Assuming you have established a database connection named $conn

        // SQL query to fetch all countries
		$conn=mysqli_connect("sql211.infinityfree.com","if0_36845122","kwTxRyVkymsQm","if0_36845122_Uni_Study");
        $sql = "SELECT * FROM program_level";
        $result = mysqli_query($conn, $sql);

        // Check if there are results
        if ($result) {
            // Loop through the results and create an option element for each country
            while ($row = mysqli_fetch_assoc($result)) {
                $selected = ($row['program_level'] == $fetch['program_level']) ? "selected" : "";
                echo '<option value="' . $row['program_level'] . '" ' . $selected . '>' . $row['program_level'] . '</option>';
            
            }
        } else {
            echo '<option>No Program Level found</option>';
        }
        ?>
                </select>
            </div>






 <div class="form-group">

                 <label>Country where study completed</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Country Where Studies Completed" name="country_of_education">
            </div>



 <div class="form-group">

                 <label>Preffered Schools in Canada</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Preffered Schools in canada" name="Preffered_schools_in_canada">
            </div>



<div class="form-group">
                <label for="maritalStatus">Level of Study you are applying</label>
                <select class="form-control" id="highest_level_of_education" name="highest_level_of_education">
                    <option>---Select Program Level---</option> <?php
        // Assuming you have established a database connection named $conn

        // SQL query to fetch all countries
		$conn=mysqli_connect("sql211.infinityfree.com","if0_36845122","kwTxRyVkymsQm","if0_36845122_Uni_Study");
        $sql = "SELECT * FROM level_of_study_you_are_applying";
        $result = mysqli_query($conn, $sql);

        // Check if there are results
        if ($result) {
            // Loop through the results and create an option element for each country
            while ($row = mysqli_fetch_assoc($result)) {
                $selected = ($row['program_level'] == $fetch['program_level']) ? "selected" : "";
                echo '<option value="' . $row['level_of_study'] . '" ' . $selected . '>' . $row['level_of_study'] . '</option>';
            
            }
        } else {
            echo '<option>No Program Level found</option>';
        }
        ?>
                </select>
            </div>





 <div class="form-group">

                 <label>Preffered Program</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Preffered Program" name="preffered_program">
            </div>




 <div class="form-group">

                 <label>Backup Program</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Backup Program" name="backup_program">
            </div>


<div class="form-group">
                <label for="maritalStatus">Intended Intake</label>
                <select class="form-control" id="intended_inake" name="intended_inake">
                    <option>---Select Intakes---</option> <?php
        // Assuming you have established a database connection named $conn

        // SQL query to fetch all countries
		$conn=mysqli_connect("sql211.infinityfree.com","if0_36845122","kwTxRyVkymsQm","if0_36845122_Uni_Study");
        $sql = "SELECT * FROM intakes";
        $result = mysqli_query($conn, $sql);

        // Check if there are results
        if ($result) {
            // Loop through the results and create an option element for each country
            while ($row = mysqli_fetch_assoc($result)) {
                $selected = ($row['intakes'] == $fetch['intakes']) ? "selected" : "";
                echo '<option value="' . $row['intakes'] . '" ' . $selected . '>' . $row['intakes'] . '</option>';
            
            }
        } else {
            echo '<option>No Program Level found</option>';
        }
        ?>
                </select>
            </div>


      
<div class="form-group">
                <label for="maritalStatus">Intended Destination</label>
                <select class="form-control" id="intended_inake" name="intended_inake">
                    <option>---Intended Destination---</option> <?php
        // Assuming you have established a database connection named $conn

        // SQL query to fetch all countries
		$conn=mysqli_connect("sql211.infinityfree.com","if0_36845122","kwTxRyVkymsQm","if0_36845122_Uni_Study");
        $sql = "SELECT * FROM intended_destination";
        $result = mysqli_query($conn, $sql);

        // Check if there are results
        if ($result) {
            // Loop through the results and create an option element for each country
            while ($row = mysqli_fetch_assoc($result)) {
                $selected = ($row['intended_destination'] == $fetch['intended_destination']) ? "selected" : "";
                echo '<option value="' . $row['intended_destination'] . '" ' . $selected . '>' . $row['intended_destination'] . '</option>';
            
            }
        } else {
            echo '<option>No Intended Destination found</option>';
        }
        ?>
                </select>
            </div>      






   <div class="form-group">
                <label for="maritalStatus">Do you want to apply to another school/s?</label>
                <select class="form-control" id="intended_inake" name="intended_inake">
                    <option  value="yes">Yes</option>
                        <option value="yes">No</option>
       
        
                </select>
            </div>      




<div class="form-group">

                 <label>Passport</label>
                <label for="fileUpload" class="file-upload-label">
                    <i class="fas fa-upload"></i> 
                </label>
                <input type="file" class="file-upload-input" id="fileUpload" name="passport">
            </div>



<div class="form-group">

                 <label>College Transcript</label>
                <label for="fileUpload" class="file-upload-label">
                    <i class="fas fa-upload"></i> 
                </label>
                <input type="file" class="file-upload-input" id="fileUpload" name="college_transcript">
            </div>


<div class="form-group">

                 <label>College Diploma</label>
                <label for="fileUpload" class="file-upload-label">
                    <i class="fas fa-upload"></i> 
                </label>
                <input type="file" class="file-upload-input" id="fileUpload" name="college_diploma">
            </div>





<div class="form-group">

                 <label>HighSchool Transcript</label>
                <label for="fileUpload" class="file-upload-label">
                    <i class="fas fa-upload"></i> 
                </label>
                <input type="file" class="file-upload-input" id="fileUpload" name="highschool_transcript">
            </div>

<div class="form-group">

                 <label>HighSchool Diploma</label>
                <label for="fileUpload" class="file-upload-label">
                    <i class="fas fa-upload"></i> 
                </label>
                <input type="file" class="file-upload-input" id="fileUpload" name="highschool_diploma">
            </div>


<div class="form-group">

                 <label>Medium of instruction</label>
                <label for="fileUpload" class="file-upload-label">
                    <i class="fas fa-upload"></i> 
                </label>
                <input type="file" class="file-upload-input" id="fileUpload" name="medium_of_instruction">
            </div>


<div class="form-group">

                 <label>Resume</label>
                <label for="fileUpload" class="file-upload-label">
                    <i class="fas fa-upload"></i> 
                </label>
                <input type="file" class="file-upload-input" id="fileUpload" name="resume">
            </div>


 <div class="form-group">
                <label for="maritalStatus">Where did you hear about us?</label>
                <select class="form-control" id="intended_inake" name="intended_inake">
                        <option  value="Facebook">Facebook</option>
                        <option value="Instagram">Instagram</option>
                        <option  value="Youtube/Websearch">Youtube/Websearch</option>
                        <option value="Tiktok">Tiktok</option>
                        <option  value="Referral">Referral</option>
                        <option value="other">other</option>
          
                </select>
            </div>  



  <button type="submit" class="btn btn-primary">Submit</button>
   </form>
   </div>

   <div class="col-sm-4">
  </div>

 </div>
</div>


</body>
</html>
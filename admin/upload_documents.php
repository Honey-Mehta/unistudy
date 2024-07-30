
<?php  
   $id = $_GET['id'];
$conn=mysqli_connect("localhost","root","","uni_study");   
$fetch = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM student WHERE id='$id'"));
?>

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
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  
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
  .background-image {}

  .sticky {
  position: sticky;
  top: 0;
  background-color:white;
 }

  .box{
      background-image: url("./images/study_abroad.jpg"); 
      width:100%;
       height:400px;
       background-size: cover; /* Ensures the image covers the entire element */
       background-repeat: no-repeat; /* Prevents the image from repeating */
       background-attachment: fixed;
  }

  .file-upload-wrapper {
    position: relative;
    display: inline-block;
    width: 100%;
    height: 45px; /* Match the height of the text box */
}

.file-upload-input {
    width: 100%;
    height: 100%;
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
    height: 100%;
    background-color: #f8f9fa;
    border: 1px solid #ced4da;
    border-radius: 5px;
    font-size: 16px;
    color: #495057;
    cursor: pointer;
    padding: 0 10px; /* Optional padding to make space for the icon */
    box-sizing: border-box;
}

.file-upload-label i {
    margin-right: 8px;
    font-size: 20px; /* Adjust the icon size if needed */
}
  </style>

</head>
<body>

<div class="container-fluid background-image" style="background-color:#F3E6BC; padding-top:50px;">
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
   <form id="msform" method="post" enctype="multipart/form-data">
   <input type="hidden" name="id" value="<?php echo $id; ?>">
   <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email" value="<?php echo $fetch['email']; ?>">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">First Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter First Name" name="first_name" value="<?php echo $fetch['first_name']; ?>">
  </div>

   <div class="form-group">
    <label for="exampleInputEmail1">Last Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Last Name" name="last_name" value="<?php echo $fetch['last_name']; ?>">
  </div>

 <div class="form-group">
    <label for="marriage_certificate">Marriage Certificate</label><br>
    <div class="file-upload-wrapper">
        <input type="file" id="marriage_certificate" name="marriage_certificate"  accept="application/pdf" class="form-control">
     
    </div>
</div>

  <div class="form-group">
    <label for="passport">Passport</label><br>
    <div class="file-upload-wrapper">
      <input type="file" name="passport"  accept="application/pdf" class="form-control">
     
    </div>
  </div>

  <div class="form-group">
    <label for="college_transcript">College Transcript</label><br>
    <div class="file-upload-wrapper">
      <input type="file" name="college_transcript"  accept="application/pdf" class="form-control">
      
    </div>
  </div>

  <div class="form-group">
    <label for="college_diploma">College Diploma</label><br>
    <div class="file-upload-wrapper">
      <input type="file" name="college_diploma"  accept="application/pdf" class="form-control">
     
    </div>
  </div>

  <div class="form-group">
    <label for="highschool_transcript">HighSchool Transcript</label><br>
    <div class="file-upload-wrapper">
      <input type="file" name="highschool_transcript"  accept="application/pdf" class="form-control">
     
    </div>
  </div>

  <div class="form-group">
    <label for="highschool_diploma">HighSchool Diploma</label><br>
    <div class="file-upload-wrapper">
      <input type="file" name="highschool_diploma"  accept="application/pdf" class="form-control">
      
    </div>
  </div>

  <div class="form-group">
    <label for="medium_of_instruction">Medium of Instruction</label><br>
    <div class="file-upload-wrapper">
      <input type="file" name="medium_of_instruction"  accept="application/pdf" class="form-control">
      
    </div>
  </div>

  <div class="form-group">
    <label for="resume">Resume</label><br>
    <div class="file-upload-wrapper">
      <input type="file" name="resume"  accept="application/pdf" class="form-control">
     
    </div>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
   </form>

  <div class="input-group mb-0" id="message_login">

  </div>
  <div id="loader"></div>
   </div>

   <div class="col-sm-4">
  </div>
 </div>
</div>


<div class="container-fluid" style="background-color:#F3E6BC; padding-top:200px;">
  <div class="row">
    
  </div>
</div>

</body>
</html>
<style>
/* Loader CSS */
#loader {
    border: 16px solid #f3f3f3;
    border-radius: 50%;
    border-top: 16px solid #3498db;
    width: 150px;
    height: 150px;
    animation: spin 2s linear infinite;
    display: none;
    position: fixed;
    left: 45%;
    top: 40%;
    transform: translate(-50%, -50%);
    z-index: 9999;
}

@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}
</style>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>  
<script>
    $(document).ready(function() {
      $("#msform").on("submit", function(event) {
        alert("hello")
        event.preventDefault();
        var formData = new FormData(this);
        $.ajax({
          url: "php/update_upload_documents_backend.php",
          method: "POST",
          data: formData,
          contentType: false,
          processData: false,
          success: function(data) {
            $("#message_login").html(data);
          }
        });
      });
    });
</script>
    
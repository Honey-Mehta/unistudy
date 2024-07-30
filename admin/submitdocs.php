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
  <style>
    .background-image{}
    .sticky {
      position: sticky;
      top: 0;
      background-color:white;
    }
    .box {
      background-image: url("./images/study_abroad.jpg"); 
      width:100%;
      height:400px;
      background-size: cover;
      background-repeat: no-repeat;
      background-attachment: fixed;
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
  <div class="container-fluid mt-5 sticky" style="height:100px;">
    <div class="row header" id="myHeader">
      <div class="col-sm-4">
        <h2 class="text-center">Uni-Study</h2>
      </div>
      <div class="col-sm-4">
        <ul class="nav justify-content-center">
          <li class="nav-item">
            <a class="nav-link" href="#" style="color:black;">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" style="color:black;">Resources</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" style="color:black;">Free Assessment</a>
          </li>
        </ul>
      </div>
      <div class="col-sm-4"></div>
    </div>
  </div>

  <div class="container-fluid box" style="background-color:#F3E6BC;">
    <div class="row">
      <div style="padding-top:100px; padding-left:200px; padding-bottom:100px;">
        <h1>Submit your documents!</h1>
        <h2>Let's start your student journey!</h2>
      </div>
    </div>
  </div>

  <div class="container-fluid background-image" style="background-color:#F3E6BC; padding-top:50px;">
    <div class="row">
      <h1 class="text-center">Admission Requirements</h1>
      <h5 class="text-center">Please ensure all the documents to be uploaded are clear and can be read. Documents should be in PDF only (please download camscanner or use notes in iPhone). If you need two or more applications at different colleges, we will contact you for more details.
      NOTE: You can only submit here once, if you have submitted your documents with us before, and you need some changes, please email admissions@unistudyca.com</h5>
    </div>
  </div>

  <div class="container-fluid" style="background-color:#F3E6BC; padding-top:100px;">
    <div class="row">
      <div class="col-sm-4"></div>
      <div class="col-sm-4">
        <form id="msform" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label>Marriage Certificate</label>
            <input type="file" name="marriage_certificate" class="form-control">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <div id="message_login" class="mt-3"></div>
      </div>
      <div class="col-sm-4"></div>
    </div>
  </div>

  <script>
    $(document).ready(function() {
      $("#msform").on("submit", function(event) {
        event.preventDefault();
        var formData = new FormData(this);
        $.ajax({
          url: "php/submitdocs_backend.php",
          method: "POST",
          data: formData,
          contentType: false,
          processData: false,
          success: function(data) {
            alert(data);
            $("#message_login").html(data);
          }
        });
      });
    });
  </script>
</body>
</html>

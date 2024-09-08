<?php  include("common/config.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Unistudy</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }

    .program {
            padding: 2rem;
            background-color: #f8f9fa;
        }
        .bg-3 {
            background-color: #343a40; /* Dark background color */
            color: #ffffff; /* White text color */
            padding: 2rem;
            border-radius: 8px;
        }
        .text-center {
            text-align: center;
        }
        .row {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
        .programs_para {
            flex: 1 1 25%; /* 4 columns in a row */
            box-sizing: border-box;
            padding: 1rem;
        }
        .programs_para p {
            background-color: #ffffff; /* White background for each program */
            color: #333333; /* Dark text color */
            border-radius: 8px;
            padding: 1rem;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin: 0.5rem;
            font-size: 1rem;
        }
        .programs_para p:hover {
            background-color: #e9ecef; /* Light gray background on hover */
            transition: background-color 0.3s;
        }

        .programs_para {
            display: flex;
            background-color: #ffffff; /* White background for each program */
            color: #333333; /* Dark text color */
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin: 0.5rem;
            font-size: 15px; /* Set font size */
            text-align: center;
        }
        .programs_para p {
            margin: 0; /* Remove default margin */
            line-height: 100px; /* Vertically center text */
            width: 100%; /* Make <p> fill its container */
        }

  </style>
</head>
<body>

<div class="container-fluid">
<nav class="navbar navbar-inverse"  style="font-weight:bold;background-color: rgba(27, 132, 255, 1); ">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
     
       <img src="admin/images/logo_with_name_white_foreground.png" alt="homepage" class="dark-logo" width="200px" height="50px;"/>
    </div>
   <div class="collapse navbar-collapse" id="myNavbar">
      <div class="navbar-center">
        <ul class="nav navbar-nav justify-content-center">
        <li><a href="#" style="color:white;">Home</a></li>
            <li><a href="#" style="color:white;">About</a></li>
            <li><a href="#" style="color:white;">Gallery</a></li>
            <li><a href="#" style="color:white;">Contact</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right" style="position: absolute; right: 0;">
          <li><a href="login.php" style="color:white;"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
           <li><a href="signup.php" style="color:white;"><span class="glyphicon glyphicon-log-in"></span> Signup</a></li>
        </ul>
      </div>
    </div>
  </div>
</nav>
</div>



<div class="container-fluid">
  <div id="myCarousel" class="carousel slide" data-ride="carousel" >
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" >
      <div class="item active">
        <img src="admin/images/slider.png" alt="Los Angeles" style="width:100%; height:400px;">
      </div>

      <div class="item">
        <img src="admin/images/slider.png" alt="Chicago" style="width:100%; height:400px;">
      </div>
    
      <div class="item">
        <img src="admin/images/slider.png" alt="New york" style="width:100%; height:400px;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>


  
<div class="container-fluid">    
  <h3>Top Universities</h3><br>
  <div class="row">
<?php 
    $sql_universities= mysqli_query($conn,"select * from `universities` limit 12");
    while($fetch_university=mysqli_fetch_assoc($sql_universities))
    {
        ?>
    <div class="col-sm-3">
      <img src="admin/images/university_front.png" class="img-responsive" style="width:100%" alt="Image">
        <p><?php echo $fetch_university['name']; ?></p>
    </div>
<?php } ?>
  </div>
</div><br>


  <div class="container-fluid program bg-3 text-center">    
        <h3>Top Programs</h3><br>
        <div class="row">
            <?php 
                $sql_programs = mysqli_query($conn, "SELECT * FROM `programs` LIMIT 12");
                while ($fetch_programs = mysqli_fetch_assoc($sql_programs)) {
            ?>
            <div class="col-sm-3 programs_para">
                <p style="font-size:15px;"><?php echo htmlspecialchars($fetch_programs['program']); ?></p>
            </div>
            <?php } ?>
        </div>
    </div><br>



<footer class="container-fluid text-center">
  <p>Unistudy CopyRight 2024</p>
</footer>

</body>
</html>
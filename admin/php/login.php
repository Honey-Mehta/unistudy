<?php include('../common/config.php');

extract($_POST);
$us = mysqli_query($conn, "SELECT * FROM `admin` WHERE `email`='$email' AND `password`='$password'");
$us_count = mysqli_num_rows($us);
$us_fetch=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM `admin` WHERE `email`='$email' AND `password`='$password'"));
if ($us_count) {
    $_SESSION['admin_email']=$us_fetch['email'];
    echo '<div class="alert alert-success" style="">
    
    <strong> Successfully Login. Please Wait... </strong></div>';
    echo "<script>
        setTimeout(function() {
            window.location.href = 'index.php';
        }, 2000); // 5000 milliseconds = 5 seconds
    </script>";
} else {
    echo '<div class="alert alert-danger" style="">
    <button type="button" class="close" data-dismiss="alert" style="margin-left: 5px">  x  </button>
    <strong> Please Enter Correct Email or Password  </strong></div>';
}
?>
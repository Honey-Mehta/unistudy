<?php  
include('../common/config.php');

extract($_POST);

$sql="INSERT INTO university (university_name, course, location) VALUES ('$university_name', '$course', '$location')";
$us=mysqli_query($conn,$sql);

if($us)
{

    echo '<div class="alert alert-success"  style="">
    <button type="button" class="close" data-dismiss="alert" style="margin-left: 5px">  x  </button>
    <strong > Successfully Registered. Please Wait... </strong></div>';
  
echo "<script>window.location.href='university.php';</script>";
   
}

else
{
    echo '<div class="alert alert-danger"  style="">
    <button type="button" class="close" data-dismiss="alert" style="margin-left: 5px">  x  </button>
    <strong > Registration Failed  </strong></div>';
}
?>
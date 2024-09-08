<?php  
include('../../common/config.php');

extract($_POST);

$sql="INSERT INTO acadmic_intakes (year, success_score, intake_status, submission_deadline) VALUES ('$intake_year', '$success_score', '$intake_status', '$submission_deadline')";
$us=mysqli_query($conn,$sql);

if($us)
{

    echo '<script>
    
   setTimeout(function(){
   
        Swal.fire({
                   title: "Acadmic Intakes Added Successfully!",
                   text: "Acadmic Intakes Added Successfully...",
                   icon: "success",
                   timer: 7000,
                   timerProgressBar: true,
                   willClose: () => {
                      window.location.href="intakes.php";
                   }
               });
       
   }, 2000);
</script>';
        
}

else
{
    echo '<div class="alert alert-danger"  style="">
    <button type="button" class="close" data-dismiss="alert" style="margin-left: 5px">  x  </button>
    <strong > Registration Failed  </strong></div>';
}
?>
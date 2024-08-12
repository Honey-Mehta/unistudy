<?php  
include('../common/config.php');

extract($_POST);

$sql="INSERT INTO programs (university_id, program, fee, tuition_per_year_approx, application_fees) VALUES ('$university_id', '$program_name', '$fee' , '$tution_per_year_approx' , '$application_fees')";
$us=mysqli_query($conn,$sql);

if($us)
{

    echo '<script>
    document.getElementById("loader").style.display = "block";
   setTimeout(function(){
       document.getElementById("loader").style.display = "none";
        Swal.fire({
                   title: "Programs Added successfully!",
                   text: "Programs Added successfully...",
                   icon: "success",
                   timer: 7000,
                   timerProgressBar: true,
                   willClose: () => {
                      window.location.href="courses_programs.php";
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
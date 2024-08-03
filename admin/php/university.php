<?php  
include('../common/config.php');

extract($_POST);

$sql="INSERT INTO universities (name, description, start_url) VALUES ('$name', '$description', '$url')";
$us=mysqli_query($conn,$sql);

if($us)
{

    echo '<script>
    document.getElementById("loader").style.display = "block";
   setTimeout(function(){
       document.getElementById("loader").style.display = "none";
        Swal.fire({
                   title: "University Added successfully!",
                   text: "University Added successfully...",
                   icon: "success",
                   timer: 7000,
                   timerProgressBar: true,
                   willClose: () => {
                      window.location.href="university.php";
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
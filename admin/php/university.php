<?php  
include('../../common/config.php');

extract($_POST);

   $imagee = $_FILES['image']['name'];
        $imageePath = '../images/' . basename($imagee);


move_uploaded_file($_FILES['image']['tmp_name'], $imageePath);


$sql="INSERT INTO universities (name, description, start_url, location, location_url, campus_city, image) VALUES ('$name', '$description', '$url', '$location', '$location_url', '$campus_city', '$imagee')";
$us=mysqli_query($conn,$sql);

if($us)
{

    echo '<script>
    
   setTimeout(function(){
   
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
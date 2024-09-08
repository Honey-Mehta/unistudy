<?php
class unistudy
{
    function __construct($db)
    {
        $this->connect = $db;
        $this->path = "http://wisdomnursing.maestrosinfotech.org/images/";
    }

    function signup()
    {
        extract($_POST);
        $validation = [
            'first_name' => $first_name,
            'last_name' => $last_name,
            'middle_name' => $middle_name,
            'email' => $email,
           
        ];
        $validation_check = array_search(null, $validation);
        if ($validation_check) {
            $message['result'] = $validation_check . ' is empty';
            echo json_encode($message, JSON_UNESCAPED_UNICODE);
            die();
        }
      
        $sql_search = mysqli_query($this->connect, "SELECT * from `student` where email='$email'");
        $count = mysqli_num_rows($sql_search);
        if ($count > 0) {
            $message["result"] = "Email Already Registered";
        } else {
            $sql1 = mysqli_query($this->connect, "INSERT INTO `student` SET  `first_name`='$first_name',`last_name`='$last_name', `middle_name`='$middle_name',`email`='$email'");

            $insert_id = mysqli_insert_id($this->connect);
            if ($insert_id != '') {
                $vals = mysqli_query($this->connect, "SELECT * FROM `student` where id='$insert_id'");
                if (mysqli_num_rows($vals) > 0) {
                    $message = mysqli_fetch_assoc($vals);
                    $message["result"] = "Registration Successfull";
                }
            } else {
                $message['result'] = "somthing went wrong";
            }
        }
        echo json_encode($message);
        //echo json_encode($insert_id);

        die();
    }
    

    function show_universities()
    {
        extract($_REQUEST);
        $row_array = [];
        $sql = mysqli_query($this->connect, "SELECT * FROM universities");
        while ($fetch = mysqli_fetch_assoc($sql)) {
            array_push($row_array, $fetch);
        }

        echo json_encode($row_array);
    }
   

    
}

?>

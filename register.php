<?php 

    require 'connection.php';
    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];

    $pass = md5($password); // chuyen doi sang md5 ma hoa mat khau

    //check nguoi dung da tao tai khoan chua
    $checkUser="SELECT * FROM users WHERE email='$email'";
    $checkQuery=mysqli_query($con, $checkUser);

    if(mysqli_num_rows($checkQuery)>0){
        $response['error']="02";
        $response['message']="Tai khoan da ton tai";
    }else{
        $insertQuery = "INSERT INTO users (username, password, email, mobile) VALUES('$username','$pass','$email','$mobile')";
        $result=mysqli_query($con, $insertQuery);
    
        if($result){
            $response['error']="00";
            $response['message']="Tao tai khoan thanh cong";
        }
        else{
             $response['error']="01";
            $response['message']="That bai";
        }
    }
   
echo json_encode($response);

?>
<?php
    require 'connection.php';
    $current = md5($_POST['current']);
    $new= md5($_POST['new']);
    $email=$_POST['email'];

    $checkUser="SELECT * FROM users WHERE email='$email' and password='$current'";
    $result=mysqli_query($con,$checkUser);

    if(mysqli_num_rows($result)>0){
        $updatePass= mysqli_query($con,"UPDATE users SET password='$new' WHERE email='$email'");

        if($updatePass>0){
            $response['error']="200";
            $response['message']="Update mat khau thanh cong";
        } else{
           
            $response['error']="500";
            $response['message']="That bai";
        
        }  
    }else{
        $response['error']="400";
        $response['message']="Nguoi dung khong ton tai";
    }   

echo json_encode($response);

?>
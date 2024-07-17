<?php 

    require 'connection.php';
    $id =$_REQUEST['id'];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];
 
   
    $updateUser="UPDATE users SET username='$username',email='$email',mobile='$mobile' WHERE id='$id'";
    $result=mysqli_query($con, $updateUser);

    if($result>0){
        $response['error']="200";
        $response['message']="Update thanh cong";
    }else{
        $response['error']="500";
        $response['message']="That bai";
    }
   
echo json_encode($response);

?>
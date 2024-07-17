<?php
    require 'connection.php';
    $id =$_POST['id'];

    $deleteUser=mysqli_query($con,"DELETE FROM users WHERE id='$id'");
    
    if($deleteUser>0){
        $response['error']="200";
        $response['message']="Xoa thanh cong";

    }else{
        $response['error']="500";
        $response['message']="That bai";
    }   

echo json_encode($response);

?>
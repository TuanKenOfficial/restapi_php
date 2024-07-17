<?php 

    require 'connection.php';
    $users = "SELECT username, email, mobile FROM users";
  
    $result=mysqli_query($con, $users);

    if(mysqli_num_rows($result)>0){
        while($row=$result->fetch_assoc()){
            $response['users'][]=$row;
        }
      
    }else{
        $response['error']="400";
        $response['message']="That bai";
    }
   
echo json_encode($response);

?>
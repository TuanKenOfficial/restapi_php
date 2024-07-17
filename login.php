<?php 

    require 'connection.php';
    $email = $_POST["email"];
    $password = md5($_POST["password"]);
   

    
    $checkUser="SELECT * FROM users WHERE email='$email'";
    $result=mysqli_query($con, $checkUser);

    if(mysqli_num_rows($result)>0){
        $checkUserquery="SELECT id, username, email, mobile FROM users WHERE email='$email' and password='$password'";
        $resultquery = mysqli_query($con, $checkUserquery);

        if(mysqli_num_rows($resultquery)>0){
            while($row=$resultquery->fetch_assoc()){
                $response['user']=$row;
            }
            $response['error']="200";
            $response['message']="Dang nhap thanh cong";
        }
        else{
            $response['user']=(object)[];
            $response['error']="300";
            $response['message']="Thong tin sai";
        }
        
       
    }else{
        $response['user']=(object)[];
        $response['error']="400";
        $response['message']="Nguoi dung khong ton tai";
    }
   
echo json_encode($response);

?>
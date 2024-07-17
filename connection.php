<?php

    $hostName='localhost';
    $userName='root';
    $userPass='';
    $dbName='user_api';

    $con = mysqli_connect($hostName,$userName,$userPass,$dbName);

    if(!$con){
        echo "ket noi that bai \n";
    }
    else{
        echo "ket noi thanh cong \n";
    }


?>

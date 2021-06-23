<?php
    $hostname = "localhost";
    $username = "root";
    $password = "88888888";
    $dbName = "luna helper";
    $conn = mysqli_connect($hostname,$username,$password,$dbName);

    if(!$conn){
        echo "can't connect";
    }

?>
<?php
    session_start();
    $name = $_POST['name'];
    $FID = $_POST['FID'];
    $usrID = $_SESSION["userID"];

    include("connectDB.php");

    if(!$conn)
    {
        echo "Conneted fail";
    }
    else
    {
        $sql = "insert into friends values('".$FID."','".$name."','".$usrID."')";
        $result = mysqli_query($conn, $sql) or die("Can't add friend");
        if($result)
        {
            echo "<script type='text/javascript'>";
            echo "alert('Added!');";
            echo "window.location = 'Menu.php'; ";
            echo "</script>";
        }
    }


?>
<?php
    $mpID = $_POST['mpID'];
    $mpName = $_POST['mpName'];
    include("connectDB.php");

    if(!$conn)
    {
        echo "Conneted fail";
    }
    else
    {
        $sql = "insert into map values('".$mpID."','".$mpName."')";
        $result = mysqli_query($conn, $sql) or die("Can't add item");
        if($result)
        {
            echo "<script type='text/javascript'>";
            echo "alert('Added!');";
            echo "window.location = 'AddMap.html'; ";
            echo "</script>";
        }
    }


?>
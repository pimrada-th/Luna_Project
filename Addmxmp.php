<?php
    $mID = $_POST['mID'];
    $mpID = $_POST['mpID'];
    include("connectDB.php");

    if(!$conn)
    {
        echo "Conneted fail";
    }
    else
    {
        $sql = "insert into mxmp values('".$mID."','".$mpID."')";
        $result = mysqli_query($conn, $sql) or die("Can't add item");
        if($result)
        {
            echo "<script type='text/javascript'>";
            echo "alert('Added!');";
            echo "window.location = 'Addmxmp.html'; ";
            echo "</script>";
        }
    }


?>
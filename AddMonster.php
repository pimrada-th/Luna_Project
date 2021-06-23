<?php
    $mName = $_POST['mName'];
    $mID = $_POST['mID'];
    $mIMG = $_POST['mIMG'];
    $mLv = $_POST['mLv'];
    $mHP = $_POST['mHP'];
    $mpID = $_POST['mpID'];
    $iID = $_POST['iID'];
    include("connectDB.php");

    if(!$conn)
    {
        echo "Conneted fail";
    }
    else
    {
        $sql = "insert into monster values('".$mID."','".$mName."','".$mLv."','".$mHP."','".$mpID."','".$mIMG."','".$iID."');";
        $result = mysqli_query($conn, $sql) or die("Can't add item");
        if($result)
        {
            echo "<script type='text/javascript'>";
            echo "alert('Added!');";
            echo "window.location = 'AddMonster.html'; ";
            echo "</script>";
        }
    }


?>
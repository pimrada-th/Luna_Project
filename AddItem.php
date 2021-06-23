<?php
    $iName = $_POST['iName'];
    $iID = $_POST['iID'];
    $iIMG = $_POST['iIMG'];
    $receive = $_POST['receive'];
    $max = $_POST['max'];
    $type = $_POST['type'];

    include("connectDB.php");

    if(!$conn)
    {
        echo "Conneted fail";
    }
    else
    {
        $sql = "insert into item values('".$iID."','".$iName."','".$receive."','".$max."','".$type."','".$iIMG."')";
        $result = mysqli_query($conn, $sql) or die("Can't add item");
        if($result)
        {
            echo "<script type='text/javascript'>";
            echo "alert('Added!');";
            echo "window.location = 'AddItem.html'; ";
            echo "</script>";
        }
    }


?>
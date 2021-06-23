<?php
    include "connectDB.php";
    $iID = $_POST['iID'];
    
    $query = "SELECT * FROM monster ";
    $query .= "inner join mxmp on monster.mID = mxmp.mID ";
    $query .= "inner join map on mxmp.mpID = map.mpID ";
    $query .= "where monster.iID='$iID';";

    $result = mysqli_query($conn,$query);
    $data = array();


    while ($row=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
        $record = $row;
        array_push($data, $record);
    }



    
    // Encoding array in JSON format
    echo json_encode($data);
?>
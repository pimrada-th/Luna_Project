<?php
    include("connectDB.php");
    $sql = "select * from item";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_num_rows($result);
    $path = "/Luna_Project/img/item/";
    if($row == 0)
        print("no data");
    else
    {
        $i=0;
        while($i<$row)
        {
            $data = mysqli_fetch_array($result);
            echo "<TR>";
            echo "<TD align='center'>";
            echo '<img style="height:70px" src="'.$path.$data['iIMG'].'"class="center">  ';
            echo "</TD>";                        
            echo "<TD align='left'>".$data['iName']."</TD>";
            echo "<TD align='left'>".$data['receive']."</TD>";
            echo "<TD align='left'>".$data['type']."</TD>";
            echo "<TD align='left'>".$data['max']."</TD>";
            echo "<TD><button style='font-size: large;'data-id='btnMonster' class='btn btn-primary ' data-toggle='modal' data-target='#itemModal' onclick='showMonster(".'"'.$data['iID'].'"'.")'>ดูข้อมูลมอนส์เตอร์</button></TD>";
            echo "</TR>";
            $i++;
        }     
    }
            
?>
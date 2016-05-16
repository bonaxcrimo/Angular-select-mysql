
<?php

$connection = mysqli_connect("localhost","root","","cari") or die("Error " . mysqli_error($connection));

    //fetch table rows from mysql db
    $sql = "select * from Customers";
    $result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));

    //create an array
    $emparray = array();
    while($row =mysqli_fetch_assoc($result))
    {
        $emparray[] = $row;
    }
    $a=json_encode($emparray);
    $outp ='{"records":'.$a.'}';
    //close the db connection
    echo $outp;
    mysqli_close($connection);
?>
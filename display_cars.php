<?php
include("db.php");

$query = "select * from cars";
$query_car_info = mysqli_query($con, $query);

if(!$query_car_info){
    die("Query Failed".mysqli_error($con));
    
}

while($row = mysqli_fetch_array($query_car_info)){

    echo "<tr>";
    echo "<td>{$row['id']}</td>";
    echo "<td>{$row['make']}</td>";
    echo "</tr>";

}


?>
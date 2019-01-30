<?php

include("db.php");


if(isset($_POST['car_name'])){

    $car_name = $_POST['car_name'];
    $query = "insert into cars(make) values('$car_name')";
    $query_car_name = mysqli_query($con, $query);

    if(!$query_car_name){

        die("QUERY Failed");
    }



    header('Location: index.html');

     
     
}

?> 
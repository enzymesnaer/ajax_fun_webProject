<?php

    include("db.php");

    $search = $_POST['search'];

    if(!empty($search)){
        $query = "select * from cars where make like '$search%'";
        $search_query = mysqli_query($con,$query);
        $count = mysqli_num_rows($search_query);

        if(!$search_query){
            die('QUERY FAILED' . mysqli_error($con));
        }


        if($count <= 0){


            echo "Sorry we don't  have that car available";

        }else{

        while($row = mysqli_fetch_array($search_query)){

            $brand = $row['make'];

            ?>

            <ul class='list-unstyled'> 
                <?php

                echo "<li >{$brand} in stock.</li>";




                ?>
            </ul>

            <?php
        }
    }
    }
?>

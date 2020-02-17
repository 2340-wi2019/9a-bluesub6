<!DOCTYPE html>
<meta charset = utf-8>
<html lang type ="en">
<head>
<!-- Jacobi Williams
     assignment09.htm
     INFO2340.WW
     Prof.Thoendel 
     02/16/20
-->
<head>
    <title>Assignment 9, Part 2</title>
</head>
<body>
    
    <?php
        //Task 3.1: Change these items to reflect
        //four of your favorite things
        $my_favorite_things = array (
            "Space Jam",
            "Indiana Jones",
            "Fern Gully",
            "Rockin-a-doodle doo"
        );
    ?>

    <h1>My Favorite Things</h1>
    
        <!-- Task 3.2: Code to output things below -->
       <ol>
       <?php 
              $counter = 0;
        do { 
            echo $my_favorite_things[$counter]. "<li />";
            $counter++;
        } while ($counter < count($my_favorite_things));
        ?>    
        </ol>
    </body>


<?php
    //---------MOST PICKED IN ONE PICKING-------
    $max_query = "SELECT MAX(qty) FROM tomatoes"; // WHERE user = 'Brian'"; //** qtynow must be an INT for this to work; will NOT work on varchar!! */   
    $max_result = mysqli_query ($conn, $max_query); // Run the query.
    $max_row = mysqli_fetch_array($max_result);
    //echo $row[0];
    $maxPicked[0] = round($max_row[0],0);
    //echo $maxPicked;
?>
<?php
  //----------------AVG-------------
  $avg_query = "SELECT AVG(qty) FROM tomatoes";    
  $avg_result = mysqli_query ($conn, $avg_query); // Run the query.
  $avg_row = mysqli_fetch_array($avg_result);
  //echo $row[0];
  $avg[0] = round($avg_row[0],0);
  //echo $avg[0];
  
?>
<?php
  //----------------show tables-------------
  // - people always asked me '..if it can count more than tomatoes?' and I was like, 'no, just tomatoes'.
  // - this will display all of the tables of things we are counting, assuming we just have one db and it contains
  // - all of the tables of things counted.
  // SHOW TABLES
  $show_tbls = "SHOW TABLES FROM tomatoes"; // WHERE user = 'Brian'";    
  $show_tbls_result = mysqli_query ($conn, $avg_query); // Run the query.
  $show_tbls_row = mysqli_fetch_array($show_tbls_result);
  //echo $row[0];
  //$avg[0] = round($avg_row[0],0);
  //echo $avg[0];
  
?>
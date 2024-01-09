<?php

        include('header.php');
        include('../config/db_connect.php');
        include('../qty.php');
        include('../max.php');  
        include('../avg.php');
        
        //close connection
        mysqli_close($conn);
?>


 <body class="body">
  <div class="custBody custContainer infoBox">
    <h1>Count Tomatoes!</h1>
    <p><span class="title-blurb infoBox">
      To use the app, please visit <a href="http://photodub.biz.nf/tomatoes/">this page</a> on a web browser on your mobile device to count your tomatoes.
    </span>
    </p>


    <div class="qty-title">About:</div>
    <p class="infoBox">
        I made this record keeping web app for our tomatoes harvested in 2019. 
        My girlfriend grew cherry tomatoes on our west-facing deck where we lived.
        In total, we picked <?php echo $qty; ?> tomatoes from 07/02/2019 to 11/01/2019.
    </p>
    <p>
        This app uses PHP, mySQL, Bootstrap, and custom CSS.
    </p>


    <p>
     Feel free to add to this count to see how the app works.
      </p>
      <p><a href="add.php">
        <span class="btnBox addTomatoes">Add tomatoes <span style="font-size: 100%">+</span></span>
      </a></p>
	  <p>
       <span class="btnBox italic">Most Picked at once: <?php echo $maxPicked[0]; ?></span>
      </p>
          
      <p><span class="btnBox italic">Average: <?php echo $avg[0]; ?></span>
    </p>
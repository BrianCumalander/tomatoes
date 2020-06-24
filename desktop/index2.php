<?php 
        include('header.php');
        include('../config/db_connect.php');
        include('../qty.php');
        include('../max.php');  
        include('../avg.php');
        
        //close connection
        mysqli_close($conn);
?>

<body class="custBodyImage">
<div class="row">
  <div class="col-sm-4">
          <a href="../add.php">
          <label class="btnBox addTomatoes">Add tomatoes <label style="font-size:100%">+</label></label></a><br>
          <label class="btnBox btn3Color">Most Picked at once: <?php echo $maxPicked[0]; ?></label><br>
          <label class="btnBox btn4Color">Average <?php echo $avg[0]; ?></label><br>
          <a href="report.php"><label class="btnBox btn4Color">Report</label></a><br>
          </div>
  <div class="col-sm-8">
          <div class="qty">
                  <?php echo $qty; ?>
                          <p><span class="qty-title">Tomatoes</span></p>
                          <p></p>
                          <p>Tomato counter for your small apartment or deck garden</p>
          </div>
  </div>
</div>

<?php include('footer.php'); ?>
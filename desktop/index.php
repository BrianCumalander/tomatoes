<?php

        include('header.php');
        include('../config/db_connect.php');
        include('../qty.php');
        include('../max.php');  
        include('../avg.php');
        
        //close connection
        mysqli_close($conn);
?>


<div class="custBody custContainer">
<h4>"Item Counter interacts with mobile device to count your picked produce!"</h4>
              <div class="qty">
                      <?php echo $qty; ?>
              </div> 
              
              <span class="qty-title">Tomatoes</span>
              <p></p>
         
              


                      <div class="custContainer">
                          <a href="../add.php">
                          <label class="btnBox addTomatoes">Add tomatoes <label style="font-size:100%">+</label></label>
                          </a>
                          <label class="btnBox btn3Color">Most Picked at once: <?php echo $maxPicked[0]; ?></label><br>
                          <label class="btnBox btn4Color">Average <?php echo $avg[0]; ?></label>
                     </div>



                  <p></p>
                  
               <div class="custContainer">
                       <!--(comming soon, like the next time I get around to it..)
                       <a="#top"></a> export as <a href ="" class="btn-primary btn-sm">excel</a> <a href="" class="btn-warning btn-sm">pdf</a><br>
                          -->
                       <?php include('report.php'); ?>
                       <a href="#top" class="btn btn-danger"><i class="fa fa-home" aria-hidden="true"></i> Go back to top</a>
              
    <p></p>
               </div>

</div>

<?php include('footer.php'); ?>

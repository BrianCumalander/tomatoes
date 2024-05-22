<?php

        include('header.php');
        include('../config/db_connect.php');
        include('../qty.php');
        include('../max.php');  
        include('../avg.php');
        
        //close connection
        mysqli_close($conn);
?>

<?php include('../about.php'); ?>

    <div class="custContainer">
      <p><?php include('report.php'); ?>
      </p>
            
       <p>      
      <a href="#top">
         <span class="btnBox addTomatoes">Go back to top</span>
      </a> 
     </p>
    </div>
  

  <?php include('footer.php'); ?>
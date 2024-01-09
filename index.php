<?php

include('header.php');
include('config/db_connect.php');
include('qty.php');
include('max.php');  
include('avg.php');

//close connection
mysqli_close($conn);
?>



<!--Redirect screen sizes wider than a specified size, to the desktop page -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

<script style="text/JavaScript">
/* redirects if screen is too large (desktop) -because the layout is formatted for iphone sized phones only.  */
$(document).ready(function(){
  if($(window).width() >= 650) {
window.location = "./desktop/index.php";
  }
});
</script>




<div class="container container-fluid">
        <div class="row">
        
          <div class="col-sm-4">
        
            <div class="row">
              <div class="qty container"><?php echo $qty; ?>
              </div> 
              
              <span class="qty-title container">Tomatoes</span>
          
        
              
                <div class="row">
        
                    <!-- These button links are custom because the buttons are created with css.
 						 The text lays on top of the button, then I've created the 'linkOverlay'
                         with css that allows the entire button area to be clickable rather than 
                         only the text.
                    -->
                      
                  <div class="btnBox btn1Color"><p>Add<br>Tomatoes<br>
                    <label style="font-size:230%">+</label> <!--hard-coded font size since the '+' character needs higher-than-average font size-->
                    <a href="add.php">
                    <span class="linkOverlay"></span>
                    </a>
                  </div>
                  <p>
        
                  <div class="btnBox btn2Color"><br><p>Report</p>
                      <a href="report.php">
                      <span class="linkOverlay"></span>
                      </a>
                  </div>
                  <p>
        
        
                  <div class="btnBox btn3Color"><p>Most Picked<br>at once<br>
                      <label style="font-size:150%"><?php echo $maxPicked[0]; ?></label>
                      <a href="report.php">
                      <span class="linkOverlay"></span>
                      </a>
                      
                  </div>
                  <p>
                    
                  <div class="btnBox btn4Color"><br><p>About this<br>App
                      <label style="font-size:150%"></label>
                      <a href="./desktop/about.php">
                      <span class="linkOverlay"></span>
                      </a>
                  </div>
                  <p>
        
                </div>
              
            </div>
          </div>
        </div>
</div>

<?php include('footer.php'); ?>

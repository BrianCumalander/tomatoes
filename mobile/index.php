<?php

include('header.php');

?>



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
                      <a href="../">
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

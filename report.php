<?php include('header.php'); ?>
 
      <div class="txt-white" id="top">
          <p><span class="qty-title container">Tomato Pickin' Report</span></p>
          
    <a href="index.php" class="btn btn-danger"><i class="fa fa-home" aria-hidden="true"></i> Go back</a>
    <p></p>
        
        <table class="table table-bordered table-sm">
          <tbody>
            <tr>
              <th><h5>Quantity Picked</h5></th> <th><h5>UTC Time</h5></th>
            </tr>
          
        
          <?php
        
          include('config/db_connect.php');
        
        
          //return records, decending order
          $sqlt = "SELECT qty, created_at FROM tomatoes ORDER BY created_at DESC";
        
          $resultt = $conn->query($sqlt);
          if ($resultt->num_rows > 0) {
        
            // output data of each row with table formatting
              while($row = $resultt->fetch_assoc()) {
                  
                  echo "<tr><td><h6>" . $row["qty"] . "</h6></td><td><h6>" . $row["created_at"]. "</h6></td></tr>";
              }
          } else {
              echo "0 results";
          }
        
        
        
          //return total record count, with formatting
          $sqlRows = 'SELECT count(1) FROM tomatoes';
          $rowTotal = mysqli_query($conn, $sqlRows); 
          $rows = mysqli_fetch_array($rowTotal);    
        
          $totalRows = $rows[0];
          echo '<p><h3><span class="badge badge-secondary">' . $totalRows . ' records</span></h3></p>';     

        
          $conn->close();
          ?> 
        
          </tbody>
        </table>
        
        </div>

            
       <p>      
      <a href="#top">
         <span class="btnTop btnRed">Go back to top</span>
      </a> 
     </p>
    
  

  <?php include('footer.php'); ?>
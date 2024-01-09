
          <p><h1>Tomato Pickin' Report</h1></p>

        
        <table class="table table-bordered">
          <tbody>
            <tr>
              <th><h5>Quantity Picked</h5></th> <th><h5>UTC Time</h5></th>
            </tr>
          
        
          <?php
        
          include('../config/db_connect.php');
        
          //build the table:
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
          echo '<h4>Total tomatoes picked: ' . $qty . '</h4><h4>Total times picked: ' . $totalRows . '</h4>';     

        
          $conn->close();
          ?> 
        
          </tbody>
        </table>

       
        

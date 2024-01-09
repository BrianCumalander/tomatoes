<?php

include('../config/db_connect.php');

	//$errors will catch any errors. currently errors are sent to => nothing, as in, '' for each field.
	$errors = array('qty'=>'');

	if(isset($_POST['submit'])){

		//check if qty field is empty, POST check
		if(empty($_POST['qty'])){
			$qty = $_POST['qty'];
			if(!preg_match('/^([a-z A-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $qty)){
				$errors['qty'] = '<em>Please enter the number of tomatoes to add or, hit Cancel</em>';
			}
		}

		if(array_filter($errors)){
			//echo 'errors in the form';
		} else {
                        
                /*
                just before we go back to the index.php, we will save the data to the db.
			    we take each input value that has been validated in the form (protects 
                from garbage input) and now we check it against real_escape_string to 
                protect from sql injection attacks and in doing that, we re-assign the value to 'qty'.
                */
                $qty = mysqli_real_escape_string($conn, $_POST['qty']);

                //create sql to insert in to the columns, the values...
                $sql = "INSERT INTO tomatoes(qty) VALUES('$qty')";
                //save to db and check for errors. 
                //if successfully (connects, and_my_$sql_string_submits_then_go_to_index.php)
                if(mysqli_query($conn, $sql)){
			//success
			header('Location: index.php');
			} else {
                        /*
                        on error, tell us there is an error, and concatonate with the 
                        actual error (grab the error and parameter is the connection)
                        */
                        echo 'query error: '. mysqli_error($conn);
                        }
		}
              }	//end of POST check

	//close connection
	mysqli_close($conn);
?>

<?php include('header.php'); ?>

  <body class="body">


   
<div class="text-white">
    <span class="qty-title">Add Tomatoes!</span><br>

    <form action="add.php" method="POST">
		<p>Enter number of tomatoes to add:</p>
		<!--<input type="tel" name="qty" value="<?php echo htmlspecialchars($qty); ?>"> 
Returned error in input box:
"htmlspecialchars(): Passing null to parameter #1 ($string) of type string is deprecated"
I updated code in next line to resolve. This prevents '0' as an entry as well. In which,
the user would need to choose to 'cancel' their input.-->
            
        <input type="tel" name="qty" value="<?php echo htmlspecialchars($qty ?? ''); ?>">
		<div class="red-text">
                 <?php echo $errors['qty']; ?>
		 </div>
                 <p></p>
		 
                 <p>
                 <input type="submit" name="submit" value="Submit" class="btn btn-primary btn-lg">
                 <a class="btn btn-warning btn-lg" href="index.php" role="button">Cancel</a>
                 </p>

	</form>
</div>

<?php include('footer.php'); ?>
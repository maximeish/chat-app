 <?php
    // Connection string from the other file
	session_start();
    include_once "config.php";
		echo "<h2>List of my system users - From MySQL Database</h2><hr/>";
		// Query to select the data from table called user
		$query = "SELECT * FROM students";
		// Process the query with the database server
		$re = mysqli_query($conn, $query);
		// Check if the connection is OK
        	if($re){
			//Look through the table and save in the ARRAY
			while($row = mysqli_fetch_array($re)){
				echo $row['stud_name']."<br>";
			}
		}else{
			// If something is wrong in the query, this message error is
			// coming from database server validation.
			echo "Wrong query " .mysqli_error($conn);
		}


 ?>

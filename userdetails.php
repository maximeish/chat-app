<?php
  require("config.php");
  echo "<h2>User details</h2><hr/>";
  //echo $_GET["UserId"];
  $query = "SELECT * FROM students WHERE id=".$_GET["stud_id"];
  //$query = "DELETE FROM user WHERE id=".$_GET["UserId"];
  $rs = mysqli_query($conn,$query);
		if($rs){
		 while($row = mysqli_fetch_array($rs)){
			echo "<b>ID:</b> ".$row['stud_id']."<br/>".
			      "<b>Names:</b> ".$row['stud_name']."<br/>".
			      "<b>City:</b> ".$row['city']."<br/>";
		 }
		}else{
			echo "Not working ".mysqli_error($conn);
		}
		echo "<hr/><a href='admin.php'><button>Back</button></a>";
?>
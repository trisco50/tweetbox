<?php
	require 'db.php';
	
	$query = "SELECT * FROM Messages";
	$result = mysqli_query($db, $query)
		or die("No messages");
		
		//$message = array();
		while ($row = mysqli_fetch_assoc($result)) {
			$message = $row['Message'];
			echo "<tr><td>$message</td></tr><br />";
			//echo json_encode($message);
		}

	
	mysqli_close($db);
?>
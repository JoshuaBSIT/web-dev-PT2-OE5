<?php
require_once('connect.php');
if($dbc) {

	$query = "SELECT * FROM users";
	$result - @mysqli_query($dbc, $query);
	
	while ($row = mysqli_query_array($result)) {
	$fname = $row['first_name'];
	$lname = $row[2];
	echo '</br>'.$fname.' '$lname;
	
	}
	mysqli_free_result($result);
	mysqli_close($dbc);
	
	}
	else{
		exit('Could not connect to database '.mysqli_connect_error());
		}
		?>
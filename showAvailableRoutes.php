<?php
	include ('connectDB.php');

	$query = "SELECT User.Name, Route.Date, Route.SourceLocation, Route.TargetLocation FROM Route
		JOIN Driver ON Route.DriverID=Driver.DriverID
		JOIN User ON Driver.UserID=User.ID
		WHERE Route.Date >= NOW();";
	$result = mysqli_query($conn,$query);

	if (!$result)  die("Query to show fields from table failed!" . mysqli_error());

	$fields_num = mysqli_num_fields($result);
	echo "<h1>Available Offers</h1>";
	echo "<table border='1'><tr>";
	// printing table headers
	for($i=0; $i<$fields_num; $i++) {	
		$field = mysqli_fetch_field($result);	
		echo "<td><b>{$field->name}</b></td>";
	}
	echo "</tr>\n";
	while($row = mysqli_fetch_row($result)) {	
		echo "<tr>";	
		// $row is array... foreach( .. ) puts every element
		// of $row to $cell variable	
		foreach($row as $cell)		
			echo "<td>$cell</td>";	
		echo "</tr>\n";
	}
	mysqli_free_result($result);
	mysqli_close($conn);

?>
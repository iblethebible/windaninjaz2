<?php
$sql = "SELECT * FROM job WHERE id = $job_id;";
echo "<p>The SQL is: " . $sql . "</p>";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	echo '<table border="1">';
	echo '<tr>';
    echo '<th>ID';
	echo '<th>House</th>';
	echo '<th>Street Name</th>';
	echo '<th>Price</th>';
	echo '<th>Frequency</th>';
	echo '<th>Completed</th>';
	echo '<th><b>Next Due</b></th>';
	echo '<th>Zone</th>';
	echo '<th>info</th>';

	//echo '<th>COMPLETE</th>';
	
	echo '</tr>';
	
	while ($row = $result->fetch_assoc() ) {
		echo '<tr>';
        echo '<td>' . $row["id"] . '</td>';
		echo '<td>' . $row["houseNumName"] . '</td>';
		echo '<td>' . $row["streetName"] . '</td>';
		echo '<td>£' . $row["price"] . '</td>';
		echo '<td>' . $row["frequency"] . ' Weeks</td>';
		echo '<td>' . $row["dateLastDone"] . '</td>';
		echo '<td>' . $row["dateNextDue"] . '</td>';
		echo '<td>' . $row["zone_id"] . '</td>';
        echo '<td>' . $row["info"] . '</td>';
        echo '</tr>';
		
	}
	echo '</table>';

}

?>

$var_price = $row["price"];
$var_frequency = $row["frequency"];
$var_info = $row["info"];
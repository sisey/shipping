<?php
session_start();
$servername = "localhost";
$username = "sisey";
$password = "shaban123";
$dbname = "muskum8_security";


  
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
	
}
$tracking = $_SESSION["track"];
	$sql = "SELECT * FROM livetrack WHERE Tracking ='$tracking'";
	

$result = $conn->query($sql);
		if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {

echo "<tr>";
		echo "<td width='18%' bgcolor='#DDDDDD'>
			<font face='Arial' size='2'>" .$row['Date']."</font></td>";

		echo "<td width='21%' bgcolor='#DDDDDD'>
			<font face='Arial' size='2'>" .$row['Location']."</font></td>";
		echo "<td width='13%' bgcolor='#DDDDDD'>
			<font face='Arial' size='2'>" .$row['Activity']."</font></td>";
		echo "<td width='18%' bgcolor='#DDDDDD'>
			<font face='Arial' size='2' color='#FF0000'>" .$row['Time']."</font></td>";
		echo "</tr>";
}
}
?>



<?php
session_start();

	define('INCLUDE_CHECK',1);
	require "functions.php";
	
	 //server variables
$servername = "localhost";
$username = "muskum8_security";
$password = "shaban123";
$dbname = "muskum8_security";
 
 
  
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//if ($_SERVER["REQUEST_METHOD"] == "POST") {
$_SESSION["track"] =   $tracking = ($_POST["track"]);
//}


//save data to database function writeMsg() {
	$sql = "SELECT * FROM livetrack WHERE Tracking ='$tracking'";
$result = $conn->query($sql);

if ($result->num_rows == 0) {
header("Location: track.php");
exit;

   
} else 
 
header("Location: displays.php");
exit;

function msg($status,$txt)
{
	return '{"status":'.$status.',"txt":"'.$txt.'"}';
}

?>
<?php
// Start the session

session_start();

  
  //server variables
$servername = "localhost";
$username = "muskum8_security";
$password = "shaban123";
$dbname = "muskum8_security";

 
  
 
// we check if everything is filled in


if(empty($_POST['trackingNumber']) || 
empty($_POST['date']) || 
empty($_POST['location'])|| 
empty($_POST['activity']) 


 )
{
	die(msg(0,"All the fields are required"));
}






// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


//// escape variables for security

$trackingNumber = $date = $location = $activity = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $trackingNumber = test_input($_POST["trackingNumber"]);
  $date = test_input($_POST["date"]);
  $location = test_input($_POST["location"]);

  $activity = test_input($_POST["activity"]);
  
 
}

//save data to database function writeMsg() {

	$sql="INSERT INTO livetrack (Tracking,Time,Location,Activity)
 VALUES ('$trackingNumber','$date', '$location', '$activity') ";

if ($conn->query($sql) === FALSE) {
     echo "Error: " . $sql . "<br>" . $conn->error;
   
}

header("Location: track.php");
exit;


function msg($status,$txt)
{
	return '{"status":'.$status.',"txt":"'.$txt.'"}';
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>




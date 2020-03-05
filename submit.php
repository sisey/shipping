<?php
// Start the session

session_start();

  
  //server variables
$servername = "localhost";
$username = "muskum8_security";
$password = "shaban123";
$dbname = "muskum8_security";

 
  
 
// we check if everything is filled in


//if(empty($_POST['name']) || 
//empty($_POST['adres']) || 
//empty($_POST['city'])|| 
//empty($_POST['ctry'])|| 
//empty($_POST['phone'])|| 
//empty($_POST['details']) || 
//empty($_POST['depart_from'])||
// empty($_POST['destination'])
//
// 
// )
//{
//	die(msg(0,"All the fields are required"));
//}






// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


//// escape variables for security

$name = $adres = $city = $ctry = $phone = $details = $depart_from = $destination = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $adres = test_input($_POST["adres"]);
  $city = test_input($_POST["city"]);

  $ctry = test_input($_POST["ctry"]);
  $phone = test_input($_POST["phone"]);
  $details = test_input($_POST["details"]);
  $depart_from = test_input($_POST["depart_from"]);
  $destination = test_input($_POST["destination"]);

 
  
 
}


//save data to database function writeMsg() {

	$sql="INSERT INTO tracking (NAME,ADRES,CITY,CTRY,PHONE,DETAILS,DEPART,DESTINATION)
 VALUES ('$name','$adres', '$city', '$ctry', '$phone','$details', '$depart_from', '$destination') ";

if ($conn->query($sql) === FALSE) {
     echo "Error: " . $sql . "<br>" . $conn->error;
   
}

if ($conn->query($sql) === TRUE) {
   $last_id = $conn->insert_id;

  $_SESSION["id"] = "$last_id";  



  
}


echo msg(1,"display.php");


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




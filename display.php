<!--

Tutoralzine Demo 
Original tutorial: Creating a Facebook-like Registration Form with jQuery
Tutorial URL: http://tutorialzine.com/2009/08/creating-a-facebook-like-registration-form-with-jquery/

You are free to use the following demo code for any purpose you see fit.

-->


<?php
session_start();
$tracking = $_SESSION["id"];

	define('INCLUDE_CHECK',1);
	require "functions.php";
	
	//server variables
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




//save data to database function writeMsg() {
	$sql = "SELECT * FROM tracking WHERE TRACK ='$tracking'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

  $name = $row["NAME"];
  $adres = $row["ADRES"];
  $city = $row["CITY"];
  $ctry= $row["CTRY"];

  $phone = $row["PHONE"];
  $details = $row["DETAILS"];
  $depart_from = $row["DEPART"];
  $destiation= $row["DESTINATION"];
  $depart_date= $row["DDATE"];
  $track= $row["TRACK"];

  
	  
	}  
	   
    }

function msg($status,$txt)
{
	return '{"status":'.$status.',"txt":"'.$txt.'"}';
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Bolt Express Shipping Company Limited</title>

<link rel="stylesheet" type="text/css" href="demo.css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript" src="script.js"></script>


</head>

<body>

<div id="div-regForm">

<div class="form-title"> Scotia Shipping Company Limited</div>
<div class="form-sub-title">THE NEW TRACKING NUMBER IS: <?php echo "$track" ?>CB0269733 </div>

<form id="regForm" action="submit.php" method="post">

<table>
  <tbody>
  
  <tr>
    <td>&nbsp;</td>
    <td><img id="loading" src="img/ajax-loader.gif" alt="working.." /> <a href="index.html">BACK TO TRACKING</a>
      </td>
  </tr>
  
  
  </tbody>
</table>

</form>

<div id="error">
&nbsp;
</div>

</div>

</body>
</html>

<?php
session_start();


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


$tracking = $_SESSION["track"];

//save data to database function writeMsg() {
	$sql1 = "SELECT * FROM tracking WHERE TRACK ='$tracking'";
	
	$sql = "SELECT * FROM livetrack WHERE Tracking ='$tracking' ORDER BY Date DESC"; 
	
$result1 = $conn->query($sql1);
$result = $conn->query($sql);

if ($result1->num_rows > 0) {
    // output data of each row
    while($row = $result1->fetch_assoc()) {

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

  $DEP_DATE= $row["DEP_DATE"];
  $CHARGE= $row["CHARGE"];
  $AMOUNT= $row["AMOUNT"];
	  
	  
	}  
	   
    }

function msg($status,$txt)
{
	return '{"status":'.$status.',"txt":"'.$txt.'"}';
}

?>
<html>

<head>
<meta http-equiv="Content-Language" content="en-us">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>TRACKING : Scotia Shipping Company Limited</title>
</head>

<body bgcolor="#000000">

<div align="center">
	<table border="0" width="74%" cellspacing="0" cellpadding="0">
		<tr>
			<td colspan="10">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10" bgcolor="#000000">
			<p align="right"><b><font color="#FFFFFF" face="Arial">&nbsp;&nbsp; 
			<a href="index.html"><font color="#FFFFFF">
			<span style="text-decoration: none">Home</span></font></a>&nbsp;&nbsp;&nbsp;
			<a href="about.html"><font color="#FFFFFF">
			<span style="text-decoration: none">&nbsp;</span></font></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="contact.html"><font color="#FFFFFF"><span style="text-decoration: none">&nbsp;</span></font></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			</font></b>
		  </td>
		</tr>
		<tr>
			<td width="1%" bgcolor="#666666" rowspan="15">
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p>&nbsp;</td>
			<td width="21%" bgcolor="#666666" rowspan="15">&nbsp;<p>
			<font color="#ffffff"><strong><font face="Arial">CONSIGNEE DETAILS</font></strong><font face="Arial"><font size="2"><br>
			<b><?php echo "$name" ?>&nbsp; &nbsp; &nbsp;&nbsp;<br>
			<?php echo "$adres" ?>&nbsp;&nbsp;&nbsp; <br>
			<?php echo "$city" ?>&nbsp; <br>
			<?php echo "$ctry" ?>&nbsp; &nbsp; &nbsp;&nbsp;<br>
			</b></font><strong><font size="2">&nbsp; </font><br>
&nbsp;</strong></font></font></p>
			<p>
			<b><font size="2" face="Arial" color="#FFFFFF">TELEPHONE NUMBER</font></b><br>
			<strong style="font-weight: 400">
			<font face="Arial" color="#FFFFFF" size="2"><?php echo "$phone" ?></font></strong></p>
			<p>&nbsp;</p>
			<p><font color="#ffffff"><font face="Arial"><strong>&nbsp; PACKAGE 
			DETAILS </strong></font><br>
			&nbsp; <?php echo "$details" ?></font></p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p>&nbsp;</td>
			<td width="1%" bgcolor="#666666" rowspan="15">&nbsp;</td>
			<td width="1%" bgcolor="#F7F7F7" rowspan="15">&nbsp;</td>
			<td bgcolor="#FFFFFF" colspan="4">
			<p align="left"><strong><font face="Arial" size="5">Tracking No : 
			<?php echo "$track" ?>CB0269733</font></strong><b><font size="5" face="Arial">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		  </font><font face="Arial" color="#FF0000">&nbsp;</font></b><font face="Arial"><a href="index.html"><span style="text-decoration: none"><font color="#FF0000">Logout</font></span></a></font></td>
			<td width="1%" bgcolor="#F7F7F7" rowspan="15">&nbsp;</td>
			<td width="1%" bgcolor="#DDDDDD" rowspan="15">
			<font color="#FFFFFF" face="Arial">
                                <br>
&nbsp;</font></td>
		</tr>
		<tr>
			<td bgcolor="#FF9900" colspan="4">
			&nbsp;<b><font size="5" face="Arial"> On Schedule</font></b></td>
		</tr>
		<tr>
			<td bgcolor="#FFFFFF" colspan="4">
			&nbsp;<font face="Arial"><b>Airport Departure : <?php echo "$depart_from" ?> &nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; 
			&nbsp; <font color="#FF0000">Destination</font> : 
			<?php echo "$destiation" ?></b></font></td>
		</tr>
		<tr>
			<td bgcolor="#FFFFFF" colspan="4">
			<font size="2" face="Arial" color="#FF0000">All Shipment Travel 
			Activity is displayed in local time for the location</font> </td>
		</tr>
		<tr>
			<td width="30%" bgcolor="#FFFFFF">
			<font size="2" face="Arial" color="#FF0000">&nbsp;</font><b><font face="Arial" size="2">Date 
			/ Time</font></b></td>
			<td width="50%" bgcolor="#FFFFFF">
			<b><font face="Arial" size="2">&nbsp;Activity</font></b></td>
			<td width="30%" bgcolor="#FFFFFF">
			<b><font face="Arial" size="2">Location</font></b></td>
			<td width="15%" bgcolor="#FFFFFF">
			<b><font face="Arial" size="2"></font></b></td>
		</tr>
        <?php
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {

echo "<tr>";
		echo "<td width='18%' bgcolor='#DDDDDD'>
			<font face='Arial' size='2'>" .$row['Time']."</font></td>";

		echo "<td width='21%' bgcolor='#DDDDDD'>
			<font face='Arial' size='2'>" .$row['Activity']."</font></td>";
		echo "<td width='13%' bgcolor='#DDDDDD'>
			<font face='Arial' size='2'>" .$row['Location']."</font></td>";
		echo "<td width='18%' bgcolor='#DDDDDD'>
			<font face='Arial' size='2' color='#FF0000'>" .$row['']."</font></td>";
		echo "</tr>";
}
}
?>
		<tr>
		  <td width="7%" bgcolor="#DDDDDD">&nbsp;</td>
			<td width="11%" bgcolor="#DDDDDD">&nbsp;</td>
			<td width="17%" bgcolor="#DDDDDD">&nbsp;</td>
			<td width="39%" bgcolor="#DDDDDD">&nbsp;</td>
	  </tr>
		
		
		

  </table>
</div>
			<p align="center"><font color="#FFFFFF" face="Arial" size="2">
            
			 Copyright2017 &copy; Scotia Shipping Company Limited All Rights Reserved.</font></body></html>
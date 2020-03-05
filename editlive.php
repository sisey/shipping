<!--

Tutoralzine Demo 
Original tutorial: Creating a Facebook-like Registration Form with jQuery
Tutorial URL: http://tutorialzine.com/2009/08/creating-a-facebook-like-registration-form-with-jquery/

You are free to use the following demo code for any purpose you see fit.

-->


<?php
	define('INCLUDE_CHECK',1);
	require "functions.php";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Scotia Shipping Company</title>

<link rel="stylesheet" type="text/css" href="demo.css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript" src="script2.js"></script>


</head>

<body>

<div id="div-regForm">

<div class="form-title">Scotia Shipping Company</div>
<div class="form-sub-title">UPDATE TRACKING </div>

<form id="regForm" action="submit_to_live.php" method="post">

<table>
  <tbody>
  <tr>
    <td><label for="fname">Tracking Number:</label></td>
    <td><div class="input-container"><input name="trackingNumber" id="trackingNumber" type="text" /></div></td>
  </tr>
  <tr>
    <td><label for="lname">DATE(Time):</label></td>
    <td><div class="input-container"><input name="date" id="date" type="text" /></div></td>
  </tr>
  <tr>
    <td><label for="email">LOCATION:</label></td>
    <td><div class="input-container"><input name="location" id = "location" type="text" /></div></td>
  </tr>
  <tr>
    <td><label for="pass">ACIVITY(STATUS):</label></td>
    <td><div class="input-container"><input name="activity" id="activity" type="text" /></div></td>
  </tr>
  
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" class="greenButton" value="SAVE RECORDS" /><img id="loading" src="img1/ajax-loader.gif" alt="working.." />
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

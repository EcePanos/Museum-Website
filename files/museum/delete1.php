<!DOCTYPE html>
<html>
<head>
	<title>Modern Art Museum</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="museum.css" />
	<script type = "text/javascript" src = "museum.js"></script>
</head>
<body>
<?php 

$link = mysql_connect("eu-cdbr-azure-north-d.cloudapp.net", "b20a875f2042da", "48e6a9e7");
mysql_select_db("acsm_87fbc5becefb8be");
$id=$_GET['id'];
$sql="DELETE FROM employee WHERE idemployee=$id";
mysql_query("$sql");
mysql_close($link);?>
<div class="row">&nbsp</div>
 <div class="row">
 <div class="col-5">&nbsp</div>
 <div class="col-2" align="center">
 <button type="button" class=myButton onClick=window.location.replace("profile.php");>Return</button>
 </div>
 <div class="col-5">&nbsp</div>
 </div>
</body>
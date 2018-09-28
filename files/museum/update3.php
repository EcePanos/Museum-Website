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
$count=$_POST['count3'];
$link = mysql_connect("eu-cdbr-azure-north-d.cloudapp.net", "b20a875f2042da", "48e6a9e7");
mysql_select_db("acsm_87fbc5becefb8be");
if($_POST['artworknewid']!=""){
	$id=(int)$_POST['artworknewid'];
	$name=$_POST['artworknewname'];
	$artist=$_POST['artworknewartist'];
	$style=$_POST['artworknewstyle'];
	$image = addslashes(file_get_contents($_FILES['artworknewimage']['tmp_name']));
	$sql="INSERT INTO artwork VALUES($id,'$name','$artist','$style','$image')";
	mysql_query("$sql");
}
for($i=1;$i<$count;$i+=4){
	$id=(int)$_POST[$i];
	$name=$_POST[$i+1];
	$artist=$_POST[$i+2];
	$style=$_POST[$i+3];
	
	$sql="UPDATE artwork SET idartwork=$id,name='$name',artist='$artist',style='$style' WHERE idartwork=$id";
	mysql_query("$sql");
}
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
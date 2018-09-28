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
$count=$_GET['count'];
$link = mysql_connect("eu-cdbr-azure-north-d.cloudapp.net", "b20a875f2042da", "48e6a9e7");
mysql_select_db("acsm_87fbc5becefb8be");
if($_GET['employeenewid']!=""){
	$id=(int)$_GET['employeenewid'];
	$fname=$_GET['employeenewfname'];
	$lname=$_GET['emplyeenewlname'];
	$age=(int)$_GET['employeenewage'];
	$address=$_GET['employeenewaddress'];
	$phone=(int)$_GET['employeenewphone'];
	$email=$_GET['employeenewmail'];
	$salary=(float)$_GET['employeenewsalary'];
	$holidays=(int)$_GET['employeenewholidays'];
	$deptid=(int)$_GET['employeenewdeptid'];
	$sql="INSERT INTO employee VALUES($id,'$fname','$lname',$age,'$address',$phone,'$email',$salary,$holidays,$deptid)";
	mysql_query("$sql");
}
for($i=1;$i<$count;$i+=10){
	$id=(int)$_GET[$i];
	$fname=$_GET[$i+1];
	$lname=$_GET[$i+2];
	$age=(int)$_GET[$i+3];
	$address=$_GET[$i+4];
	$phone=(int)$_GET[$i+5];
	$email=$_GET[$i+6];
	$salary=(float)$_GET[$i+7];
	$holidays=(int)$_GET[$i+8];
	$deptid=(int)$_GET[$i+9];
	$sql="UPDATE employee SET idemployee=$id,fname='$fname',lname='$lname',age=$age,address='$address',phone=$phone,email='$email',salary=$salary,holidays=$holidays,department_iddepartment=$deptid WHERE idemployee=$id";
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
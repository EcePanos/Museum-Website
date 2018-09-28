<!DOCTYPE html>
<html>
<head>
	<title>Modern Art Museum</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="museum.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<link rel="icon" 
      type="image/png" 
      href="fi.png">
<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script type = "text/javascript" src = "museum.js"></script>
</head>
<body>
<?php 
	//$name=$_GET['user'];
	//$pass=$_GET['pass'];
?>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="#">DB Management</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><button class="btn btn-primary btn-lg btn-block" onclick="show1()">Employees</button></li>
        <li><button class="btn btn-primary btn-lg btn-block" onclick="show2()">Departments</button></li> 
        <li><button class="btn btn-primary btn-lg btn-block" onclick="show3()">Artworks</button></li> 
      </ul>
    </div>
  </div>
</nav>


<div id="employees" align=center>
<form id="employee" method="GET">
<div class="table-responsive">
<table border="1">
<tr>
<th>ID</th><th>FName</th><th>LName</th><th>Age</th>
<th>Address</th><th>Phone</th><th>Email</th>
<th>Salary</th><th>Holidays</th><th>Department</th>
</tr>
<?php
$link = mysql_connect("eu-cdbr-azure-north-d.cloudapp.net", "b20a875f2042da", "48e6a9e7");
mysql_select_db("acsm_87fbc5becefb8be");
	$sql = "SELECT * FROM employee";
  $result = mysql_query("$sql");
  $num=1;
  while($row = mysql_fetch_assoc($result)){
  ?>
  <tr>
  <td><input size=3 name="<?php echo $num ?>" value="<?php echo $row['idemployee']?>"></td><?php $num++;?>
  <td><input size=12 name="<?php echo $num ?>" value="<?php echo $row['fname']?>"></td><?php $num++;?>
  <td><input size=12 name="<?php echo $num ?>" value="<?php echo $row['lname']?>"></td><?php $num++;?>
  <td><input size=2 name="<?php echo $num ?>" value="<?php echo $row['age']?>"></td><?php $num++;?>
  <td><input size=20 name="<?php echo $num ?>" value="<?php echo $row['address']?>"></td><?php $num++;?>
  <td><input size=10 name="<?php echo $num ?>" value="<?php echo $row['phone']?>"></td><?php $num++;?>
  <td><input size=20 name="<?php echo $num ?>" value="<?php echo $row['email']?>"></td><?php $num++;?>
  <td><input size=7 name="<?php echo $num ?>" value="<?php echo $row['salary']?>"></td><?php $num++;?>
  <td><input size=2 name="<?php echo $num ?>" value="<?php echo $row['holidays']?>"></td><?php $num++;?>
  <td><input size=1 name="<?php echo $num ?>" value="<?php echo $row['department_iddepartment']?>"></td><?php $num++;?>
  <td><a class=button href="delete1.php?id=<?php echo $row['idemployee']?>">Delete</a>
  </tr>
  <?php }
	mysql_close($link);?>
  <tr><th colspan="11">New Entry</th></tr>
  <tr>
  <input type="hidden" name="count" value="<?php echo ($num-1)?>">
  <td><input name="employeenewid" size=3></td>
  <td><input name="employeenewfname" size=12></td>
  <td><input name="emplyeenewlname" size=12></td>
  <td><input name="employeenewage" size=2></td>
  <td><input name="employeenewaddress" size=20></td>
  <td><input name="employeenewphone" size=10></td>
  <td><input name="employeenewmail" size=20></td>
  <td><input name="employeenewsalary" size=7></td>
  <td><input name="employeenewholidays" size=2></td>
  <td><input name="employeenewdeptid" size=1></td>
  </tr>
</table>
</div>
<p align='center'><button type="button" onclick="submitForm1('update.php')" class=myButton>Save Changes</button></p>
</form>
</div>
<div id="departments"  align=center>
<form id="dept" method="GET">
<div class="table-responsive">
<table border="1">
<tr>
<th>ID</th><th>Name</th>
</tr>
<?php
	$link = mysql_connect("eu-cdbr-azure-north-d.cloudapp.net", "b20a875f2042da", "48e6a9e7");
mysql_select_db("acsm_87fbc5becefb8be");
	$sql = "SELECT * FROM department";
  $result = mysql_query("$sql");
  $num2=1;
  while($row = mysql_fetch_assoc($result)){
  ?>
  <tr>
  <td><input name="<?php echo $num2 ?>" size=3 value="<?php echo $row['iddepartment']?>"></td><?php $num2++; ?>
  <td><input size=12 name="<?php echo $num2 ?>" value="<?php echo $row['name']?>"></td><?php $num2++; ?>
  
  <td><a class=button href="delete2.php?id=<?php echo $row['iddepartment']?>">Delete</a>
  </tr>
  <?php }
	mysql_close($link);?>
  <tr><th colspan="3">New Entry</th></tr>
  <tr>
  <input type="hidden" name="count2" value="<?php echo ($num2-1)?>">
  <td><input name="deptnewid" size=3></td>
  <td><input name="deptnewname" size=12></td>
  
  </tr>
</table>
</div>
<p align='center'><button type="button" onclick="submitForm2('update2.php')" class=myButton>Save Changes</button></p>
</form>
</div>
<div id="artworks"  align=center>
<form id="artwork" method='POST' enctype='multipart/form-data'>
<div class="table-responsive">
<table border="1">
<tr>
<th>ID</th><th>Name</th><th>Artist</th><th>Style</th>
<th>Image</th>
</tr>
<?php
	$link = mysql_connect("eu-cdbr-azure-north-d.cloudapp.net", "b20a875f2042da", "48e6a9e7");
mysql_select_db("acsm_87fbc5becefb8be");
	$sql = "SELECT * FROM artwork";
  $result = mysql_query("$sql");
  $num3=1;
  while($row = mysql_fetch_assoc($result)){
  ?>
  <tr>
  <td><input name="<?php echo $num3 ?>" size=3 value="<?php echo $row['idartwork']?>"></td><?php $num3++;?>
  <td><input name="<?php echo $num3 ?>" size=12 value="<?php echo $row['name']?>"></td><?php $num3++;?>
  <td><input name="<?php echo $num3 ?>" size=12 value="<?php echo $row['artist']?>"></td><?php $num3++;?>
  <td><input name="<?php echo $num3 ?>" size=12 value="<?php echo $row['style']?>"></td><?php $num3++;?>
  <td align=center><img src="getImage.php?id=<?php echo $row['idartwork']?>" width="30px" height="30px" /></td>
  <td><a class=button href="delete3.php?id=<?php echo $row['idartwork']?>">Delete</a>
  </tr>
  <?php }
	mysql_close($link);?>
  <tr><th colspan="11">New Entry</th></tr>
  <tr>
  <input type="hidden" name="count3" value="<?php echo ($num3-1)?>">
  <td><input name="artworknewid" size=3></td>
  <td><input name="artworknewname"size=12></td>
  <td><input name="artworknewartist" size=12></td>
  <td><input name="artworknewstyle" size=12></td>
  <td><input type="file" name="artworknewimage"></td>
  </tr>
</table>
</div>
<p align='center'><button type="button" onclick="submitForm3('update3.php')" class=myButton>Save Changes</button></p>
</form>
</div>
</body>
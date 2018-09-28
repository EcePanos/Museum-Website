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
<div id="myCarousel" class="carousel slide" data-ride="carousel">
<div class="carousel-inner" role="listbox">
<?php
	$count=0;
  $name = $_GET['term'];
$link = mysql_connect("eu-cdbr-azure-north-d.cloudapp.net", "b20a875f2042da", "48e6a9e7");
mysql_select_db("acsm_87fbc5becefb8be");
  $sql = "SELECT * FROM artwork WHERE name like '$name' OR artist like '$name' OR style like '$name'";
  $result = mysql_query("$sql");
  while($row = mysql_fetch_assoc($result)){
  ?>
		<?php
		if($count==0){echo "<div class='item active'>";}
		else{echo "<div class='item'>";} ?>
      <img src="getImage.php?id=<?php echo $row['idartwork'] ?>"/>
		<div class="carousel-caption">
        <h3>Artwork Name: <?php echo $row['name']?></h3>
        <h3>Artist:<?php echo $row['artist']?></h3>
		<h3>Style:<?php echo $row['style']?></h3>
      </div>
    </div>
		
	




<?php
$count++;
  }
  mysql_close($link); ?>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
 
 <div class="row">&nbsp</div>
 <div class="row">
 <div class="col-5">&nbsp</div>
 <div class="col-2" align="center">
 <button type="button" class=myButton onClick=back()>Return</button>
 </div>
 <div class="col-5">&nbsp</div>
 </div>
</body>
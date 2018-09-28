<?php

  $id = $_GET['id'];
  // do some validation here to ensure id is safe

 $link = mysql_connect("eu-cdbr-azure-north-d.cloudapp.net", "b20a875f2042da", "48e6a9e7");
mysql_select_db("acsm_87fbc5becefb8be");
  $sql = "SELECT image FROM artwork WHERE idartwork=$id";
  $result = mysql_query("$sql");
  $row = mysql_fetch_assoc($result);
  mysql_close($link);

  header("Content-type: image/png");
  echo $row['image'];
?>
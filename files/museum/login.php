<?php
$link = mysql_connect("eu-cdbr-azure-north-d.cloudapp.net", "b20a875f2042da", "48e6a9e7");
mysql_select_db("acsm_87fbc5becefb8be");
$username=$_POST['username1']; // Fetching Values from URL.
$password= $_POST['password1']; // Password Encryption, If you like you can also leave sha1.
// check if e-mail address syntax is valid or not

// Matching user input email and password with stored email and password in database.
$result = mysql_query("SELECT * FROM user WHERE username='$username' AND password='$password'");
$data = mysql_num_rows($result);
if($data==1){
echo "Successfully Logged in...";
}else{
echo "Email or Password is wrong...!!!!";
}

mysql_close ($connection); // Connection Closed.
?>
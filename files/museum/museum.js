function back()
{
	history.go(-1);
}

function submitForm1(action)
    {
        document.getElementById('employee').action = action;
        document.getElementById('employee').submit();
    }
	
function submitForm2(action)
    {
        document.getElementById('dept').action = action;
        document.getElementById('dept').submit();
    }
	
function submitForm3(action)
    {
        document.getElementById('artwork').action = action;
        document.getElementById('artwork').submit();
    }

function validateForm(){
	var a=document.getElementById("username").value;
	var str = "";
	var error=0;
	if (a==null || a==""){str +="Please enter a valid username\n";error=1;}
	if(error==1){
		alert(str);
		return false;
	}

}

function part1(){
	document.getElementById("loginform").style.visibility="visible";
}

function show1(){
	document.getElementById("employees").style.visibility="visible";
	document.getElementById("departments").style.visibility="hidden";
	document.getElementById("artworks").style.visibility="hidden";
}

function show2(){
	document.getElementById("employees").style.visibility="hidden";
	document.getElementById("departments").style.visibility="visible";
	document.getElementById("artworks").style.visibility="hidden";
}

function show3(){
	document.getElementById("employees").style.visibility="hidden";
	document.getElementById("departments").style.visibility="hidden";
	document.getElementById("artworks").style.visibility="visible";
}

$(document).ready(function(){
$("#login").click(function(){
var username = $("#username").val();
var password = $("#password").val();
// Checking for blank fields.
if( username =='' || password ==''){
$('input[type="text"],input[type="password"]').css("border","2px solid red");
$('input[type="text"],input[type="password"]').css("box-shadow","0 0 3px red");
alert("Please fill all fields...!!!!!!");
}else {
$.post("login.php",{ username1: username, password1:password},
function(data) {
if(data=='Username or Password is wrong...!!!!'){
$('input[type="text"],input[type="password"]').css({"border":"2px solid red","box-shadow":"0 0 3px red"});
alert(data);
} else if(data=='Successfully Logged in...'){
window.location.replace("profile.php");
} else{
alert(data);
}
});
}
});
});
<?php 

	
		$name = $_POST['name'];
		$email = $_POST['email'];
		$password =$_POST['cpassword'];
		//database connection
		$con = mysqli_connect("localhost","root","","nursery_db") or die("Connection Failed"); 
		$sql="insert into signup(name,username,password) values ('{$name}','{$email}','{$password}')";
		if(mysqli_query($con,$sql))
		{
			echo "record inserted";
		}
		else
		{
			echo " record not inserted";
		}
		
?>



<html>
<head>
<script language="Javascript" type="text/javascript">
	// Get the container element
var btnContainer = document.getElementById("navbar");

// Get all buttons with class="btn" inside the container
var btns = btnContainer.getElementsById("ddnav");

// Loop through the buttons and add the active class to the current/clicked button
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    var current = document.getElementsById("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}


function w1()
{
	window.location.href="widcontent1.html"
}
function regular()
{

var UserName=document.getElementById("txtName").value;
var Password=document.getElementById("txtpassword").value;
var cpassword=document.getElementById("txtcpassword").value;
var Email=document.getElementById("txtemail").value;
var Surname=document.getElementById("txtsurname").value;
var re=/^[a-z0-9_-]{3,15}$/
var ke=/^[a-z0-9_-]{3,15}$/
var se=/^(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/
var de=/^([a-z]|[A-Z])+([a-z]|[A-Z]|[0-9]|\W)+[@]+(gmail|hotmail|yahoo)+(\.com)+$/

if(re.test(UserName)&&se.test(Password)&&de.test(Email)&&ke.test(Surname))
{
	setCookie();
	w1();
	var myArray=re.exec(UserName)
}

if(!re.test(UserName))
{
	alert('invalid username,username should have lowercase character with digits.maximum 15 char and minimum 3 char')

}
if(!se.test(Password))
{
	alert('invalid password,please enter 8 digits character with 1 lowercase and 1 uppercase character')
	
}
if(!de.test(Email))
{
	alert('invalid email')
}
if(!ke.test(Surname))
{
	alert('invalid surname')
	return false
}
if(Password!=cpassword)
{
	alert('password not matched please enter correct password')
}
}


function setCookie() {

var cvalue=document.getElementById("txtName").value;
var pass=document.getElementById("txtpassword").value;

var sur=document.getElementById("txtsurname").value;
var em=document.getElementById("txtemail").value;
var cpass=document.getElementById("txtcpassword").value;



    var d = new Date();
    d.setTime(d.getTime() + (1*24*60*60*1000));
    var expires = "expires=" + d.toGMTString();
    document.cookie = "name=" + cvalue + ";" + expires + ";path=/";
	alert("UserName="+cvalue+"Surname="+sur+"Password= "+pass +"Email"+em+"Expire="+expires)
}
</script>

	<link rel="stylesheet" href="signup.css">
	<link rel="stylesheet" href="Home_Page.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

<div class="bgwrap">
		
		<nav class="navbar">
				<img class="logo" src="nursery_logo.jpg" />
		<ul>
			<li><a id="ddnav" href="Home_Page.html">Home</a></li>
			<li><a id="ddnav">Categories</a>
				<div class="sublist1">
					<ul class="subul">
						<li class="subli"><a id="ddnav" href="fruit.html">Fruit Plant</a></li>
						<li class="subli"><a id="ddnav" href="flower1.html">Flower Plant</a></li>
						<li class="subli"><a id="ddnav" href="medicine.html">Medicine Plant</a></li>
					</ul>
				</div>
			</li>
			<li><a id="ddnav" href="Accessories.html">Accessories</a></li>
			<li class="active"><a id="ddnav" href="signup.html">Sign up</a></li>
			<li><a id="ddnav" href="login.html">Login</a></li>
			<li><a id="ddnav" href="contactus.html">contact us</a></li>
			<li><a id="ddnav" href=""><i class="fa fa-facebook"></i> </a></li>
			<li><a id="ddnav" href=""><i class="fa fa-twitter"></i> </a></li>
			<li><a id="ddnav" href=""><i class="fa fa-whatsapp"></i> </a></li>
		</ul>
		</nav>
</div>


<div class="log">

<form name="management" method="post" >

	<center><h2>Sign Up</h2></center><br>

Name &nbsp:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="text" name="name" id="txtName"/><br><br>
 
Surname&nbsp:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="text" name="surname" id="txtsurname"/><br><br>

Email&nbsp :&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="text" name="email" id="txtemail"/><br><br>

Password&nbsp:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="password" name="password" id="txtpassword"/><br><br>

Confirm password&nbsp:&nbsp&nbsp <input type="password" name="cpassword" id="txtcpassword"/><br><br>
				
				<center><p class = "OR">OR</p></center>
				<center><p>Already have an account ? <a href = "login.html">Login</a></p></center><br>

<input type="submit" name="submit" value="Submit" onclick="regular()"/>

<input type="reset" name="cancel" value="Cancel"/><br>

</form>

</div>

<br><br><br><br>
	<div class="foot">
		<footer>
			<p><br><b>Greenwood Nursery copyright&nbsp &#169;2020,&nbsp All Rights Reserved.
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			Designed By &nbsp&nbsp&nbsp | &nbsp&nbsp&nbsp Vaishnavi Nagothanekar</b><br><br></p>
		</footer>
		</div>
			
</body>
</html>


<? php

$dataarray =$_POST;

// define variables and set to empty values
$nameErr = $surnameErr = $emailErr = $passwordErr = $cpasswordErr = "";
$name = $email = $surname  = $password = $cpassword = "";

  if (empty($dataarray["name"])) {
    $nameErr = "Name is required";
  } else {
	  $name = $dataarray["name"];
    //$name = test_input($dataarray["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
/*
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["surname"])) {
    $SurnameErr = "Surame is required";
  } else {
    $name = test_input($_POST["surname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$surname)) {
      $surnameErr = "Only letters and white space allowed";
    }
  }


if ($_SERVER["REQUEST_METHOD"] == "POST") {  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
}
    
if ($_SERVER["REQUEST_METHOD"] == "POST") {  
  if (empty($_POST["password"])) {
    $passwordErr = "password is required";
  } else {
    $passwordErr = test_input($_POST["password"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/^(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/",$password)) {
      $passwordErr = "password should be 8 to 20 charecterslong along with at least 1 special charecter and capital letter";
    }
  }
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {  
  if (empty($_POST["cpassword"])) {
    $cpasswordErr = "cofirm password is required";
  } else {
    $cpassword = test_input($_POST["cpassword"]);
	
	if($password != $cpassword)
	$cpasswordErr="passwords did not match";
  }
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
*/

	if(isset($_POST["Submit"]))
	{
		$name = $_POST['name'];
		$email = $_POST['email'];
		$password =$_POST['cpassword'];
		//database connection
		$con = mysqli_connect("localhost","root","","nursery_db") or die("Connection Failed"); 
		$sql="insert into signup(`name`) values ('{$name}')";
		if(mysqli_query($con,$sql))
		{
			echo "record inserted";
		}
		else
		{
			echo " record not inserted";
		}
	}	
?>

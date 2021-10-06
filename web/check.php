

<?php
// database connection code
if(isset($_POST['name']))
{
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', '','register');

// get the post records

$name = $_POST['name'];
$email = $_POST['email'];


// database insert SQL code
$sql = "INSERT INTO `users` (`id`, `name`, `email`) VALUES ('0', '$name', '$email')";

// insert in database 
$rs = mysqli_query($con, $sql);
if($rs)
{
	echo "Contact Records Inserted";
}
}
else
{
	echo "Are you a genuine visitor?";
	
}
?>
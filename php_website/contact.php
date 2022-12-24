

<?php


// database connection code
$con = mysqli_connect('localhost', 'root', '','db_connect');

$txtName = $_POST['firstname'];
$txtLast = $_POST['lastname'];
$txtCountry = $_POST['country'];
$txtMessage = $_POST['subject'];

// database insert SQL code
$sql = "INSERT INTO `tbl_connect` (`PersonID`, `FirstName`, `LastName`, `country`, `subject`) VALUES ('0', '$txtName', '$txtLast', '$txtCountry', '$txtMessage')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}




?>
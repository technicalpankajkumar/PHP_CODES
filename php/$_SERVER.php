<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">

<!-- This is Registration form  -->

		<lebel for="fname">Name</lebel><br>
           <input type="text" name="fname"><br><br>
        <lebel for="lname">Last Name</lebel><br>
		   <input type="text" name="lname"><br><br>	
		<lebel for="Age">Age</lebel><br>
		   <input type="date" name="age"><br><br>	   	
		   <input type="submit" name="submit">

	</form>

<!-- This is php code  -->
<?php
echo"<br>";
echo "<ul>";
if(isset($_POST['submit'])){
	echo "<li>". $_POST['fname']."</li>"."<br>";
	echo "<li>".$_POST['lname']."</li>"."<br>";
	echo "<li>".$_POST['age']."</li>"."<br>";
}
echo "</ul>";
?>


</body>
</html>
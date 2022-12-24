<?php
echo "<pre>";
// print_r($_GET);

// print_r($_POST);

print_r($_REQUEST);
echo "</pre>";

// echo $_GET['lname'];
// echo $_POST['lname'];
echo $_REQUEST['fname'];


echo "<pre>";
// print_r($_SERVER);
echo "</pre>";

echo $_SERVER['HTTP_REFERER'];

?>
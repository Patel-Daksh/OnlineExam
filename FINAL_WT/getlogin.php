<?php
$filepath = realpath(dirname(__FILE__));
include_once ($filepath.'/classes/User.php');
$usr = new User();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	 $rollno    = $_POST['rollno'];
	 $password = $_POST['password'];

	 $loginjr = $usr->userLogin($rollno, $password);
}

?>

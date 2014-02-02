<?php
require_once("lib/class.registration.php");

$registration = new Registration();

if($registration->checkEmail($_POST["email"])) {
	echo "Thank you!";
} else {
	echo "Wrong Email format";
}
	
?>
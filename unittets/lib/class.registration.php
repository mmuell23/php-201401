<?php
/**
* @author Matthias Mueller
* Klasse zum Testen von Tests
**/
class Registration {
	/**
	* Method to check for valid email format
	* @param String $email
	* @return Boolean
	**/
	public function checkEmail($email) {
		$email_valid = (strpos($email, "@") > 0) && (strpos($email, ".de") > 0);
		return $email_valid;
	}
	
	/**
	* Method to check for valid password format
	* @param String $password
	* @return Boolean
	**/
	public function checkPassword($password) {
		return strlen($password) >= 8;
	}
}
	
?>
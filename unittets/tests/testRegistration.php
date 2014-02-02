<?php
	require("./lib/class.registration.php");

	class RegistrationTest extends PHPUnit_Framework_TestCase {
		public function testEmailFormatCorrectMail1() {
			$registration = new Registration();
			$ret = $registration->checkEmail("mmueller@vrm.de");
			$this->assertTrue($ret == true);
		}
		
		public function testEmailFormatIncorrectMail() {
			$registration = new Registration();
			$ret = $registration->checkEmail("mmuellervrm.de");
			$this->assertTrue($ret == false);
		}
		
		public function testEmailFormatCorrectMail2() {
			$registration = new Registration();
			$ret = $registration->checkEmail("mmueller@vrm.de");
			$this->assertTrue($ret == true);
		}
	}		
?>

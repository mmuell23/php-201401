<?php
class Example extends PHPUnit_Extensions_SeleniumTestCase
{
  protected function setUp()
  {
    $this->setBrowser("*chrome");
    $this->setBrowserUrl("http://localhost/");
  }

  public function testMyTestCase()
  {
    $this->open("/tollesProjekt/register.php");
    $this->type("name=email", "mmueller@vrm.de");
    $this->type("name=password", "test");
    $this->click("css=input[type=\"submit\"]");
    $this->waitForPageToLoad("30000");
    $this->assertTrue((bool)preg_match('/^[\s\S]*Thank you[\s\S]*$/',$this->getBodyText()));
  }
}
?>
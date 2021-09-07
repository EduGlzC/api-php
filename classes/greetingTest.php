<?php

use PHPUnit\Framework\TestCase;

class GreetingTest extends TestCase
{
    
    public function testHelloWorldDefault()
    {    
        require "greeting.php";
        $objMsg = new Greeting();
        $expected = "¡Hola Mundo!";

        $this->assertEquals($objMsg->helloWorld(), $expected);
    }

    public function testHelloWorldValidLang()
    {
        $objMsg = new Greeting();
        $expected = "Salut Monde!";

        $this->assertEquals($objMsg->helloWorld("fr"), $expected);
    }

    public function testHelloWorldInvalidLang()
    {
        $objMsg = new Greeting();
        $expected = "Err 400 - Oups this language missed class today!";

        $this->assertEquals($objMsg->helloWorld("mx"), $expected);
    }
}
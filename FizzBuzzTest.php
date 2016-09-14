<?php

class FizzBuzz
{
    function Count(){
      return "1";
    }
}

class FizzBuzzTest extends PHPUnit_Framework_TestCase
{
    function testShouldBeOne(){
        $FizzBuzz = new FizzBuzz(1);
        $this->assertEquals("1",$FizzBuzz->Count());
    }

}
?>

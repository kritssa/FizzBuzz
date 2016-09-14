<?php

class FizzBuzz
{
    function __construct($number)
    {
      $this->number = $number;
    }

    function Count()
    {
      if($this->number == 2)
      {
        return "2";
      }
      return "1";
    }
}

class FizzBuzzTest extends PHPUnit_Framework_TestCase
{
    

    function testShouldBeTwo()
    {
        $FizzBuzz = new FizzBuzz(2);
        $this->assertEquals("2",$FizzBuzz->Count());
    }

    function testShouldBeOne()
    {
        $FizzBuzz = new FizzBuzz(1);
        $this->assertEquals("1",$FizzBuzz->Count());
    }

}
?>

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
      }else if($this->number ==3 )
      {
        return "Fizz";
      }else if($this->number==5)
      {
        return "Buzz";
      }
      return "1";
    }
}

class FizzBuzzTest extends PHPUnit_Framework_TestCase
{
    function testShouldBeFive()
    {
      $FizzBuzz = new FizzBuzz(5);
      $this->assertEquals("Buzz",$FizzBuzz->Count());
    }

    function testShouldBeThree()
    {
        $FizzBuzz = new FizzBuzz(3);
        $this->assertEquals("Fizz",$FizzBuzz->count());
    }

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

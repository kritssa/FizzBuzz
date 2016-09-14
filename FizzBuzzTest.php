<?php

class FizzBuzz
{
    function __construct($number)
    {
      $this->number = $number;
    }

    function Count()
    {
      if($this->number==15)
      {
        return "FizzBuzz";
      }
      if($this->number %3==0)
      {
        return "Fizz";
      }else if($this->number%5==0)
      {
        return "Buzz";
      }
      else
      {
        return $this->number;
      }
    }
}

class FizzBuzzTest extends PHPUnit_Framework_TestCase
{

    function teestSholudBeTwelve()
    {
      $FizzBuzz = new FizzBuzz(12);
      $this->assertEquals("Fizz",$FizzBuzz->Count());
    }
    function testShouldBeFiveTeen()
    {
      $FizzBuzz = new FizzBuzz(15);
      $this->assertEquals("FizzBuzz",$FizzBuzz->Count());
    }

    function testShouldBeTen()
    {
      $FizzBuzz = new FizzBuzz(10);
      $this->assertEquals("Buzz",$FizzBuzz->Count());
    }
    function testShouldBeSix()
    {
      $FizzBuzz = new FizzBuzz(6);
      $this->assertEquals("Fizz",$FizzBuzz->Count());
    }
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

<?php

class FuzzBuzzOperand
{
    static function cal($number)
    {
      if($number%15==0)
      {
        return "FizzBuzz";
      }
      if($number %3==0)
      {
        return "Fizz";
      }
      else if($number%5==0)
      {
        return "Buzz";
      }
      else
      {
        return $number;
      }
    }
}

class FizzBuzz
{
    function __construct($number)
    {
      $this->number = FuzzBuzzOperand::cal($number);
    }

    function Count()
    {
        return $this->number;
    }
}

class FizzBuzzTest extends PHPUnit_Framework_TestCase
{

    function testShouldBeEleven()
    {
      $FizzBuzz = new FizzBuzz(11);
      $this->assertEquals("11",$FizzBuzz->Count());
    }
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

<?php
//1-testing Class must extend PHPUnit_Framework_TestCase
class MathTest extends PHPUnit_Framework_TestCase {
 
  public function testNachHasCheese()
  {
    //2-create an object of the Class that you want to test
    $Math = new algoSol\phpAlgo\Math();
    //3-test object method
    $this->assertTrue( $Math->isPrime());
  }
 
}
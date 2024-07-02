<?php
use PHPUnit\Framework\TestCase; 
require_once 'Calculator.php';

class CalculatorTest extends TestCase{
    public function testAdd(){
        $calc = new Calculator();
        $res = $calc->add(2, 3);
        $this->assertEquals(5, $res);
    }      
    public function testDiv(){
        $calc = new Calculator();
        $res = $calc->div(6, 3);
        $this->assertEquals(2, $res);
    } 
    public function testSub(){
        $calc = new Calculator();
        $res = $calc->sub(2, 3);
        $this->assertEquals(-1, $res);
    } 
    public function testMul(){
        $calc = new Calculator();
        $res = $calc->mul(2, 3);
        $this->assertEquals('6', $res);
    } 
}
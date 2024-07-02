<?php
use PHPUnit\Framework\TestCase; 
require_once 'calculator.php';

class CalculateTest extends TestCase{
    public function testAdd(){
        $calc = new Calculate();
        $res = $calc->add(2, 3);
        $this->assertEquals(5, $res);
    } 

    public function testSub(){
        $calc = new Calculate();
        $res = $calc->sub(5,3);
        $this->assertEquals(2, $res); // проверяет результат
    }
}
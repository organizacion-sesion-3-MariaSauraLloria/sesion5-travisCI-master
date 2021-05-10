<?php
use PHPUnit\Framework\TestCase;
require 'Calculator.php';

class CalculatorTest extends TestCase
{
    private $calculator;
 
    protected function setUp(): void
    {
        $this->calculator = new Calculator();
    }
 
    protected function tearDown(): void
    {
        $this->calculator = NULL;
    }
 
    public function testAdd(): void
    {
        $result = $this->calculator->add(1, 2);
        $this->assertEquals(3, $result);
    }

    public function testMultiply(): void
    {
        $result = $this->calculator->multiply(5, 2);
        $this->assertEquals(10, $result);
    }

    public function testDivision(): void
    {
        $result = $this->calculator->division(10, 2);
        $this->assertEquals(5, $result);
    }
    
    
    public function testPar1()
    {
        $result = $this->calculator->esPar(2);
        $this->assertTrue($result);
    }
 
    public function testPar2()
    {
        $result = $this->calculator->esPar(-4);
        $this->assertTrue($result);
    }
 
    public function testPar3()
    {
        $result = $this->calculator->esPar(4.5);
        $this->assertFalse($result);
    }
 
    public function testPar4()
    {
        $result = $this->calculator->esPar(-9.9);
        $this->assertFalse($result);
    }
 
 
    public function testPar5()
    {
        $result = $this->calculator->esPar("aaa");
        $this->assertFalse($result);
    }
 
    public function testPar6()
    {
        $result = $this->calculator->esPar(0x1D);
        $this->assertFalse($result);
    }
 
    public function testPar7()
    {
        $result = $this->calculator->esPar(0b1001);
        $this->assertFalse($result);
    }
 
    public function testPar8()
    {
        $result = $this->calculator->esPar(065);
        $this->assertFalse($result);
    }
    
    public function testPar9()
    {
        $result = $this->calculator->esPar(2);
        $this->assertTrue($result);
    }
    
    public function testPar10()
    {
        $result = $this->calculator->esPar(0);
        $this->assertTrue($result);
    }
    
    public function testPar11()
    {
        $result = $this->calculator->esPar(-2);
        $this->assertTrue($result);
    }
    
    
    public function testPar12()
    {
        $result = $this->calculator->esPar('');
        $this->assertFalse($result);
    }
 
}

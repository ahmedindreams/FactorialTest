<?php

use PHPUnit\Framework\TestCase;

require './src/Calculator.php';

class CalculatorTest extends TestCase{

    public function testfact(){
        $c  = new Calculator;
        $result =$c->fact(0);
        $this->assertEquals(1, $result);
        $result =$c->fact(1);
        $this->assertEquals(1, $result);
        $result =$c->fact(5);
        $this->assertEquals(120, $result);
        $result=$c->fact(-3);
        $this->assertEquals(null,$result);
        $result=$c->fact(1.5);
        $this->assertEquals(null,$result);
        $result=$c->fact(false);
        $this->assertEquals(null,$result);
        $result=$c->fact('abc');
        $this->assertEquals(null,$result);
        
        

    }
}

?>
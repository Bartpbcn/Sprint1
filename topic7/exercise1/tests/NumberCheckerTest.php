<?php

namespace Bartpauwels\Exercise1;

use PHPUnit\Framework\TestCase;

require_once 'NumberChecker.php';

class NumberCheckerTest extends TestCase
{
    public function testIsEven()
    {

        $evenNumber = new NumberChecker(2);
        $this->assertTrue($evenNumber->isEven());

        $oddNumber = new NumberChecker(3);
        $this->assertFalse($oddNumber->isEven());
    }
    public function testIsPositive()
    {

        $positiveNumber = new NumberChecker(1);
        $this->assertTrue($positiveNumber->isPositive());

        $negativeNumber = new NumberChecker(-1);
        $this->assertFalse($negativeNumber->isPositive());

        $zeroNumber = new Numberchecker(0);
        $this->assertFalse($zeroNumber->isPositive());
    }
}

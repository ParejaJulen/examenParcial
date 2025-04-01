<?php

namespace pareja\parcial\Test;

use pareja\parcial\ExamenKata;
use PHPUnit\Framework\TestCase;

class ExamenKataTest extends TestCase
{

    private ExamenKata $kata;

    protected function setUp(): void
    {
        parent::setUp();
        $this->kata = new ExamenKata();
    }
    /**
     * @test
     */
    public function givenTwoNumbersReturnSum()
    {
        $result = $this->kata->ejemplo(1, 2);

        $this->assertEquals(3, $result);
    }

    /**
     * @test
     */
    public function givenNegativeNumberThrowException()
    {
        $this->expectException(\Exception::class);
        $this->expectExceptionMessage('Negativos no soportados');

        $this->kata->ejemplo(2, -1);
    }

}
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
    public function givenOneItemReturnItem()
    {
        $result = $this->kata->addItem('pan');

        $this->assertEquals('pan', $result);
    }
    /**
     * @test
     */
    public function givenManyItemsReturnList()
    {
        $result = $this->kata->addItem('pan');
        $result = $this->kata->addItem('leche');
        $result = $this->kata->addItem('agua');

        $this->assertEquals('agua,leche,pan', $result);
    }

}
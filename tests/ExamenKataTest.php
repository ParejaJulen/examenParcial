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
        $result = $this->kata->manageList('añadir pan');

        $this->assertEquals('pan', $result);
    }
    /**
     * @test
     */
    public function givenManyItemsReturnList()
    {
        $this->kata->manageList('añadir pan');
        $this->kata->manageList('añadir leche');
        $result = $this->kata->manageList('añadir agua');

        $this->assertEquals('agua,leche,pan', $result);
    }

    /**
     * @test
     */
    public function deleteItemFromListContainingItem()
    {
        $this->kata->addItem('pan');
        $result = $this->kata->deleteItem('pan');

        $this->assertEquals('', $result);
    }

    /**
     * @test
     */
    public function deleteItemFromListNotContainingItem()
    {
        $this->kata->addItem('pan');
        $result = $this->kata->deleteItem('agua');

        $this->assertEquals('El producto seleccionado no existe', $result);
    }

}
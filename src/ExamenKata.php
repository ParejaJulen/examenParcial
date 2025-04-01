<?php

namespace pareja\parcial;

use PHPUnit\Util\Exception;


class ExamenKata
{
    private string $lista = '';

    public function ejemplo(int $num1, int $num2) : int
    {
        if($num1 < 0 || $num2 < 0){
            throw new Exception("Negativos no soportados");
        }
        return $num1 + $num2;
    }

    public function getAllItems() : array
    {
        return explode(',', $this->lista);
    }

    public function addItem(string $item) : string
    {
        $separedList = explode(',', $this->lista);
        array_push($separedList, $item);
        sort($separedList);
        $this->lista = substr(implode(',', $separedList), 1);
        return $this->lista;
    }
}
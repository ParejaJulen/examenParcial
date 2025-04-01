<?php

namespace pareja\parcial;

use PHPUnit\Util\Exception;

class ExamenKata
{
    public function ejemplo(int $num1, int $num2) : int
    {
        if($num1 < 0 || $num2 < 0){
            throw new Exception("Negativos no soportados");
        }
        return $num1 + $num2;
    }
}
<?php

namespace pareja\parcial;

use PHPUnit\Util\Exception;


class ExamenKata
{
    private string $lista = '';

    public function getAllItems() : array
    {
        return explode(',', $this->lista);
    }

    public function addItem(string $item) : string
    {
        $separedList = explode(',', $this->lista);
        array_push($separedList, $item);
        sort($separedList);
        $this->lista = implode(',', $separedList);

        if(str_starts_with($this->lista, ',')){
            $this->lista = substr($this->lista, 1);
        }

        return $this->lista;
    }
}
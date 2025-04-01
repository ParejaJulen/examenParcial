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
        $this->lista = $this->arrayToString($separedList);

        return $this->lista;
    }

    public function deleteItem(string $item) : string
    {
        $separedList = explode(',', $this->lista);
        if(in_array($item, $separedList)){
            $separedList = array_diff($separedList, array($item));
            $this->lista = $this->arrayToString($separedList);
            return $this->lista;
        }
        return 'El producto seleccionado no existe';
    }

    public function arrayToString(array $array) : string
    {
        sort($array);
        $nuevaLista = implode(',', $array);

        if(str_starts_with($nuevaLista, ',')){
            $nuevaLista = substr($nuevaLista, 1);
        }

        return $nuevaLista;
    }
}
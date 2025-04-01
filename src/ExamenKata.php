<?php

namespace pareja\parcial;

use PHPUnit\Util\Exception;


class ExamenKata
{
    private string $lista = '';

    public function manageList($command) : string
    {
        $fragmentedCommand = explode(' ', $command);
        if($fragmentedCommand[0] == 'añadir'){
            $this->addItem($fragmentedCommand[1]);
            return $this->lista;
        }
        if($fragmentedCommand[0] == 'eliminar'){
            $separedList = explode(',', $this->lista);
            if(in_array($fragmentedCommand[1], $separedList)){
                $separedList = array_diff($separedList, array($fragmentedCommand[1]));
                $this->lista = $this->arrayToString($separedList);
                return $this->lista;
            }
            return 'El producto seleccionado no existe';
        }
        return $this->lista;
    }

    public function addItem(string $item) : void
    {
        $separedList = explode(',', $this->lista);
        array_push($separedList, $item);
        $this->lista = $this->arrayToString($separedList);
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
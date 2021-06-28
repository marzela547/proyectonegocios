<?php

namespace Dao;

class Pianos extends Table{
    public static function getAllPianos(){
        $registrospianos = array();
        $registrospianos = self::obtenerRegistros("select * from pianos;" , array());
        return $registrospianos;
    }
}

?>
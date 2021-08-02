<?php


namespace Dao;

class marcasPanel extends Table
{

    public static function getMarcasById($mrcid)
    {
        $sqlstr = 'SELECT * from marcas where mrcid =:mrcid;';
        $parameters = array('mrcid' => $mrcid);
        $registro = self::obtenerUnRegistro($sqlstr, $parameters);
        return $registro;
    }
    public static function getAllMarcas()
    {
        $registros = array();
        $registros = self::obtenerRegistros(
            'SELECT * from marcas;',
            array()
        );
        return $registros;
    }
    public static function addMarcas($mrcnom, $mrcest)
    {
        $insSQL = 'INSERT INTO marcas(mrcnom,mrcest) VALUES(:mrcnom,:mrcest)';
        $parameters = array(
            'mrcnom'  =>  $mrcnom,
            'mrcest'  =>  $mrcest
        );
        return self::executeNonQuery($insSQL, $parameters);
    }
    public static function updateMarcas($mrcnom, $mrcest, $mrcid)
    {
        $updSQL = 'UPDATE marcas SET  mrcnom = :mrcnom,mrcest = :mrcest WHERE mrcid = :mrcid;';
        $parameters = array(
            'mrcnom'  =>  $mrcnom,
            'mrcest'  =>  $mrcest,
            'mrcid' => $mrcid
        );
        return self::executeNonQuery($updSQL, $parameters);
    }
    public static function deleteMarcas($mrcid)
    {
        $delSQL = 'DELETE FROM  marcas  where mrcid =:mrcid;';
        $parameters = array('mrcid' => $mrcid);
        return self::executeNonQuery($delSQL, $parameters);
    }
}

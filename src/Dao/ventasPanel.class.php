<?php


namespace Dao;

class ventasPanel extends Table
{

    public static function getVentasById($vntid)
    {
        $sqlstr = 'SELECT * from ventas where vntid =:vntid;';
        $parameters = array('vntid' => $vntid);
        $registro = self::obtenerUnRegistro($sqlstr, $parameters);
        return $registro;
    }
    public static function getAllVentas()
    {
        $registros = array();
        $registros = self::obtenerRegistros(
            'SELECT * from ventas;',
            array()
        );
        return $registros;
    }
    public static function addVentas($usrcod, $vntfch)
    {
        $insSQL = 'INSERT INTO ventas(usrcod,vntfch) VALUES(:usrcod,:vntfch)';
        $parameters = array(
            'usrcod'  =>  $usrcod,
            'vntfch'  =>  $vntfch
        );
        return self::executeNonQuery($insSQL, $parameters);
    }
    public static function updateVentas($usrcod, $vntfch, $vntid)
    {
        $updSQL = 'UPDATE ventas SET  usrcod = :usrcod,vntfch = :vntfch WHERE vntid = :vntid;';
        $parameters = array(
            'usrcod'  =>  $usrcod,
            'vntfch'  =>  $vntfch,
            'vntid' => $vntid
        );
        return self::executeNonQuery($updSQL, $parameters);
    }
    public static function deleteVentas($vntid)
    {
        $delSQL = 'DELETE FROM  ventas  where vntid =:vntid;';
        $parameters = array('vntid' => $vntid);
        return self::executeNonQuery($delSQL, $parameters);
    }
}

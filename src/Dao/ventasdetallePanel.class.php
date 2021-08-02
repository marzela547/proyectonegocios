<?php


namespace Dao;

class ventasdetallePanel extends Table
{

    public static function getVentasDetalleById($vntid,  $prdcod)
    {
        $sqlstr = 'SELECT * from ventasdetalle where vntid = :vntid and prdcod = :prdcod';
        $parameters = array(
            'vntid' => $vntid,
            'prdcod' => $prdcod
        );
        $registro = self::obtenerUnRegistro($sqlstr, $parameters);
        return $registro;
    }
    public static function getAllVentasDetalle()
    {
        $registros = array();
        $registros = self::obtenerRegistros(
            'SELECT * from ventasdetalle;',
            array()
        );
        return $registros;
    }
    public static function addVentasDetalle($vntid, $prdcod, $cantidad, $precio)
    {
        $insSQL = 'INSERT INTO ventasdetalle(vntid, prdcod,cantidad, precio) VALUES(:vntid, :prdcod,:cantidad, :precio)';
        $parameters = array(
            'vntid' => $vntid,
            'prdcod' => $prdcod,
            'cantidad' => $cantidad,
            'precio' => $precio
        );
        return self::executeNonQuery($insSQL, $parameters);
    }
    public static function updateVentasDetalle($vntid, $prdcod, $cantidad, $precio)
    {
        $updSQL = 'UPDATE ventasdetalle SET cantidad = :cantidad, precio = :precio  WHERE vntid = :vntid and prdcod=:prdcod;';
        $parameters = array(
            'cantidad' => $cantidad,
            'precio' => $precio,
            'vntid' => $vntid,
            'prdcod' => $prdcod
        );
        return self::executeNonQuery($updSQL, $parameters);
    }
    public static function deleteVentasDetalle($vntid, $prdcod)
    {
        $delSQL = 'DELETE FROM  ventasdetalle  where  vntid = :vntid and prdcod = :prdcod';
        $parameters = array(
            'vntid' => $vntid,
            'prdcod' => $prdcod
        );
        return self::executeNonQuery($delSQL, $parameters);
    }
}

<?php


namespace Dao;

class CarritoPanel extends Table
{

    public static function getCarritoById($crtcod)
    {
        $sqlstr = 'SELECT * from carrito where crtcod =:crtcod;';
        $parameters = array('crtcod' => $crtcod);
        $registro = self::obtenerUnRegistro($sqlstr, $parameters);
        return $registro;
    }
    public static function getAllCarrito()
    {
        $registros = array();
        $registros = self::obtenerRegistros(
            'SELECT * from carrito;',
            array()
        );
        return $registros;
    }
    public static function addCarrito($usercod, $prdcod, $prdprc)
    {
        $insSQL = 'INSERT INTO carrito(usercod,prdcod,prdprc) VALUES(:usercod,:prdcod,:prdprc)';
        $parameters = array(
            'usercod'  =>  $usercod,
            'prdcod'  =>  $prdcod,
            'prdprc'  =>  $prdprc
        );
        return self::executeNonQuery($insSQL, $parameters);
    }
    public static function updateCarrito($usercod, $prdcod, $prdprc, $crtcod)
    {
        $updSQL = 'UPDATE carrito SET  usercod = :usercod,prdcod = :prdcod,prdprc = :prdprc WHERE crtcod = :crtcod;';
        $parameters = array(
            'usercod'  =>  $usercod,
            'prdcod'  =>  $prdcod,
            'prdprc'  =>  $prdprc,
            'crtcod' => $crtcod
        );
        return self::executeNonQuery($updSQL, $parameters);
    }
    public static function deleteCarrito($crtcod)
    {
        $delSQL = 'DELETE FROM  carrito  where crtcod =:crtcod;';
        $parameters = array('crtcod' => $crtcod);
        return self::executeNonQuery($delSQL, $parameters);
    }
}

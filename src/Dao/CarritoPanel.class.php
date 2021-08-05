<?php


namespace Dao;

class CarritoPanel extends Table
{

    public static function getCarritoById($usercod)
    {
        $sqlstr = 'SELECT * from carrito where crtcod =:crtcod;';
        $parameters = array('crtcod' => $usercod);
        $registro = self::obtenerUnRegistro($sqlstr, $parameters);
        return $registro;
    }

    public static function getCarritoByIdProd($prdcod)
    {
        $sqlstr = 'SELECT * from carrito where prdcod =:prdcod;';
        $parameters = array('prdcod' => $prdcod);
        $registro = self::obtenerUnRegistro($sqlstr, $parameters);
        return $registro;
    }
   /* public static function getCarritoByUser()
    {
        $sqlstr = 'SELECT crtcod, a.prdcod, a.usercod, crtfchd, crtest, b.prdprc FROM carrito a
        INNER JOIN productos b on a.prdcod = b.prdcod
        INNER JOIN usuario c on c.usercod = a.usercod
        where crtest = "ACT";';
        //$parameters = array('crtcod' => $usercod);
        //$registro = self::obtenerUnRegistro($sqlstr, $parameters);
        return $registro;
    }
*/

    public static function getCarritoByUser()
    {
        $registros = array();
        $registros = self::obtenerRegistros(
            "SELECT  b.prdImg , crtcod, a.prdcod, a.usercod, crtfchd, crtest, prdprc, prddsc, crtcan FROM carrito a
            INNER JOIN productos b on a.prdcod = b.prdcod
            INNER JOIN usuario c on c.usercod = a.usercod
            where crtest = 'CRT';",
            array()
        );
        return $registros;
    }


    public static function getCarritoByIdPrd($prddsc)
    {
        $sqlstr = 'SELECT * from productos where prddsc =:prddsc;';
        $parameters = array('prddsc' => $prddsc);
        $registro = self::obtenerUnRegistro($sqlstr, $parameters);
        return $registro;
    }

    public static function getCarritoByIdUsr($usercod)
    {
        $sqlstr = 'SELECT usercod FROM usuario where username = :usercod;';
        $parameters = array('usercod' => $usercod);
        $registro = self::obtenerUnRegistro($sqlstr, $parameters);
        return $registro;
    }
    public static function getDateByCode($prdcod){
        $sqlstr = 'SELECT crtfchd FROM carrito WHERE prdcod = :prdcod AND crtest = "CRT";;';
        $parameters = array('prdcod' => $prdcod);
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
    public static function addCarrito($usercod, $prdcod, $crtfchd)
    {

        $insSQL = 'INSERT INTO carrito(usercod,prdcod,crtfchd) VALUES(:usercod,:prdcod,:crtfchd)';
        $parameters = array(
            'usercod'  =>  $usercod,
            'prdcod'  =>  $prdcod,
            'crtfchd'  =>  $crtfchd
        );
        return self::executeNonQuery($insSQL, $parameters);
    }
    public static function updateCarrito($crtcod)
    {
       // $updSQL = 'UPDATE carrito SET  crtest="ACT", crtcan=:crtcan WHERE crtcod = :crtcod;';
        $updSQL = 'UPDATE carrito SET  crtest="ACT" WHERE crtcod = :crtcod;';
        $parameters = array(
            'crtcod' => $crtcod,
        );
        return self::executeNonQuery($updSQL, $parameters);
    }
    public static function updateCarritocan($crtcan, $crtcod)
    {
        $updSQL = 'UPDATE carrito SET  crtcan=:crtcan WHERE crtcod = :crtcod;';
        $parameters = array(
            'crtcan' => $crtcan,
            'crtcod' => $crtcod
        );
        return self::executeNonQuery($updSQL, $parameters);
    }

    public static function eliminareCarrito($prdcod,$usercod)
    {
        $updSQL = 'UPDATE carrito SET crtest = "INC" WHERE prdcod = :prdcod AND usercod = :usercod; ';
        $parameters = array(
            'prdcod'  =>  $prdcod,
            'usercod'  =>  $usercod
        );
        return self::executeNonQuery($updSQL, $parameters);
    }
}

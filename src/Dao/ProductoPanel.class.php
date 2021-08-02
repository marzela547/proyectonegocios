<?php


namespace Dao;

class ProductoPanel extends Table
{

    public static function getProductoById($prdcod)
    {
        $sqlstr = 'SELECT * from productos where prdcod =:prdcod;';
        $parameters = array('prdcod' => $prdcod);
        $registro = self::obtenerUnRegistro($sqlstr, $parameters);
        return $registro;
    }
    public static function getAllproductos()
    {
        $registros = array();
        $registros = self::obtenerRegistros(
            'SELECT * from productos;',
            array()
        );
        return $registros;
    }
    public static function addproducto($prddsc, $prdprc, $prdImgPrm, $prdImgScd)
    {
        $insSQL = 'INSERT INTO productos(prddsc,prdprc,prdImgPrm,prdImgScd) VALUES(:prddsc,:prdprc,:prdImgPrm,:prdImgScd)';
        $parameters = array(
            'prddsc'  =>  $prddsc,
            'prdprc'  =>  $prdprc,
            'prdImgPrm'  =>  $prdImgPrm,
            'prdImgScd'  =>  $prdImgScd
        );
        return self::executeNonQuery($insSQL, $parameters);
    }
    public static function updateproducto($prddsc, $prdprc, $prdImgPrm, $prdImgScd, $prdcod)
    {
        $updSQL = 'UPDATE productos SET  prddsc = :prddsc,prdprc = :prdprc,prdImgPrm = :prdImgPrm,prdImgScd = :prdImgScd WHERE prdcod = :prdcod;';
        $parameters = array(
            'prddsc'  =>  $prddsc,
            'prdprc'  =>  $prdprc,
            'prdImgPrm'  =>  $prdImgPrm,
            'prdImgScd'  =>  $prdImgScd,
            'prdcod' => $prdcod
        );
        return self::executeNonQuery($updSQL, $parameters);
    }
    public static function deleteproducto($prdcod)
    {
        $delSQL = 'DELETE FROM  productos  where prdcod =:prdcod;';
        $parameters = array('prdcod' => $prdcod);
        return self::executeNonQuery($delSQL, $parameters);
    }
}

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
    public static function getAllProducto()
    {
        $registros = array();
        $registros = self::obtenerRegistros(
            'SELECT * from productos;',
            array()
        );
        return $registros;
    }
    public static function addProducto($prddsc, $prdprc, $prdImg, $catid, $mrcid, $prdcnt)
    {
        $insSQL = 'INSERT INTO productos(prddsc,prdprc,prdImg,catid,mrcid,prdcnt) VALUES(:prddsc,:prdprc,:prdImg,:catid,:mrcid,:prdcnt)';
        $parameters = array(
            'prddsc'  =>  $prddsc,
            'prdprc'  =>  $prdprc,
            'prdImg'  =>  $prdImg,
            'catid'  =>  $catid,
            'mrcid'  =>  $mrcid,
            'prdcnt'  =>  $prdcnt
        );
        return self::executeNonQuery($insSQL, $parameters);
    }
    public static function updateProducto($prddsc, $prdprc, $prdImg, $catid, $mrcid, $prdcnt, $prdcod)
    {
        $updSQL = 'UPDATE productos SET  prddsc = :prddsc,prdprc = :prdprc,prdImg = :prdImg,catid = :catid,mrcid = :mrcid,prdcnt = :prdcnt WHERE prdcod = :prdcod;';
        $parameters = array(
            'prddsc'  =>  $prddsc,
            'prdprc'  =>  $prdprc,
            'prdImg'  =>  $prdImg,
            'catid'  =>  $catid,
            'mrcid'  =>  $mrcid,
            'prdcnt'  =>  $prdcnt,
            'prdcod' => $prdcod
        );
        return self::executeNonQuery($updSQL, $parameters);
    }
    public static function deleteProducto($prdcod)
    {
        $delSQL = 'DELETE FROM  productos  where prdcod =:prdcod;';
        $parameters = array('prdcod' => $prdcod);
        return self::executeNonQuery($delSQL, $parameters);
    }
}

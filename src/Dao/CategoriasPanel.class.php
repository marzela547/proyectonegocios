<?php


namespace Dao;

class CategoriasPanel extends Table
{

    public static function getCategoriaById($catid)
    {
        $sqlstr = 'SELECT * from categorias where catid =:catid;';
        $parameters = array('catid' => $catid);
        $registro = self::obtenerUnRegistro($sqlstr, $parameters);
        return $registro;
    }
    public static function getAllCategorias()
    {
        $registros = array();
        $registros = self::obtenerRegistros(
            'SELECT * from categorias;',
            array()
        );
        return $registros;
    }
    public static function addCategoria($catnom, $catest)
    {
        $insSQL = 'INSERT INTO categorias(catnom,catest) VALUES(:catnom,:catest)';
        $parameters = array(
            'catnom'  =>  $catnom,
            'catest'  =>  $catest
        );
        return self::executeNonQuery($insSQL, $parameters);
    }
    public static function updateCategoria($catnom, $catest, $catid)
    {
        $updSQL = 'UPDATE categorias SET  catnom = :catnom,catest = :catest WHERE catid = :catid;';
        $parameters = array(
            'catnom'  =>  $catnom,
            'catest'  =>  $catest,
            'catid' => $catid
        );
        return self::executeNonQuery($updSQL, $parameters);
    }
    public static function deleteCategoria($catid)
    {
        $delSQL = 'DELETE FROM  categorias  where catid =:catid;';
        $parameters = array('catid' => $catid);
        return self::executeNonQuery($delSQL, $parameters);
    }
}

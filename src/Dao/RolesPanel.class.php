<?php


namespace Dao;

class RolesPanel extends Table
{

    public static function getRoleById($rolescod)
    {
        $sqlstr = 'SELECT * from roles where rolescod =:rolescod;';
        $parameters = array('rolescod' => $rolescod);
        $registro = self::obtenerUnRegistro($sqlstr, $parameters);
        return $registro;
    }
    public static function getAllRoles()
    {
        $registros = array();
        $registros = self::obtenerRegistros(
            'SELECT * from roles;',
            array()
        );
        return $registros;
    }
    public static function addRole($rolesdsc, $rolesest)
    {
        $insSQL = 'INSERT INTO roles(rolesdsc,rolesest) VALUES(:rolesdsc,:rolesest)';
        $parameters = array(
            'rolesdsc'  =>  $rolesdsc,
            'rolesest'  =>  $rolesest
        );
        return self::executeNonQuery($insSQL, $parameters);
    }
    public static function updateRole($rolesdsc, $rolesest, $rolescod)
    {
        $updSQL = 'UPDATE roles SET  rolesdsc = :rolesdsc,rolesest = :rolesest WHERE rolescod = :rolescod;';
        $parameters = array(
            'rolesdsc'  =>  $rolesdsc,
            'rolesest'  =>  $rolesest,
            'rolescod' => $rolescod
        );
        return self::executeNonQuery($updSQL, $parameters);
    }
    public static function deleteRole($rolescod)
    {
        $delSQL = 'DELETE FROM  roles  where rolescod =:rolescod;';
        $parameters = array('rolescod' => $rolescod);
        return self::executeNonQuery($delSQL, $parameters);
    }
}

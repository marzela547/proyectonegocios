<?php
namespace Dao;


class UsuarioPanel extends Table
{

    public static function getAllUser()
    {
        $registros = array();
        $registros = self::obtenerRegistros("SELECT a.usercod, useremail, username, userest,rolescod  FROM usuario a 
        JOIN roles_usuarios b on a.usercod = b.usercod;", array());
        return $registros;
    }
    public static function getAllRoles()
    {
        $registros = array();

        $registros = self::obtenerRegistros("SELECT *  FROM roles;", array());
        return $registros;
    }
    public static function getUserById($id)
    {
        $sqlstr = "SELECT * FROM usuario WHERE usercod=:usercod";
        $parameters = array("usercod"=>$id);
        $registro = self::obtenerUnRegistro($sqlstr, $parameters);
        return $registro;

    }

    public static function updateUser($useremail,$username,$userest,$usercod)
    {
        echo "User up";
        $updSQL = "UPDATE usuario SET  useremail = :useremail ,username =:username, userest =:userest,
        WHERE usercod =:usercod;";
        $parameters= array(
            "usuario" => $useremail,
            "useremail" => $username,
            "username" => $userest,
            "usercod " => $usercod
        );

        return self::executeNonQuery($updSQL,$parameters);
    }
    public static function updateUserRole($rolescod,$usercod)
    {
        $updSQL = "UPDATE roles_usuarios SET rolescod =:rolescod,
        WHERE usercod=:usercod = AND rolescod =:rolescod ;
        ";
        $parameters= array(
            "usercod" => $usercod,
            "rolescod" => $rolescod,

        );
        return self::executeNonQuery($updSQL,$parameters);
    }

    public static function deleteUser($usercod)
    {
        echo "User del";
        $updSQL = "UPDATE usuario set userest='INA'  WHERE usercod=:usercod;";
        $parameters= array(
            "usercod" => $usercod
        );

        return self::executeNonQuery($updSQL,$parameters);

    }


}

?>
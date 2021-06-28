<?php

namespace Dao;

//La clase debe llamarse exactamente igual al nombre del archivo
class HeroPanel extends Table{

    /*
      `heroItemid` BIGINT(18) NOT NULL AUTO_INCREMENT,
  `heroname` VARCHAR(45) NULL,
  `heroimgurl` VARCHAR(256) NULL,
  `heroaction` VARCHAR(512) NULL,
  `heroorder` INT NULL,
  `heroest` CHAR(3) NULL,

    */
    //se busca obtener un arreglo con todos los registros
    public static function getActiveHereos(){
        $registros = array();
        //self para metodos estáticos, this -> para los no estáticos
        $registros = self::obtenerRegistros("select * from heroitems where heroest='ACT';" , array());
        return $registros;
    }

    public static function getAllHeroes(){
        $registros = array();
        //self para metodos estáticos, this -> para los no estáticos
        $registros = self::obtenerRegistros("select * from heroitems;" , array());
        return $registros;
    }

    public static function getHeroeById($id){

        $sqlstr= "select * from heroitems where heroItemid=:heroItemid;";
        $parameters = array("heroItemid0"=>$id);
        $registro = self::obtenerUnRegistro($sqlstr, $parameters);
        return $registro;
    }
}

?>
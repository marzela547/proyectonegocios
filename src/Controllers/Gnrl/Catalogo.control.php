<?php

namespace Controllers\Gnrl;

use PhpParser\Node\Stmt\TryCatch;

class Catalogo extends \Controllers\PublicController{
    public function run(): void {

        \Utilities\Site::addLink("public/css/catalogo.css");
        $temp = \Dao\ProductoPanel::getAllProducto();
        $carritoDatos = array();
        $carritoDatos["usercod"] = \Utilities\Security::getUserId();
        //Prm = primario es para la foto del detalle y Scd=secundario es para la chiquita
        foreach($temp as $te){
            $producDatos["catalogos"][]=$te;
        }

        if ($this->isPostBack()) {
           // echo $carritoDatos["usercod"] ;
            $fechaHoy = date('Y/m/d G:i:s');
            $fechaMas2Horas = strtotime('+2 hour' , strtotime ($fechaHoy));
            $fechaMas2Horas = date ( 'Y-m-d H:i:s' , $fechaMas2Horas);
            $carritoDatos["prdcod"] = $_POST["prdcod"];
            $carritoDatos["crtfchd"] = $fechaMas2Horas;
            //$carritoDatos["prdprc"] = $_POST["prdprc"];
            //echo $fechaHoy;
            $carritoCon = "0";
            $carritoCon = \Dao\CarritoPanel::getCarritoByIdProd($carritoDatos["prdcod"]);

           if($carritoCon){
                $carritoCon["crtcan"]+=1;
               $ok = \Dao\CarritoPanel::updateCarritocan($carritoCon["crtcan"],$carritoCon["crtcod"] );
           }
           else{
              // echo "hello";
             $ok = \Dao\CarritoPanel::addCarrito(
                $carritoDatos["usercod"],
                $carritoDatos["prdcod"],
                $carritoDatos["crtfchd"]
            );
           }

           /**/
        }
        \Views\Renderer::render("gnrl/catalogo",$producDatos);
    }
}

?>
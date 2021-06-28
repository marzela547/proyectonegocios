<?php

namespace Controllers\Mnt;

use Utilities\ArrUtils;

class Heroe extends \Controllers\PublicController{
    public function run(): void
    {
        $viewData = array();
        $ModalTitles = array(
            "INS"=> "Nuevo Hero Panel",
            "UPD"=> "Actualiza %s %s",
            "DSP"=> "Detalle de %s %s ",
            "DEL"=> "Elimando %s %s",
        );

        $viewData["ModalTittle"] = "";
        $viewData["heroItemid"] = 0;
        $viewData["heroname"] = "";
        $viewData["heroimgurl"] = "/public/img/piano/";
        $viewData["heroaction"] = "<h1>Compra Ahora</h1>";
        $viewData["heroorder"] = 1;
        $viewData["heroest"] = "ACT";
        $viewData["heroest_act"] = true;
        $viewData["heroest_ina"] = false;

        if($this->isPostBack()){
            $viewData["heroItemid"] = $_POST["heroItemid"];
            $viewData["heroname"] = $_POST["heroname"];
            $viewData["heroimgurl"] = $_POST["heroimgurl"];
            $viewData["heroaction"] = $_POST["heroaction"];
            $viewData["heroorder"] = $_POST["heroorder"];
            $viewData["heroest"] = $_POST["heroest"];
            $viewData["heroest_act"] = $Datos["heroest_act"]= "ACT";
            $viewData["heroest_ina"] = $Datos["heroest_ina"]= "INA";
        }else{
            $viewData["mode"]== $_GET["mode"];
            $viewData["heroItemid"]== isset($_GET["id"]);
        }

        //Visualizar datos
        if($viewData["mode"] == "INS"){

        }else{
            //aqui obtenemos el registro por id
            $heroItem = \Dao\HeroPanel::getHeroeById($viewData["heroItemid"] = $_POST["heroItemid"]);

                /*$viewData["heroItemid"] = $heroItem["heroItemid"];
                $viewData["heroname"] = $heroItem["heroname"];
                $viewData["heroimgurl"] = $heroItem["heroimgurl"];
                $viewData["heroaction"] = $heroItem["heroaction"];
                $viewData["heroorder"] = $heroItem["heroorder"];
                $viewData["heroest"] = $heroItem["heroest"];*/

                //Mas rápido, lazy developers
                \Utilities\ArrUtils::mergeFullArrayTo($heroItem, $viewData);
                $viewData["heroest_act"] = $viewData["heroest_act"]= "ACT";
                $viewData["heroest_ina"] = $viewData["heroest_ina"]= "INA";
        }
        \Views\Renderer::render("mnt/hero", $viewData);
    }
}

?>
<?php

namespace Controllers\Mnt;

class Agregarprod extends \Controllers\PublicController{
    public function run(): void
    {
        \Utilities\Site::addLink("public/css/agregarproducto.css");
        $viewData = array();
        $viewData["idPro"] ="";
        $viewData["nombrePro"] ="";
        $viewData["marcapro"] = "";
        $viewData["categoriapro"] = "";
        $viewData["preciopro"] = "";
        $viewData["imgpro"] = "";
        $viewData["descripcionpro"] = "";

        if($this->isPostBack()){
            $viewData["idPro"] = $_POST["idPro"];
            $viewData["nombrePro"] = $_POST["nombrePro"];
            $viewData["marcapro"] = $_POST["marcapro"];
            $viewData["categoriapro"] = $_POST["categoriapro"];
            $viewData["preciopro"] = $_POST["preciopro"];
            $viewData["imgpro"] = $_POST["imgpro"];
            $viewData["descripcionpro"] = $_POST["descripcionpro"];

            switch($viewData["mode"])
            {
                case "INS":
                    $ok = \Dao\ProductoPanel::addProducto(
                        $viewData["nombrePro"],
                        $viewData["marcapro"],
                        $viewData["categoriapro"],
                        $viewData["preciopro"],
                        $viewData["imgpro"],
                        $viewData["descripcionpro"]
                    );
                    break;
            }
        }else{
            $viewData["mode"]== $_GET["mode"];
            $viewData["idPro"]== isset($_GET["idPro"]);
        }

        \Views\Renderer::render("mnt/agregarproducto", $viewData);
    }
}

?>
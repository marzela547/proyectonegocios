<?php

namespace Controllers\Mnt;

class Inicio extends \Controllers\PublicController{
    public function run(): void
    {
        /*\Utilities\Site::addLink("public/css/inicio.css");*/
        $Datos = array();
        \Views\Renderer::render("mnt/inicio", $Datos);
    }
}

?>
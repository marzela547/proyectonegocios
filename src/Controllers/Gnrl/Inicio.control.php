<?php

namespace Controllers\Gnrl;

class Inicio extends \Controllers\PublicController{
    public function run():void{
        \Utilities\Site::addLink("public/css/inicio.css");

        \Views\Renderer::render("gnrl/inicio", array());
    }
}

?>
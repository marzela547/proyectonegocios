<?php

namespace Controllers\Gnrl;

class Contactanos extends \Controllers\PublicController{
    public function run():void{
        \Utilities\Site::addLink("public/css/contactanos.css");

        \Views\Renderer::render("gnrl/contactanos", array());
    }
}

?>
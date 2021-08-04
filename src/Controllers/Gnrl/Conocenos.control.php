<?php

namespace Controllers\Gnrl;

class Conocenos extends \Controllers\PublicController{
    public function run(): void
    {
        /*\Utilities\Site::addLink("public/css/contacto.css");*/
        $Datos = array();
        \Views\Renderer::render("gnrl/conocenos", $Datos);
    }
}

?>
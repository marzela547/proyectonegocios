<?php

namespace Controllers\Mnt;

class Contacto extends \Controllers\PublicController{
    public function run(): void
    {
        /*\Utilities\Site::addLink("public/css/contacto.css");*/
        $Datos = array();
        \Views\Renderer::render("mnt/contacto", $Datos);
    }
}

?>
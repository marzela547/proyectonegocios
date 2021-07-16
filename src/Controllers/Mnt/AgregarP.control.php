<?php

namespace Controllers\Mnt;

class AgregarP extends \Controllers\PublicController{
    public function run(): void
    {
        /*\Utilities\Site::addLink("public/css/agregarp.css");*/
        $Datos = array();
        \Views\Renderer::render("mnt/agregarp", $Datos);
    }
}

?>
<?php

namespace Controllers\Mnt;

class Categoria extends \Controllers\PublicController{
    public function run(): void
    {
        /*\Utilities\Site::addLink("public/css/categoria.css");*/
        $Datos = array();
        \Views\Renderer::render("mnt/categoria", $Datos);
    }
}

?>
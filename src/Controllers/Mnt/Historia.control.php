<?php

namespace Controllers\Mnt;

class Historia extends \Controllers\PublicController{
    public function run(): void
    {
        /*\Utilities\Site::addLink("public/css/historia.css");*/
        $Datos = array();
        \Views\Renderer::render("mnt/historia", $Datos);
    }
}

?>
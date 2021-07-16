<?php

namespace Controllers\Mnt;

class DMCA extends \Controllers\PublicController{
    public function run(): void
    {
        /*\Utilities\Site::addLink("public/css/dmca.css");*/
        $Datos = array();
        \Views\Renderer::render("mnt/dmca", $Datos);
    }
}

?>
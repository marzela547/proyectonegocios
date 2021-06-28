<?php

namespace Controllers\Mnt;

class Pianos extends \Controllers\PublicController{
    public function run(): void
    {
        \Utilities\Site::addLink("public/css/piano.css");
        $Datos = array();
        $tablaPianos = \Dao\Pianos::getAllPianos();
        foreach($tablaPianos as $pianos){
            $Datos["pianos"][]=$pianos;
        }

        \Views\Renderer::render("mnt/pianos", $Datos);
    }
}

?>
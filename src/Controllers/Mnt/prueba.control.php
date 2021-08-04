<?php

namespace Controllers\Mnt;

class prueba extends \Controllers\PublicController{
    public function run():void{
        \Utilities\Site::addLink("public/css/agregarproducto.css");

        //\Views\Renderer::render("mnt/agregarproducto", array());
    }
}

?>
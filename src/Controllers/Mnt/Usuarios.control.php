<?php

namespace Controllers\Mnt;

    class Usuarios extends  \Controllers\PublicController{

        public function run(): void{
           // \Utilities\Site::addLink("public/css/piano.css");
            $viewData = Array();
            $viewData["usuarios"]= \Dao\UsuarioPanel::getAllUser();
            \Views\Renderer::render('mnt/usuarios', $viewData);
        }

    }
?>
<?php

namespace Controllers\Mnt;

    class Productos extends  \Controllers\PublicController{

        public function run(): void{
            \Utilities\Site::addLink("public/css/piano.css");
            $viewData = Array();
            $counter = 0;
            $tabla = \Dao\ProductoPanel::getAllProducto();
        foreach($tabla as $ta){
            $counter ++;
            $ta["rownum"] = $counter;
            $viewData["productos"][]=$ta;
        }
            \Views\Renderer::render('mnt/productos', $viewData);
        }

    }
?>
<?php

namespace Controllers\Mnt;

class Heroes extends \Controllers\PublicController{
    public function run():void{
        $viewData = array();
       // $viewData["heroes"] = \Dao\HeroPanel::getAllHeroes();
        $tmpHeroes = \Dao\HeroPanel::getAllHeroes();
        foreach($tmpHeroes as $heroes){
            $heroes["heroeaction"] = str_replace(array("<",">"), array("&lt;","&gt"), $heroes["heroaction"]);
            $viewData["heroes"][]=$heroes;
        }
        \Views\Renderer::render("mnt/heroes", $viewData);

        //CLASE DE 23
        $token = md5("heroes".time());
    }
}

?>
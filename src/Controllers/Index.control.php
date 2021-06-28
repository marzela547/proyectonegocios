<?php
/**
 * PHP Version 7.2
 *
 * @category Public
 * @package  Controllers
 * @author   Orlando J Betancourth <orlando.betancourth@gmail.com>
 * @license  MIT http://
 * @version  CVS:1.0.0
 * @link     http://
 */
namespace Controllers;

/**
 * Index Controller
 *
 * @category Public
 * @package  Controllers
 * @author   Orlando J Betancourth <orlando.betancourth@gmail.com>
 * @license  MIT http://
 * @link     http://
 */
class Index extends PublicController
{
    /**
     * Index run method
     *
     * @return void
     */
    public function run() :void
    //FUNCION QUE SE EJECUTARÁ CUANDO UNO PIDA EL INDEX
    {
        \Utilities\Site::addLink("public/css/heropanel.css");
        \Utilities\Site::addLink("public/css/piano.css");
        $viewData = array();
        $viewData["page"] = $this->toString();
        $viewData["heroes"]= \Dao\HeroPanel::getActiveHereos();
        //$viewData["pianos"]= \Dao\Pianos::getAllPianos();
        $viewData["algoMas"] = "Esto es algo más que se envía a la vista";
        \Views\Renderer::render("index", $viewData);
    }
}
?>

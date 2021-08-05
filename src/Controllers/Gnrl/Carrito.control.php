<?php

namespace Controllers\Gnrl;

use Controllers\PublicController;

class Carrito extends PublicController{
    public function run():void
    {
        \Utilities\Site::addLink("public/css/heropanel.css");
        $userID = \Utilities\Security::getUserId();
        $carrito = array();
        $carrito["carrito"] = \Dao\CarritoPanel::getCarritoByUser();
        $producto = \Dao\CarritoPanel::getCarritoByUser();
        $viewData= array();

        if (isset($_POST["btneliminarc"])) {
            $id=  $_POST["prdcod"];
            \Dao\CarritoPanel::eliminareCarrito($id , $userID);
                \Utilities\Site::redirectToWithMsg(
                    "index.php?page=gnrl_carrito",
                     "Se elemino del carrito");

        }

      if (isset($_POST["btnComprar"])) {
            $producto = \Dao\CarritoPanel::getCarritoByUser();
            $fechaHoy = date('Y/m/d G:i:s');
            $ok= true;
            foreach($producto as $pro)
            {
                $fechaHoy = date('Y/m/d G:i:s');
                $horaex = date('H:i:s',strtotime($pro["crtfchd"]));
                $fechaex = date('Y-m-d',strtotime($pro["crtfchd"]));
                $fechaact = date('Y-m-d',strtotime( $fechaHoy));
                $horaact = date('H:i:s',strtotime($fechaHoy));
                if($fechaex >= $fechaact){
                    if($horaex >= $horaact){
                        $ok= true;
                    }
                    else{
                        $ok =false;
                        echo '<script>alert("Se vencio fecha del producto:'.$pro["prddsc"].' por lo que se eliminara");</script>';
                        \Dao\CarritoPanel::eliminareCarrito($pro["prdcod"] , $userID);
                    }
                }
                else{
                    echo '<script>alert("Se vencio fecha del producto: '.$pro["prddsc"].' por lo que se eliminara");</script>';
                    $ok= false;
                    \Dao\CarritoPanel::eliminareCarrito($pro["prdcod"], $userID);

                }
            }
          
            if($ok)
              {

             foreach($producto as $pro)
                {
                   // echo $pro["prdcod"]."     ";
                   $unico = \Dao\ProductoPanel::getProductoById($pro["prdcod"]);
                  // echo $unico["prdcnt"];
                   if($unico["prdcnt"] > $pro["crtcan"])
                   {
                       echo "Si se puede";
                   }else{
                       echo "no se puede";
                   }
                   // \Dao\CarritoPanel::updateCarrito($pro["crtcod"],$viewData["crtcan"]);
                }
                /*\Utilities\Site::redirectToWithMsg(
                    "index.php?page=gnrl_carrito",
                     "Compra realizada");*/
               }else
              {
                \Utilities\Site::redirectToWithMsg(
                    "index.php?page=gnrl_carrito",
                     "Error en Compra");
              }
        }
        if (isset($_POST["crtcan"])) 
        {
            echo $_POST["crtcan"]." ";
            echo $_POST["crtcod"];
            \Dao\CarritoPanel::updateCarritocan($_POST["crtcan"],$_POST["crtcod"]);
           // \Utilities\Site::redirectToWind("index.php?page=gnrl_carrito","sad");
            header("Location: index.php?page=gnrl_carrito");
            
        }
        

        /*var_dump($_POST);
        die();  */
        \Views\Renderer::render("gnrl/carrito", $carrito);
    }
}
?>

<?php

namespace Controllers\Mnt;

    class Producto extends  \Controllers\PublicController{

        public function run(): void{

            \Utilities\Site::addLink("public/css/piano.css");
            $viewData = array();
            $ModalTitles = array(
                "INS"=> "Nuevo ingreso de elemento",
                "UPD"=> "Actualiza %s %s",
                "DSP"=> "Detalle de %s %s ",
                "DEL"=> "Elimando %s %s"
            );

            $categorias = \Dao\CategoriasPanel::getAllCategorias();
            foreach($categorias as $ca){
                $viewData["categorias"][]=$ca;
            }
            $marcas = \Dao\marcasPanel::getAllMarcas();
            foreach($marcas as $mar){
                $viewData["marcas"][]=$mar;
            }

            $viewData["ModalTittle"] = "";
            $viewData["prdcod"] = 0;
            $viewData["prddsc"] = "";
			$viewData["prdprc"] = "";
			$viewData["prdImg"] = "";
			$viewData["catid"] = 0;
            $viewData["mrcid"] = 0;
            $viewData["prdcnt"] = "";

            if($this->isPostBack()){
                $viewData["mode"]= $_POST["mode"];
                $viewData["prdcod"] = $_POST["prdcod"];

                if($viewData["mode"] != "DEL"){
                    $viewData["prddsc"] = $_POST["prddsc"];
					$viewData["prdprc"] = $_POST["prdprc"];
					$viewData["prdImg"] = $_POST["prdImg"];;
                    $viewData["catid"] = $_POST["catid"];;
                    $viewData["mrcid"] = $_POST["mrcid"];;
                    $viewData["prdcnt"] = $_POST["prdcnt"];;

                }

                switch($viewData["mode"]){
                    case "INS":

                            $ok = \Dao\ProductoPanel::addProducto(
                                $viewData["prddsc"],
								$viewData["prdprc"],
								$viewData["prdImg"],
                                $viewData["catid"],
                                $viewData["mrcid"],
                                $viewData["prdcnt"]
                            );

                            if($ok){
                                \Utilities\Site::redirectToWithMsg(
                                    "index.php?page=mnt_productos",
                                    "Producto agregado exitosamente"
                                );
                            }
                        break;
                    case "UPD":
                            $ok = \Dao\ProductoPanel::updateProducto(
                                $viewData["prddsc"],
								$viewData["prdprc"],
								$viewData["prdImg"],
                                $viewData["catid"],
                                $viewData["mrcid"],
                                $viewData["prdcnt"],
                                $viewData["prdcod"]
                            );

                            if($ok){
                                \Utilities\Site::redirectToWithMsg(
                                    "index.php?page=mnt_productos",
                                    "Producto modificado exitosamente"
                                );
                            }
                        break;
                    case "DEL":
                            $ok = \Dao\ProductoPanel::deleteProducto(
                                $viewData["prdcod"]
                            );

                            if($ok){
                                \Utilities\Site::redirectToWithMsg(
                                    "index.php?page=mnt_productos",
                                    "Producto eliminado exitosamente"
                                );
                            }
                        break;
                }
            }else{
                $viewData["mode"]= $_GET["mode"];
                $viewData["prdcod"]= isset($_GET["id"])? $_GET["id"] : 0;
            }

            if($viewData["mode"] == "INS"){
                $viewData["ModalTittle"] = "Agregando nuevo Producto";
                $viewData["showCommitBtn"]  = $viewData["mode"] == "INS";
            }else{
                $ItemTable = \Dao\ProductoPanel::getProductoById($viewData["prdcod"]);
                if (!$ItemTable) {
                  \Utilities\Site::redirectToWithMsg(
                        "index.php?page=mnt_productos",
                        "No existe el registroxd"
                    );
                }
                    \Utilities\ArrUtils::mergeFullArrayTo($ItemTable, $viewData);
                    $viewData["ModalTittle"] = sprintf(
                        $ModalTitles[$viewData["mode"]],
                        $viewData["prdcod"],
                        $viewData["prddsc"]
                    );

                    if ($viewData["mode"] == "DEL" || $viewData["mode"] == "DSP") {
                        $viewData["readonly"] = "readonly";
                        $viewData["showCommitBtn"]  = $viewData["mode"] == "DEL";
                    }else{
                        $viewData["showCommitBtn"]  = $viewData["mode"] == $viewData["mode"];
                    }
            }

            \Views\Renderer::render("mnt/producto", $viewData);
        }

    }
?>
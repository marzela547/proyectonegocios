<?php

    namespace Controllers\Mnt;
    use Utilities\ArrUtils;

class Usuario extends \Controllers\PublicController
    {
        public function run(): void
        {
            $viewData = array();
            $ModalTitles= array(
                "UPD" => "Actualizar %s %s",
                "DSP" => "Detalle de %s %s",
                "DEL" => "Eliminado %s"
            );
            $roles = \Dao\UsuarioPanel::getAllRoles();
            foreach($roles as $ro){
                $viewData["roles"][]=$ro;
            }
             $viewData["ModalTitle"]="";
             $viewData["usercod"]=0;
             $viewData["username"]="fgodoy";
             $viewData["useremail"]="fgodoy04@te.tec";
             $viewData["rolescod"]="PBL ";
             $viewData["userest"]="ACT";


            if($this->isPostBack())
            {
                if($_REQUEST["ACT"])
                {
                    $viewData["userest"]="ACT";
                }
                if($_REQUEST["INA"])
                {
                    $viewData["userest"]="INA";
                }
                
                $viewData = array();
                $viewData["mode"]=$_POST["mode"];
                $viewData["usercod"]=$_POST["usercod"];
                $viewData["username"]=$_POST["username"]  ;
                $viewData["useremail"]=$_POST["useremail"];
                $viewData["userest"]=$_POST["userest"];
                $viewData["userest_act"]= $viewData["userest"]="ACT";
                $viewData["userest_ina"]=$viewData["userest"]="INA";
              /*  switch($viewData["mode"])
                {
                    case "UPD":
                        $ok = \Dao\UsuarioPanel::updateUser(
                            $viewData["username"],
                            $viewData["useremail"],
                            $viewData["userest"],
                            $viewData["rolescod"],
                            $viewData["usercod"]
                        );
                        $ok = \Dao\UsuarioPanel::updateUserRole(
                            $viewData["rolescod"],
                            $viewData["usercod"]
                        );
                        echo $ok;
                        if($ok){
                            \Utilities\Site::redirectToWithMsg(
                                "index.php?page=mnt_usuarios",
                                "Usuario modificado exitosamente"
                            );
                        }
                    break;
                    case "DEL":
                        $ok = \Dao\UsuarioPanel::deleteUser(
                            $viewData["usercod"]
                        );
                        if($ok){
                            \Utilities\Site::redirectToWithMsg(
                                "index.php?page=mnt_usuarios",
                                "Usuario eliminado exitosamente"
                            );
                        }
                    break;
                }*/
            } /*else {
                $viewData["mode"]= $_GET["mode"];
                $viewData["usercod"]= isset($_GET["id"])? $_GET["id"]: 0;;
            }*/

            /*
            if($viewData["mode"] == "INS")
            {
                $viewData["ModalTitle"] = "Agregar";
            }else{
                $id = \Dao\UsuarioPanel::getUserById($viewData["usercod"]);
                \Utilities\ArrUtils::mergeArrayTo($id,$viewData);
                $viewData["ModalTitle"] = sprintf (
                    $ModalTitles[$viewData["mode"]],
                    $viewData["usercod"],
                    $viewData["username"]
                );

                if ($viewData["mode"]== "DEL" || $viewData["mode"] =="DSP")
                {
                    $viewData["readonly"] = "readonly";
                }
            }*/
            \Views\Renderer::render("mnt/usuario", $viewData);
        }

    }
?>
<?php

namespace Controllers\Sec;

use Controllers\PublicController;
use \Utilities\Validators;
use Exception;

class Register extends PublicController
{
    private $txtEmail = "";
    private $txtPswd = "";
    private $txtPswd2 ="";
    private $txtUser ="";
    private $errorPswd2 ="";
    private $errorUser ="";
    private $errorEmail ="";
    private $errorPswd = "";
    private $hasErrors = false;
    public function run() :void
    {

        if ($this->isPostBack()) {
            $this->txtEmail = $_POST["txtEmail"];
            $this->txtPswd = $_POST["txtPswd"];
            $this->txtPswd2 = $_POST["txtPswd2"];
            $this->txtUser = $_POST["txtUser"];
            //validaciones
            if (!(Validators::IsValidEmail($this->txtEmail))) {
                $this->errorEmail = "El correo no tiene el formato adecuado";
                $this->hasErrors = true;
            }
            if (!Validators::IsValidPassword($this->txtPswd)) {
                $this->errorPswd = "La contraseña debe tener al menos 8 caracteres una mayúscula, un número y un caracter especial.";
                $this->hasErrors = true;
            }
            if (empty($this->txtUser)) {
                $this->errorUser = "Campo Vacio.";
                $this->hasErrors = true;
            }
            if (strcmp($this->txtPswd2,  $this->txtPswd) !== 0) {
                $this->errorPswd2 = "No concuerdan Contraseñas.";
                $this->hasErrors = true;
            }

            if (!$this->hasErrors) {
                try{
                    if (\Dao\Security\Security::newUsuario($this->txtEmail, $this->txtPswd,$this->txtUser)) {
                        \Utilities\Site::redirectToWithMsg("index.php?page=sec_login", "¡Usuario Registrado Satisfactoriamente!");
                    }
                } catch (Error $ex){
                    die($ex);
                }
            }
        }
        $viewData = get_object_vars($this);
        \Views\Renderer::render("security/sigin", $viewData);
    }
}
?>

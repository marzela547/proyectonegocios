<?php

namespace Controllers\Mnt;

class Piano extends \Controllers\PublicController{
    public function run(): void
    {
        \Utilities\Site::addLink("public/css/piano.css");

        $Datos = array();
        $ModalTitles = array(
            "INS"=> "Nuevo piano",
            "UPD"=> "Actualiza %s %s",
            "DSP"=> "Detalle de %s %s ",
            "DEL"=> "Elimando %s %s"
        );
        $Datos["ModalTittle"] = "";
        $Datos["Id_piano"] = 0;
        $Datos["Descrip_piano"] = "";
        $Datos["Bio_piano"] = "";
        $Datos["Price_piano"] = "";
        $Datos["Sales_piano"] = "";
        $Datos["Img_uri_piano"] = "/public/img/piano/";
        $Datos["Imgthb_piano"] = "";
        $Datos["Est_pieano"] = "ACT";
        $Datos["Est_pieano_act"] = true;
        $Datos["Est_pieano_ina"] = false;

        if($this->isPostBack()){
            $Datos["Id_piano"] = $_POST["Id_piano"];
            $Datos["Descrip_piano"] = $_POST["Descrip_piano"];
            $Datos["Bio_piano"] = $_POST["Bio_piano"];
            $Datos["Price_piano"] = $_POST["Price_piano"];
            $Datos["Sales_piano"] = $_POST["Sales_piano"];
            $Datos["Img_uri_piano"] = $_POST["Img_uri_piano"];
            $Datos["Imgthb_piano"] = $_POST["Imgthb_piano"];
            $Datos["Est_pieano"] = $_POST["Est_pieano"];
            $Datos["Est_pieano_act"] = $Datos["Est_pieano"]= "ACT";
            $Datos["Est_pieano_ina"] = $Datos["Est_pieano"]= "INA";
        }

        \Views\Renderer::render("mnt/piano", $Datos);
    }
}

?>
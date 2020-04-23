<?php

class EnlacesPaginas{

    public function enlacesPaginasModel($enlacesModel){

        if ($enlacesModel == "ingresar" ||
            $enlacesModel == "usuarios" || 
            $enlacesModel == "editar" || 
            $enlacesModel == "salir") {          
                 
                $module = "views/".$enlacesModel.".php";
        }elseif ($enlacesModel == "inicio") {
            $module = "views/ingresar.php";
        }else{
            $module = "views/registro.php";
        }

        return $module;
    }
}


?>
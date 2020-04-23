<?php

class MvcController{

     #Llamada a la plantilla
    #---------------------------------------------------

    public function pagina(){

        #se usa para invocar el archivo que contiene codigo html.
        include "views/template.php";
    }

    #Interaccion del usuario
    #---------------------------------------------------
    public function enlacesPaginasController(){
       
       if (isset($_GET["action"])) { #isset => significa que trae contenido
        
        $enlacesController = $_GET["action"];

        }else{
         $enlacesController = "inicio";
        } 

         
        $instancia = new EnlacesPaginas(); #tengo que tener esta instacia para poder llamar el metodo, amenos que sea estatico el metodo
        $respuesta = $instancia->enlacesPaginasModel($enlacesController);
        include $respuesta;

    }




}


?>
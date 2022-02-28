<?php
    //Primero se llama al modelo para comunicarnos primero con el
    require_once '../modelos/crudModelo.php';

    $objeto = new Crud(); //Se instancia la clase Crud que se encuentra en el modelo

    //se guardan los registros en la variable '$records'
    //$records = registros
    $records = $objeto -> obtenerRegistros(); //Se llama el metodo que nos retorna los registros de la BD
    
    //Llamamos a la vista 
    require_once '../vistas/vistaCrud.php';

?>














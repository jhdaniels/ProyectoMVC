<?php
    //Primero se llama al modelo para comunicarnos primero con el
    require_once '../modelos/crudModelo.php';

if(isset($_POST['nombre'])){ //'isseti' comprueba si una variable está definida o no 

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];

    echo $nombre.'<br>';
    echo $apellido;

    $objeto = new Crud(); //Se instancia la clase Crud que se encuentra en el modelo
    $objeto->setNombre($nombre);     //asignar valor a la variable 
    $objeto->setApellido($apellido);

    //Se crea el método insertarRegistro() que guardará la información en la BD
    //Con la variable $respuesta se almacena lo que nos retorne en el método insertarRegistro()
    $respuesta = $objeto->insertarRegistros(); 

};

  
    //se guardan los registros en la variable '$records'
    //$records = registros
    //$records = $objeto -> insertarRegistros(); //Cambiamos el método a 'insertarRegistros.php'

    //El controlador llama o retorna esta vista
    require_once '../vistas/insertarVista.php';

?>


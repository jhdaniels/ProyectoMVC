<?php
    //Importanto archivo de conexión
    require_once '../config/Database.php';

    class Crud extends Connection {   //aquí llamo la clase 'Connection' de Database.php

        public $conexion; //Se asigna un atributo para usar los métodos de la clase conexión en el modelo
        public $nombre;
        public $apellido;

        public function __construct(){

            $this->conexion= new Connection(); //instanciar la clase 'Connection' para manipular los métodos
            
        }

        //Se crean métodos por cada dato a recibir en nuestro
        public function setNombre($nombre){

            $this->nombre=$nombre;   //estos vienen del método setNombre

        }

        public function setApellido($apellido){

            $this->apellido=$apellido;

        }

        public function obtenerRegistros(){

            //Lo igualo a 'Conectado' porque ya sabemos q retorna el método statusConexion
            if($this->conexion->statusConexion()==='Conectado'){
                
                try {
                    //query = CONSULTA
                    $query = 'SELECT id, nombre, apellido FROM personas';
                    //Utilizamos el atributo 'conexión' de nuestra clase para accede al un método PDO
                    $PDOStatement = $this->conexion->prepare($query);   
                    $PDOStatement->execute(); //ejecutar la consulta   
                    
                    //Enviar registros al controlador
                    return $PDOStatement->fetchAll();//el fetchAll convierte una consulta en un array

                } catch (PDOExeption $e) {

                    //Enviar mensaje de error en caso de que la consulta falle
                    return $e->getMessage();
                }
            }

        }
        public function insertarRegistros(){

            //Lo igualo a 'Conectado' porque ya sabemos q retorna el método statusConexion
            if($this->conexion->statusConexion()==='Conectado'){
                
                try {
                    //query = CONSULTA
                    $query = 'INSERT INTO personas(nombre, apellido)VALUES(:nombre, :apellido)';
                    //Utilizamos el atributo 'conexión' de nuestra clase para accede al un método PDO
                    $PDOStatement = $this->conexion->prepare($query);   
                    //bindeamos valores
                    //pasamos lo que tenga el atributo nombre al marcador
                    //bindValue: Vincula un valor al parámetro de sustitución con nombre o de signo de interrogación de la sentencia SQL
                    $PDOStatement->bindValue(':nombre', $this->nombre);
                    $PDOStatement->bindValue(':apellido', $this->apellido);
                    $PDOStatement->execute(); //ejecutar la consulta   
                    
                    //Enviar registros al controlador
                    return 'Registro agregado con exito';

                } catch (PDOExeption $e) {

                    //Enviar mensaje de error en caso de que la consulta falle
                    return $e->getMessage();
                }
            }

        }
    }
?>


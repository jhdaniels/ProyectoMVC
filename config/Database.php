<?php
    //Archivo de conexion a la base de datos usando PDO
    class Connection extends PDO{

        //Atributos para la conexión a la base de datos
        private $host     = 'localhost';
        private $database = 'practica'; //nombre de la base de datos 
        private $username = 'root'; 
        private $pass     = '';
        private $port     = 5433;
        private $sgbd     = 'pgsql';
        private $status   = 'Error';
        
        //Intentamos realizar la conexión a la bd
        public function __construct(){
            try{
                parent::__construct("{$this->sgbd}:host={$this->host}:dbname={$this->database}
                :port={$this->port}".$this->username,$this->pass);
                return $this->status='Conectado';

            }catch(PDOException $e){
                return 'Error en la conexión a la base de datos, detalles'.$e->getMessage();
                return $this->status;
            }
        }

        //Método utilizado para saber el estado de la conexión
        public function statusConexion(){
            return $this->status;
        }
    }
?>
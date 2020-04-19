<?php
    require 'config_conexion.php';

    class conexion{
        
        protected $conexion_db;

        
        /*Constructor*/
        public function conexion(){

            /*Realizamos la conexion*/
            $this->conexion_db=new mysqli(DB_HOST, DB_USUARIO, DB_CONTRA, DB_NOMBRE);

            
            /*En el caso de que la conexion no tenga exito*/
            if($this->conexion_db->connect_errno){
                echo "Fallo al conectar a Base de datos: ".$this->conexion_db->connect_error;
                return;
            }


            /*para agregar los caracteres especiales*/
            $this->conexion_db->set_charset(DB_CHARSET);

        }

    }

?>
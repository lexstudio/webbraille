<?php

    //require 'conexion.php';


    class devuelve_lecciones extends conexion{

        /*Constructor de la clase devuelve_productos llamamos al constructor padre*/
        public function devuelve_lecciones(){
            parent::__construct();
        }


        /*La funcion que nos va a devolver las lecciones almacenados en la bd*/
        public function get_lecciones($ncurso){
            $resultado=$this->conexion_db->query("SELECT * FROM lecciones where Id_curso =$ncurso");

            $lecciones=$resultado->fetch_all(MYSQLI_ASSOC);

            return $lecciones;
        }
    }

?>
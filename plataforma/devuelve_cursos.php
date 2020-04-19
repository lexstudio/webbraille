<?php

    require 'conexion.php';


    class devuelve_cursos extends conexion{

        /*Constructor de la clase devuelve_productos llamamos al constructor padre*/
        public function devuelve_cursos(){
            parent::__construct();
        }


        /*La funcion que nos va a devolver los cursos almacenados en la bd*/
        public function get_cursos(){
            $resultado=$this->conexion_db->query('SELECT * FROM cursos');

            $cursos=$resultado->fetch_all(MYSQLI_ASSOC);

            return $cursos;
        }


        public function get_nlecciones($nivel_curso){
            $resultado = $this->conexion_db->query("SELECT count(Id_leccion) as nlecciones from lecciones WHERE Id_curso='.$nivel_curso.'");

            $nlecciones=$resultado->fetch_all(MYSQLI_ASSOC);

            return $nlecciones;
        }
    }

?>
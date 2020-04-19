<?php

    //session_start();
    
    //require 'conexion.php';

    class devuelve_info_user extends conexion{


        public function devuelve_info_user(){
            parent::__construct();
        }

        public function get_info_user(){
            $id_user=$_SESSION['user_id'];
            $resultado=$this->conexion_db->query("SELECT * from users WhERE id=$id_user");

            $info_user=$resultado->fetch_all(MYSQLI_ASSOC);

            return $info_user;
        }
            
    }
?>
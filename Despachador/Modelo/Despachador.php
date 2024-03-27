<?php
    require_once("../../conexion.php");
    session_start();
    class Despachador extends Conexion{

        public function __construct()
        {
            $this->db = parent::__construct();
        }

        public function login($email, $contrasena){
            $statement = $this->db->prepare("SELECT email, contrasena FROM despachador WHERE email =:email AND contrasena = :contrasena");
            $statement->bindParam(':email', $email);
            $statement->bindParam(':contrasena', $contrasena);
            $statement->execute();
            if ($statement->rowCount()==1) {
                $result = $statement->fetch();
                $_SESSION['email']= $result["email"];
                $_SESSION['contrasena']= $result["contrasena"];
                return true;
            }
                return "Error!! Al iniciar sesión";
            } 
        
        public function validarSesionDespachador(){
            if ($_SESSION['email'] == Null) {
                header('Location: ../../index.php');
            }
        }

    } //end clase

?>
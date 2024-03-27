<?php 

    class Conexion{

        protected $db;
        private $driver = "mysql";
        private $host = "localhost";
        private $based = "login";
        private $usuario = "root";
        private $contrasena = "";

        public function __construct()
        {
            try {
            $db = new PDO("{$this->driver}:host={$this->host};dbname={$this->based}", $this->usuario, $this->contrasena);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //echo "Conexion Exitosa";
            return $db;
            } catch (PDOException $e) {
                echo "Ha ocurrido un error al conectarse con la Bd". $e->getMessage();
            }
            
        }
    } //End clase

echo "Conexion Exitosa";
    //$objC = new Conexion();
?>
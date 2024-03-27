<?php 
    require_once('../Modelo/Despachador.php');

    if (isset($_REQUEST["btnIngresar"])) {
        $email = $_POST['email'];
        $contrasena = $_POST['contrasena'];

        $ModeloDespachador = new Despachador();

        if ($ModeloDespachador->login($email, $contrasena)){
            header('Location: ../../Despachador/Vista/index.php');
        }else{
            header('Location: ../../index.php');
        }
    }else{
        header('Location: ../../index.php');
    }

?>
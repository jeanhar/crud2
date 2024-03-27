<?php
require_once('../../Template/headernavfooter.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/proyecto.css">
    <title>Document</title>
</head>

<body>
    <h1>Registro de Despachador - Comotor 2020</h1>

    <div class="formulario-login">
        <form action="../Modelo/Despachador.php" method="POST">
            <label>Cedula</label>
            <input type="text" class="form-control" placeholder="">

            <label>Nombres</label>
            <input type="text" class="form-control" placeholder="Digite sus nombres completos">

            <label>Email</label>
            <input type="text" class="form-control" placeholder="Digite su Email">

            <label>Password</label>
            <input type="password" class="form-control" placeholder="">

            <label>Celular</label>
            <input type="text" class="form-control" placeholder="">

            <label>Horario</label>
            <input type="text" class="form-control" placeholder="Horio notacion 24 horas">

            <p><br>
                <button type="submit" class="btn btn-primary">Ingresar</button>
        </form>
    </div>
</body>

</html>
<?php
require_once('../../Template/headernavfooter.php');
require_once('../../Despachador/Modelo/Despachador.php');

$ModeloDespachador = new Despachador();
$ModeloDespachador->validarSesionDespachador();
?>

<h1>Listado de pasajeros - Empresa Comotor 2020 - 2021 </h1>
<a href="add.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Registrar pasajero</a>
<p>
    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">Cedula</th>
                <th scope="col">Nombres</th>
                <th scope="col">Correo</th>
                <th scope="col">Celular</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>
                    <a href="#" class="btn btn-danger btn-sm active" role="button" aria-pressed="true">Editar</a>
                    <a href="#" class="btn btn-warning btn-sm active" role="button" aria-pressed="true">Eliminar</a>
                </td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
            </tr>
        </tbody>
    </table>
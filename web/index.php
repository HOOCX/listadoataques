<?php
include("libs/engine.php");

function mostrarAtaques(){
    $result = obtenerAtaques();
    $result = $result->data;
    foreach ($result as $ataques) {
        echo <<<FILA
            <tr>
                <td>{$ataques->id}</td>
                <td>{$ataques->fecha}</td>
                <td>{$ataques->hora}</td>
                <td>{$ataques->ciudad}</td>
                <td>{$ataques->latitud}</td>
                <td>{$ataques->longitud}</td>
                <td>
                    <a href='editar.php?id={$ataques->id}' class= 'btn btn-success'>Editar</a>
                    <a onclick="return confirm('¿Seguro desea eliminar esta fila?');" href='borrar.php?id={$ataques->id}' class= 'btn btn-danger'>Borrar</a>
                </td>
            </tr>
    
        FILA;
    }   
}
plantilla::aplicar();
?>

        <h3>Listado de Ciudades</h3>
        <div class="text-end">
            <a href="mapa.php" class="btn btn-dark">Ver Mapa</a>
            &nbsp;
            &nbsp;
            &nbsp;
            <a href="nuevo.php" class="btn btn-primary">Nuevo</a>
        </div>
    <table class="table table-light">
        <thead>
            <tr>
                <th>id</th>
                <th>fecha</th>
                <th>hora</th>
                <th>ciudad</th>
                <th>latitud</th>
                <th>longitud</th>
                <th> </th>
            </tr>
        </thead>
        <tbody>
            <?php mostrarAtaques(); ?>
        </tbody>
    </table>
    
<?php
// Conectar a la base de datos
$conexion = mysqli_connect('localhost', 'id20797316_railgun', 'Majorityaxe111?', 'id20797316_impera');
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="stylesheet" href="estilo.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diagnostico</title>
</head>
<body>
<main class="formulario">

<form action="agregar_tarea.php" method="post">
    <label for="tarea">Agrega una tarea</label>
    <input type="text" id="tarea" name="tarea" required>
    <input type="submit" value="Agregar">
    </form>

<div class="tabla-div">
    <h3>Lista de tareas</h3>
    <table class="tabla-empleados">
        <tr>
            <th>Nombre</th>
            <th>Acciones</th>
        </tr>
        <?php
            // Conectar a la base de datos
            $conexion = mysqli_connect('localhost', 'id20797316_railgun', 'Majorityaxe111?', 'id20797316_impera');
            $consulta = "SELECT id_tarea,tarea FROM `tareas`";
            
            $resultado = mysqli_query($conexion, $consulta);            
            // Mostrar los datos en la tabla
            while ($fila = mysqli_fetch_assoc($resultado)) {
                echo "<tr>";
                echo "<td>".$fila['tarea']."</td>";
                echo "<td><a href='editar_tarea.php?id=".$fila['id_tarea']."'>Editar</a> | <a href='eliminar_tarea.php?id=".$fila['id_tarea']."'>Terminada</a></td>";
                echo "</tr>";
            }                
        ?>
    </table>
</div>

</main>
    <a href="../index.php" class="volver-button">Volver</a>

</body>
</html>
<?php
    // Obtener el id de la tarea a editar desde la URL
    $id_tarea = $_GET['id'];
    
    // Conectar a la base de datos
    $conexion = mysqli_connect('localhost', 'id20797316_railgun', 'Majorityaxe111?', 'id20797316_impera');
    $consulta = "SELECT * FROM tareas WHERE id_tarea = $id_tarea";
    $resultado = mysqli_query($conexion, $consulta);
    $fila = mysqli_fetch_assoc($resultado);
    
    // Obtener los valores de los campos del registro actual
    $tarea_actual = $fila['tarea'];
    ?>
    
<div class="formulario-div">
    <link rel="stylesheet" href="estiloEditar.css">
    <h3>Editar tarea</h3>
    <form action="actualizar_tarea.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $id_tarea; ?>">
        <label for="tarea">Tarea:</label>
        <input type="text" name="tarea" value="<?php echo $tarea_actual; ?>">
        <br>
        <input type="submit" value="Actualizar">
    </form>
</div>
<a href="diagnostico.php" class="volver-link">Volver</a>

    </a>
 
  
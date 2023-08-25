<?php

// Obtener el id del empleado a eliminar
$id_tarea = $_GET['id'];

// Conectar a la base de datos
$conexion = mysqli_connect('localhost', 'id20797316_railgun', 'Majorityaxe111?', 'id20797316_impera');

// Preparar la consulta para eliminar el empleado
$consulta = "DELETE FROM `tareas` WHERE `id_tarea` = $id_tarea;";

// Ejecutar la consulta y verificar si se ha eliminado correctamente
if (mysqli_query($conexion, $consulta)) {
    // Si se ha eliminado correctamente, mostrar un mensaje emergente
    echo "<script>alert('La tarea ha sido eliminado correctamente.');</script>";
    // Redirigir a la página verEmpleado.php después de mostrar el mensaje emergente
    echo "<script>window.location.href = 'diagnostico.php';</script>";
} else {
    // Si hay un error, mostrar un mensaje emergente con el mensaje de error
    echo "<script>alert('Error al eliminar la tarea: " . mysqli_error($conexion) . "');</script>";
}

?>
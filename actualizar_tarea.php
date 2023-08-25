<?php
// Obtener los valores enviados por el formulario
$id_tarea = $_POST['id'];
$tarea = $_POST['tarea'];

// Conectar a la base de datos
$conexion = mysqli_connect('localhost', 'id20797316_railgun', 'Majorityaxe111?', 'id20797316_impera');

// Actualizar el registro en la base de datos
$consulta = "UPDATE tareas SET tarea='$tarea' WHERE id_tarea='$id_tarea'";
if (mysqli_query($conexion, $consulta)) {
    // Si se ha actualizado correctamente, mostrar un mensaje emergente
    echo "<script>alert('La tarea se ha actualizado correctamente.');</script>";
    // Redirigir a la página lista-empleados.php después de mostrar el mensaje emergente
    echo "<script>window.location.href = 'diagnostico.php';</script>";
} else {
    // Si hay un error, mostrar un mensaje emergente con el mensaje de error
    echo "<script>alert('Error al actualizar la tarea: " . mysqli_error($conexion) . "');</script>";
}

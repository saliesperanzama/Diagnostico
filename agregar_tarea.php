<?php
    // Obtener los valores del formulario
    $tarea = $_POST['tarea'];

    // Conectar a la base de datos
    $conexion = mysqli_connect('localhost', 'id20797316_railgun', 'Majorityaxe111?', 'id20797316_impera');

    // Verificar la conexión
    if (!$conexion) {
        die("La conexión ha fallado: " . mysqli_connect_error());
    }    

    // Crear la consulta SQL para insertar los datos en la tabla de usuarios
    $consulta2 = "INSERT INTO `tareas`(`tarea`) VALUES ('$tarea')";
        
    try {
        mysqli_query($conexion, $consulta2);
        
        // Si se ha agregado correctamente, mostrar un mensaje emergente y redirigir a la página agregarEmpleado.php
        echo "<script>alert('La tarea se ha agregado correctamente.');</script>";
        echo "<script>window.location.href = 'diagnostico.php';</script>";
    } catch (Exception $e) {
        // Mostrar un mensaje emergente con el mensaje de error
        echo "<script>alert('Error al agregar la tarea: " . $e->getMessage() . "');</script>";
    }

    
    



?>
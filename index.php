<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>MI PRIMERA APP</h1>

    <?php


    try{
        require_once 'db/connection.php';

        echo 'Conectado satisfactoriamente a la base de datos ' . $dbname . ' en el host ' . $host;
        include 'insertarForm.php';
        include 'editarForm.php';
        include 'borrarForm.php';
        include 'select.php';
        foreach($alumnos as $alumno){
            echo '<p>'. $alumno['id'] . ';'. $alumno['nombre'] . ' ' . $alumno['apellido'] . '</p>';
        };
        
        echo '<h3>LISTADO DE EMPLEADOS</h3>';
        echo '<a href="editar.php">Editar Alumnos</a> <br>';
        echo'<a href="insertar.php">Insertar Alumnos</a> <br>';
        echo'<a href="borrar.php">Borrar Alumnos</a>';
    }catch(PDOException $error){
        die('No se ha podido acceder a la base de datos ' . $dbname . ':' . $error->getMessage());
    };
    ?>
</body>
</html>
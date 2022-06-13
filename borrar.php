<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>EDITAR ALUMNOS</h1>
    
    <form action="index.php" method="POST">
    <?php
    require_once 'db/connection.php';
    include 'select.php';

    echo '<select name="alumnoBorrar">';
    foreach ($alumnos as $alumno) {
        echo '<option value="'.$alumno['id'].'">' . $alumno['id'] . ': ' . $alumno['nombre'] . ' ' . $alumno['apellido'] .'</option>';
    }
    
    echo '</select>';
    ?>
    <button name="btndelete">Borre Aquí Su Paina</button>
    </form>
    <a href="index.php">Volver al Listado</a>
</body>
</html>
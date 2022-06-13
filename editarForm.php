<?php
if (isset($_POST['btnedit'])) {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $id = $_POST['alumnoEditar'];

    $sql ='UPDATE  alumnos SET nombre=?, apellido=? WHERE id=?';
try{
    $connection->prepare($sql)->execute([$nombre, $apellido, $id]);
}catch(Exception $error){
    echo '<p>Lo siento pana</p>';
}
}

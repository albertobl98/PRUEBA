<?php

if (isset($_POST['btnadd'])) {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];

    $sql ='INSERT into alumnos (nombre, apellido) VALUES (?,?)';
try{
    $connection->prepare($sql)->execute([$nombre, $apellido]);
}catch(Exception $error){
    echo '<p>Lo siento pana</p>';
}
}

?>
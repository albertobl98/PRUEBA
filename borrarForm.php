<?php
if (isset($_POST['btndelete'])) {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $id = $_POST['alumnoBorrar'];

    $sql ='DELETE FROM  alumnos where id=?';
try{
    $connection->prepare($sql)->execute([$id]);
}catch(Exception $error){
    echo '<p>Lo siento pana</p>';
}
}
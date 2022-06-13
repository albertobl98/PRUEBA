<?php

try{
    $alumnos = $connection->query('SELECT * FROM alumnos')->fetchAll();


}catch(Exception $error){
    echo '<p>Lo siento mi pana, esta página no está flama</p>';
};

?>
<?php
require_once __DIR__. '/vendor/autoload.php';

$client = new MongoDB\Client('mongodb+srv://jaun:123456aa@cluster0.0jfro.mongodb.net/ServiciosMul?retryWrites=true&w=majority');

$tb = $client->ServiciosMul->puntaje;

$registro = array(
    "iduser"=>"1","puntaje"=>"22"
);

$resultado=$tb->insertOne($registro);

echo $resultado->getInsertedId();

?>
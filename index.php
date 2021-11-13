<?php

require_once __DIR__. '/vendor/autoload.php';

$a=$_GET['anno'];
$b=$_GET['represa'];

/*$client = new MongoDB\Client('mongodb+srv://jaun:123456a@cluster0.0jfro.mongodb.net/ServiciosMul?retryWrites=true&w=majority');

$tb = $client->ServiciosMul->puntaje;

$registro = array(
    "iduser"=>"1","puntaje"=>"22"
);

$resultado=$tb->insertOne($registro);


    $client = new MongoDB\Client('mongodb+srv://jaun:123456a@cluster0.0jfro.mongodb.net/ServiciosMul?retryWrites=true&w=majority');

$db = $client->test;



echo json_encode($registro);*/
$client = new MongoDB\Client('mongodb+srv://jaun:123456a@cluster0.0jfro.mongodb.net/myFirstDatabase?retryWrites=true&w=majority');
$tb=$client->emergencia->danos
$filter= ['$and'=>
            [
                ['DEPARTAMENTO'=>['$eq'=>'ANTIOQUIA']],
                ['EVENTO'=>['$'=>'INCENDIO']]
            ]
            ];
$query = new MongoDB\Driver\Query($filter);
$rows = $tb->find($filter);
$datos= iterator_to_array($rows);
echo json_encode($datos);

?>

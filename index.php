<?php

require_once __DIR__. '/vendor/autoload.php';

/*$client = new MongoDB\Client('mongodb+srv://jaun:123456a@cluster0.0jfro.mongodb.net/ServiciosMul?retryWrites=true&w=majority');

$tb = $client->ServiciosMul->puntaje;

$registro = array(
    "iduser"=>"1","puntaje"=>"22"
);

$resultado=$tb->insertOne($registro);


echo json_encode($registro);*/
$client = new MongoDB\Client('mongodb+srv://jaun:123456@cluster0.bosd3.mongodb.net/water?retryWrites=true&w=majority');
$tb=$client->lluvia->pre;
$filter= ['$and'=>
            [
                ['siete'=>['$eq'=>'1995']],
                ['uno'=>['$eq'=>'Pajas Blancas']]
            ]
        ];
$query = new MongoDB\Driver\Query($filter);
$rows = $tb->find($filter);
$datos= iterator_to_array($rows);
echo json_encode($datos);

?>

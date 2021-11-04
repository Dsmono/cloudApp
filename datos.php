<?php
require_once __DIR__. '/vendor/autoload.php';

/*$client = new MongoDB\Client('mongodb+srv://jaun:123456a@cluster0.0jfro.mongodb.net/ServiciosMul?retryWrites=true&w=majority');

$tb = $client->ServiciosMul->puntaje;

$registro = array(
    "iduser"=>"1","puntaje"=>"22"
);

$resultado=$tb->insertOne($registro);


echo json_encode($registro);*/
$client = new MongoDB\Client('mongodb+srv://yo:abc13579@cluster0.bosd3.mongodb.net/water?retryWrites=true&w=majority');
$tb=$client->lluvia->pre;
$filter= ['$and'=>
            [
                ['ANNO'=>['$eq'=>'1995']],
                ['uno'=>['$eq'=>'Pajas Blancas']]
            ]
        ];
$query = new MongoDB\Driver\Query($filter);
$rows = $tb->find($filter);
$datos= iterator_to_array($rows);
echo json_encode($datos);

?>

/*'mongodb+srv://yo:abc13579@cluster0.bosd3.mongodb.net/water?retryWrites=true&w=majority');
$tb=$client->water->Precipitaciones;
$filter= ['$and'=>
            [
                ['ANNO'=>['$eq'=>'1997']],
                ['ESTACION'=>['$eq'=>'Sutatausa']]
            ]
        ];
$query = new MongoDB\Driver\Query($filter);
$rows = $tb->find($filter);
$datos= iterator_to_array($rows);
echo json_encode($datos);*/
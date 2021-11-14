<?php

require_once __DIR__. '/vendor/autoload.php';
$a=$_GET['DEPARTAMENTO'];
$b=$_GET['MUNICIPIO'];
$b=$_GET['EVENTO'];

$client = new MongoDB\Client('mongodb+srv://jaun:123456a@cluster0.0jfro.mongodb.net/myFirstDatabase?retryWrites=true&w=majority');
$tb=$client->emergencia->dano;
$filter= ['$and'=>
            [
                ['DEPARTAMENTO'=>['$eq'=>$a]],
                ['EVENTO'=>['$eq'=>'INCENDIO ESTRUCTURAL']],
                ['SUBSIDIO DE ARRIENDO'=>['$eq'=>'0']],
                
            ]
            ];
$query = new MongoDB\Driver\Query($filter);
$rows = $tb->find($filter);
$datos= iterator_to_array($rows);
echo json_encode($datos);

?>

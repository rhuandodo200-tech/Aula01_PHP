<?php
header("Content-Type:application/json;charset=utf-8");
header("Access-Control-Allow-Origin: *");

$resposta = [
    "mensagem" => "Back-end online",
    "status" => "Pronto",
    "nome" => "Rhuan",
    "sobrenome" => "Henrique",
    "time" => "Coringão",
    


];
echo json_encode($resposta);

?>
<?php

header("Access-Control-Allow-Origin: *");   //estou dando permisão para todos usarem
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
header("Content-Type: application/json");

echo json_encode($array);
exit;

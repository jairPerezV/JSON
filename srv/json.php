<?php

require_once __DIR__ . "/../lib/php/recuperaJson.php";
require_once __DIR__ . "/../lib/php/devuelveJson.php";

$json = recuperaJson();

devuelveJson([
"nombre" => ["value" => "Miguel Angel"],
 "apellido" => ["value" => "Avalos Rama"],
]);

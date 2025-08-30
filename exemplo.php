<?php

require_once __DIR__ . '/vendor/autoload.php';

use \Lauro\Php\SearchCep;

$busca = new SearchCep();
$resultado = $busca->getAddressFromZipCode('01001000');

print_r($resultado);
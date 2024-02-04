<?php

require_once "vendor/autoload.php";

use BuscaCep\Search;

$busca = new Search;

$resultado = $busca->getAddressFromZipCode('01001000'); // só alterar o cep neste campo.

print_r($resultado);
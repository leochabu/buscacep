<?php

require_once 'vendor/autoload.php';

use leoch\Buscacep\Search;

$cep = new Search();
var_dump($cep->getAddressFromZipcode('01001-00aaaaa0'));


<?php

require_once '../model/connections.php';
require_once '../model/queries.php';


$action = 'action';

$query = filter_input(INPUT_POST, 'query', FILTER_SANITIZE_STRING);


//$query=(query);

echo $query;

$result = getTest($query);
var_dump($result);


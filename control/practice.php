<?php

require_once '../model/connections.php';
require_once '../model/queries.php';
require_once '../practice.php';


$action = 'action';

//$query = filter_input(INPUT_POST, 'query', FILTER_SANITIZE_STRING);

$query = $_POST['query'];

//$query = "Select * from test where name = 'Jimmy Page'";
//$query=(query);

//$query=trim($query);
echo "<br><strong>Your Query was: </strong>".$query."<br><br>";

//$query = query;

$result = getTest($query);

echo '<table border="1">';
echo '<tr>';
foreach ($result[0] as $key => $value) {
    echo '<td>';
    echo $key;
    echo '</td>';
}
echo '</tr>';
foreach ($result as $row) {
    echo '<tr>';
    foreach ($row as $column) {
        echo '<td>';
        echo $column;
        echo '</td>';
    }
    echo '</tr>';
}
echo '</table>';







// var_dump($result); 


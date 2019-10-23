<?php

require_once '../model/connections.php';
require_once '../model/queries.php';
require_once '../practice.php';



$action = filter_input(INPUT_POST, 'action', FILTER_SANITIZE_STRING);




//$query = filter_input(INPUT_POST, 'query', FILTER_SANITIZE_STRING);

switch ($action) {
    
    
    case 'newquery':
         include 'practice.php';
         break;
    
    case 'query':    


$query = $_POST['query'];
    
//    echo $query;


if (empty($query)) {
            $message = '<p class="errormess">Please provide information for all empty form fields.<br>Please reenter your query.';
//            include $_SERVER['DOCUMENT_ROOT'].'/Recruitment/results.php';
            include '../results.php';
            exit;
        }






//$query = "Select * from test where name = 'Jimmy Page'";
//$query=(query);

//$query=trim($query);
//echo "<br><strong>Your Query was: </strong>".$query."<br><br>";

//$query = query;
        
try{
$result = getTest($query);

if(count($result) > 0) {
    $querylist = '<table border=1';
    $querylist .= '<tr>';
    
    foreach ($result[0] as $key => $value) {
    $querylist .= '<td>';
    $querylist .= $key;
    $querylist .= '</td>';
    }
    $querylist .= '</tr>';
    foreach ($result as $row) {
    $querylist .= '<tr>';
    foreach ($row as $column) {
    $querylist .= '<td>';
    $querylist .= $column;
    $querylist .= '</td>';
    }
    $querylist .= '</tr>';
    }
    $querylist .= '</table>';
}
    
include '../results.php';
//header("location:/Recruitment/results.php");
exit;

} catch (PDOException $ex) {
    $message="<p>Your entry is not correct, try again please.</p>";
    include '../results.php';
    
}

    case 'createform':
        
      $question1 = $_POST['question1'];  
        
      include '../pdf.php';
      break;
    


}



//    echo $querylist;

//echo '<table border="1">';
//echo '<tr>';
//foreach ($result[0] as $key => $value) {
//    echo '<td>';
//    echo $key;
//    echo '</td>';
//}
//echo '</tr>';
//foreach ($result as $row) {
//    echo '<tr>';
//    foreach ($row as $column) {
//        echo '<td>';
//        echo $column;
//        echo '</td>';
//    }
//    echo '</tr>';
//}
//echo '</table>';







// var_dump($result); 


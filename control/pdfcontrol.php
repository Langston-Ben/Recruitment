<?php

require_once '../model/connections.php';
require_once '../model/queries.php';
//require_once '../practice.php';
//require_once '../fpdf181/fpdf.php';
require_once '../TCPDF-master/tcpdf.php';





$action = filter_input(INPUT_POST, 'action', FILTER_SANITIZE_STRING);
switch ($action) {

case 'createform':
        
//      $question1 = $_POST['question1'];
      $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING); 
    
//      if(isset($email))
          
      $question1 = filter_input(INPUT_POST, 'question1', FILTER_SANITIZE_STRING);  
      $question2 = filter_input(INPUT_POST, 'question2', FILTER_SANITIZE_STRING);  
      $question3 = filter_input(INPUT_POST, 'question3', FILTER_SANITIZE_STRING);  
      $question4 = filter_input(INPUT_POST, 'question4', FILTER_SANITIZE_STRING);  
      $question5 = filter_input(INPUT_POST, 'question5', FILTER_SANITIZE_STRING);  
      $question6 = filter_input(INPUT_POST, 'question6', FILTER_SANITIZE_STRING);  
      $question7 = filter_input(INPUT_POST, 'question7', FILTER_SANITIZE_STRING);  
      $question8 = filter_input(INPUT_POST, 'question8', FILTER_SANITIZE_STRING);  
      $question9 = filter_input(INPUT_POST, 'question9', FILTER_SANITIZE_STRING);  
     $question10 = filter_input(INPUT_POST, 'question10', FILTER_SANITIZE_STRING);  
      
      
      
      
      
      
      
      
      
      
      
      
      
       
      include '../TCPDF-master/pdftest.php';
//      header("location:/Recruitment/fpdf181/pdftest.php");
      break;
  
}
<?php

require_once '../model/connections.php';
require_once '../model/queries.php';
require_once '../TCPDF-master/tcpdf.php';
require_once '../lib/functions.php';





$action = filter_input(INPUT_POST, 'action', FILTER_SANITIZE_STRING);
switch ($action) {

    case 'createform':

//      $question1 = $_POST['question1'];
//      $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);

        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

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
        $comments = filter_input(INPUT_POST, 'comments', FILTER_SANITIZE_STRING);
        



      //Check for missing data
        $email = checkEmail($email);

        if (empty($email) || empty($question1) || empty($question1) || empty($question1) ||
                empty($question1) || empty($question1) || empty($question1) || empty($question1) ||
                empty($question1) || empty($question1) || empty($question1) || empty($comments)) {
            $message = '<p class="errormess">Please provide a valid email address and '
                    . 'provide answers to all questions.<p>';
            include '../submitform.php';
            exit;
        }

        //Check for valid email address
        $question1length = strlen($question1);
        $question2length = strlen($question2);
        $question3length = strlen($question3);
        $question4length = strlen($question4);
        $question5length = strlen($question5);
        $question6length = strlen($question6);
        $question7length = strlen($question7);
        $question8length = strlen($question8);
        $question9length = strlen($question9);
        $question10length = strlen($question10);
        $commentslength = strlen($comments);
        


        if ($question1length > 501 || ($question2length >501) || ($question3length >501)
                || ($question4length >501)|| ($question5length >501)|| ($question6length >501)
                || ($question7length >501)|| ($question8length >501)|| ($question9length >501) 
                        || ($question10length >501)|| $commentslength >501) {
            $message = "<br><p>Your Query Exceeds the limit of 500 characters,<br>Please Try Again.<br><br>"
                    . "</p>";
            include '../submitform.php';
//            header("location:/Recruitment/submitform.php");
            exit;
        }

        include '../TCPDF-master/pdftest.php';
        break;
}
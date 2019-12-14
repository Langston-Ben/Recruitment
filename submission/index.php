<?php

require_once '../model/connections.php';
require_once '../model/queries.php';
require_once '../TCPDF-master/tcpdf.php';
require_once '../lib/functions.php';





//$action = filter_input(INPUT_POST, 'action', FILTER_SANITIZE_STRING);
//switch ($action) {
//
//    case 'createform':

        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        
        $question1 = filter_input(INPUT_POST, 'question1');
        $question2 = filter_input(INPUT_POST, 'question2');
        $question3 = filter_input(INPUT_POST, 'question3');
        $question4 = filter_input(INPUT_POST, 'question4');
        $question5 = filter_input(INPUT_POST, 'question5');
        
        $comments = filter_input(INPUT_POST, 'comments');
        
       


        //Check for missing data
        $email = checkEmail($email);

        if (empty($email) || empty($question1) || empty($question2) || empty($question3) ||
                empty($question4) || empty($question5) || empty($comments)) {
            $message = '<p class="errormess">Please provide a valid email address and '
                    . 'provide answers to all questions.<p>';
            include '../submitform.php';
            exit;
        }

        //Check for valid email address
        //Check for string length to avoid data overflow

        $question1length = strlen($question1);
        $question2length = strlen($question2);
        $question3length = strlen($question3);
        $question4length = strlen($question4);
        $question5length = strlen($question5);       
        $commentslength = strlen($comments);



        if ($question1length > 501 || ($question2length > 501) || ($question3length > 501) 
                || ($question4length > 501) || ($question5length > 501) || $commentslength > 501) 
            {
            $message = "<br><p>Your Query Exceeds the limit of 500 characters,<br>"
                    . "Please Try Again.<br><br>"
                    . "</p>";
            include '../submitform.php';
//            header("location:/Recruitment/submitform.php");
            exit;
        }


        //this section covers scoring functionality
      

        $q1Points = 0;
        $q2Points = 0;
        $q3Points = 0;
        $q4Points = 0;
        $q5Points = 0;


        $q1lower = strtolower($question1);
        $q2lower = strtolower($question2);
        $q3lower = strtolower($question3);
        $q4lower = strtolower($question4);
        $q5lower = strtolower($question5);
        $chkwhr = "where";       

        //Scoring for question one
        $q1query = "Select Count(*) as 'RecordCount' from Table2";
        $q1Correct = getTest($q1query);


        Try {
            $q1UserInput = getTest($question1);
            $q1Correctstr = json_encode($q1Correct);
            $q1UserInputstr = json_encode($q1UserInput);
            $match = strcmp($q1Correctstr, $q1UserInputstr);

            if ($match == 0) {
                $q1Points = 1;
                $q1Message = "Correct";
            }
        } catch (Exception $e) {

           
        }


        //Scoring for question two
        $q2query = "Select Table1.TextValue as 'Column1', "
                . "Table2.TextValue as 'Column2' from Table1 join Table2 limit 1";

        $q2Correct = getTest($q2query);


        Try {
            $q2UserInput = getTest($question2);
            $q2Correctstr = json_encode($q2Correct);
            $q2UserInputstr = json_encode($q2UserInput);
            $match2 = strcmp($q2Correctstr, $q2UserInputstr);

            if ($match2 == 0) {
                $q2Points = 1;
                $q2Message = "Correct";
            }
        } catch (Exception $e) {

           
        }


        //Scoring for question three
        $q3query = "Select Table1.TextValue as 'Column1', Table2.TextValue as "
                . "'Column2' from Table1 left join Table2 on (Table1.ID = Table2.ID) limit 3";

        $q3Correct = getTest($q3query);


        Try {
            $q3UserInput = getTest($question3);
            $q3Correctstr = json_encode($q3Correct);
            $q3UserInputstr = json_encode($q3UserInput);
            $match3 = strcmp($q3Correctstr, $q3UserInputstr);

            if ($match3 == 0) {
                $q3Points = 1;
                $q3Message = "Correct";
            }
        } catch (Exception $e) {

           
           
        }


        //Scoring for question four
        $q4query = "Select Concat(TextValue)ValueList from Table1 Union All Select "
                . "Concat(TextValue) ValueList from Table2 order by ValueList";

        $q4Correct = getTest($q4query);


        Try {
            $q4UserInput = getTest($question4);
            $q4Correctstr = json_encode($q4Correct);
            $q4UserInputstr = json_encode($q4UserInput);
            $match4 = strcmp($q4Correctstr, $q4UserInputstr);

            if ($match4 == 0) {
                $q4Points = 1;
                $q4Message = "Correct";
            }
        } catch (Exception $e) {

           
        }


        //Scoring for question five
        $q5query = "Select TextValue from Table2 limit 1,2";

        $q5Correct = getTest($q5query);


        Try {
            $q5UserInput = getTest($question5);
            $q5Correctstr = json_encode($q5Correct);
            $q5UserInputstr = json_encode($q5UserInput);
            $match5 = strcmp($q5Correctstr, $q5UserInputstr);

            if ($match5 == 0) {
                $q5Points = 1;
                $q5Message = "Correct";
            }
        } catch (Exception $e) {

         
        }
        
        
        if (strpos($q1lower, $chkwhr) !== false) {
            $q1Points = 0;
            $f1Message = " - Filtering Used";
        }
        if (strpos($q2lower, $chkwhr) !== false) {
            $q2Points = 0;
            $f2Message = " - Filtering Used";
        }
        if (strpos($q3lower, $chkwhr) !== false) {
            $q3Points = 0;
            $f3Message = " - Filtering Used";
        }
        if (strpos($q4lower, $chkwhr) !== false) {
            $q4Points = 0;
            $f4Message = " - Filtering Used";
        }
        if (strpos($q5lower, $chkwhr) !== false) {
            $q5Points = 0;
             $f5Message = " - Filtering Used";
        }
        
        $totalPoints = ($q1Points + $q2Points + $q3Points + $q4Points + $q5Points) / 5;
        
        if($q1Points == 1) { 
            $q1Message = "Correct";          
        }
        else {
            $q1Message = "Incorrect";          
        }
        
        if($q2Points == 1) { 
            $q2Message = "Correct";          
        }
        else {
            $q2Message = "Incorrect";          
        }
        
        if($q3Points == 1) { 
            $q3Message = "Correct";          
        }
        else {
            $q3Message = "Incorrect";          
        }
        
        if($q4Points == 1) { 
            $q4Message = "Correct";          
        }
        else {
            $q4Message = "Incorrect";          
        }
        
        if($q5Points == 1) { 
            $q5Message = "Correct";          
        }
        else {
            $q5Message = "Incorrect";          
        }
        
        $score = $totalPoints * 100;
        
       
        include '../TCPDF-master/pdftest.php';
//        break;
//}
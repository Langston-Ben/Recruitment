

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <?php $ptitle = "Database Practice";
        include $_SERVER['DOCUMENT_ROOT'] . '/Recruitment/common/head.php';
        ?>
        <script>
            function goBack() {
                window.history.back()
            }
            
            var textContainer, textareaSize, input;
var autoSize = function () {
  // also can use textContent or innerText
  textareaSize.innerHTML = input.value + '\n';
};

document.addEventListener('DOMContentLoaded', function() {
  textContainer = document.querySelector('.textarea-container');
                    textareaSize = textContainer.querySelector('.textarea-size');
                    input = textContainer.querySelector('textarea');

                    autoSize();
                    input.addEventListener('input', autoSize);
                });


        </script>
    </head>
    <body>
        <header>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/Recruitment/common/header.php'; ?>
        </header>


        <nav>
<?php $page = 'home';
include $_SERVER['DOCUMENT_ROOT'] . '/Recruitment/common/nav.php'; ?> 
            <!--   <?php echo $navList; ?> -->
        </nav>

        <h1>Welcome to the Query Practice Page</h1> 
        <p>Please read the instructions and practice your queries</p>
        
        <p>The database contains the following tables:</p>
        
        <ul>
            <li>Customers</li>
            <li>Address</li>
            <li>Vehicle</li>
        </ul>

  <!--      <figure>
        <img src="/Recruitment/images/databasetemplate.jpg" alt="Database Template" width="300">
        </figure> -->
        


        <button onclick="goBack()" id="button">Reload Previous Query</button><br><br>

        <form action="/Recruitment/control/practice.php" method="post"> 

        <!--    <div class="practice"><input name="query" type="text" size="100"/><br><br></div> -->
            
            <div class="textarea-container">
  <
 
            
            
            <textarea class="autofit" name="query"></textarea> <div class="textarea-size"></div>
</div>
            <div class="submit"><input id="submit" type="submit" name="submit" value="Submit" /></div> 
            <input type="hidden" name="action" value="query">

        </form><br>
        <?php if (isset($message)) {
            echo $message;
        } ?>
        <?php if (isset($querylist)) {
            echo $querylist;
        } ?><br>
        <!--     <footer><br><br>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/recruitment/common/footer.php'; ?>
                      <p>Last updated:
<?php echo date("j F, Y", getlastmod()) ?>
                      </p>
                  </footer>  -->
        
<!--        <script src="/Recruitment/script/scripts.js"></script>-->
<!--        <script type="text/javascript" src="/Recruitment/script/jquery-3.4.1.min.js"></script>
        <script src="script/jquery-3.4.1.min.js"></script>-->
<!--        <script src="/Recruitment/script/textareasizing"></script> -->
       

    </body>
    
    
</html>

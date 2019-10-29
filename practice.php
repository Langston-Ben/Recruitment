

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
            
            var autoExpand = function (field) {

	// Reset field height
	field.style.height = 'inherit';

	// Get the computed styles for the element
	var computed = window.getComputedStyle(field);

	// Calculate the height
	var height = parseInt(computed.getPropertyValue('border-top-width'), 10)
	             + parseInt(computed.getPropertyValue('padding-top'), 10)
	             + field.scrollHeight
	             + parseInt(computed.getPropertyValue('padding-bottom'), 10)
	             + parseInt(computed.getPropertyValue('border-bottom-width'), 10);

	field.style.height = height + 'px';

};

document.addEventListener('input', function (event) {
	if (event.target.tagName.toLowerCase() !== 'textarea') return;
	autoExpand(event.target);
}, false);

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
        
        
        
         <div class="database">
        
            <img src="/Recruitment/images/database.jpg" alt="database" >
        </div>
        
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

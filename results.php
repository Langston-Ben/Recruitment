<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        
        <?php $ptitle = "Results";
        include $_SERVER['DOCUMENT_ROOT'] . '/recruitment/common/head.php'; ?>
       
        <script type="text/javascript" language="javascript">
        
        function moveWindow() 
        {
            window.location.hash="jump";
        }
        
        </script>
    </head>
  
    <!--<body>-->
        
    <body onload="moveWindow()">

   <!--     <nav>
            <?php $page='home'; include $_SERVER['DOCUMENT_ROOT'].'/Recruitment/common/nav.php'; ?> 
         <!--   <?php echo $navList; ?> -->
  <!--      </nav> -->
    
        <h1>Results:</h1> 
        <div class="overflow"><?php if (isset($query)) {echo $query;} ?></div>
        
        <div class="jump"><a name="jump"></a></div>
        
         <?php if (isset($message)) {echo $message; 
         echo "<div class='finish'<p><a href='/Recruitment/index.php' title='Home'>Home</a></p></div>";} ?>
        <?php if (isset($querylist)) {echo $querylist;} ?><br>
        
      
       
      
        
   <!--     <footer><br><br>
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/recruitment/common/footer.php'; ?>
                <p>Last updated:
                    <?php echo date("j F, Y", getlastmod()) ?>
                </p>
            </footer> -->
    </body>
</html>
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


<!DOCTYPE html>
<html>
    <head>
        
        <?php $ptitle = "Confirmation";
        include $_SERVER['DOCUMENT_ROOT'] . '/Recruitment/common/head.php'; ?>
       
    </head>
  
    <!--<body>-->
        
    <!--<body onload="moveWindow()">-->

        <nav>
            <?php $page='home'; include $_SERVER['DOCUMENT_ROOT'].'/Recruitment/common/nav.php'; ?> 
           
        </nav> 
    
        <h1>Confirmation:</h1> 
        <div class="overflow"><?php if (isset($query)) {echo $query;} ?></div>
        
<!--        <div class="jump"><a name="jump"></a></div> -->
        
         <?php if (isset($message)) {echo $message; 
         echo "<div class='finish'<p><a href='/Recruitment/index.php' title='Home'>Home</a></p></div>";} ?>
        <?php if (isset($querylist)) {echo $querylist;} ?><br>
        
      
       
      
        
        <footer><br><br>
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/Recruitment/common/footer.php'; ?>
                <p>Last updated:
                    <?php echo date("j F, Y", getlastmod()) ?>
                </p>
            </footer> 
    </body>
</html>

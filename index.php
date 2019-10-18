<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        
        <?php $ptitle = "Welcome";
        include $_SERVER['DOCUMENT_ROOT'] . '/recruitment/common/head.php'; ?>
    </head>
  
    <body>
        
         <header>
            <?php include $_SERVER['DOCUMENT_ROOT'].'/Recruitment/common/header.php'; ?>
        </header>

        <nav>
            <?php $page='home'; include $_SERVER['DOCUMENT_ROOT'].'/Recruitment/common/nav.php'; ?> 
         <!--   <?php echo $navList; ?> -->
        </nav>
    
        <h1>Welcome to the Recruitment Page</h1> 
        <p>Please click the link to proceed to the data practice and form submission</p>
        
        <a href="submitform.php">Data Form</a>
        
        <footer><br><br>
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/recruitment/common/footer.php'; ?>
                <p>Last updated:
                    <?php echo date("j F, Y", getlastmod()) ?>
                </p>
            </footer>
    </body>
</html>

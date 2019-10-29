
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        
        <?php $ptitle = "Welcome";
        include $_SERVER['DOCUMENT_ROOT'] . '/Recruitment/common/head.php'; ?>
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
        <p>Please proceed to the Submission Form to complete the database skills assessment.<br>
           Your results will be reviewed by a recruiter as soon as possible.<br>
           Please utilize the practice page to test your queries to build better results.</p>
        <p>Please click the link to proceed to the data practice and form submission</p>
        
        <a href="/Recruitment/submitform.php">Data Form</a><br><br>
        
        <footer><br><br>
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/Recruitment/common/footer.php'; ?>
                <p>Last updated:
                    <?php echo date("j F, Y", getlastmod()) ?>
                </p>
            </footer>
    </body>
</html>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="en-us">
     <head>
        <?php $ptitle = "Thank You";
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
    
        <h1>Thank you for the submission!</h1> 
        <p>Someone will contact in the future.</p>
        
       <footer><br><br>
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/recruitment/common/footer.php'; ?>
                <p>Last updated:
                    <?php echo date("j F, Y", getlastmod()) ?>
                </p>
            </footer>
    </body>
</html>


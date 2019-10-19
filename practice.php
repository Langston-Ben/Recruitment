

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <?php $ptitle = "Database Practice";
        include $_SERVER['DOCUMENT_ROOT'] . '/Recruitment/common/head.php'; ?>
        <script>
function goBack() {
  window.history.back()
}
</script>
    </head>
    <body>
        
  

        <nav>
            <?php $page='home'; include $_SERVER['DOCUMENT_ROOT'].'/Recruitment/common/nav.php'; ?> 
         <!--   <?php echo $navList; ?> -->
        </nav>

        <h1>Welcome to the Query Practice Page</h1> 
        <p>Please read the instructions and practice your queries</p>
        
        

        <button onclick="goBack()">Refresh for Next Query</button><br><br>

<form action="control/practice.php" method="post"> 
<!--  <form action="model/test.php" method="post"> -->
           
            <input name="query" type="text" size="100"/><br><br>
            <input type="submit" name="submit" value="Submit" /> 
            
</form><br>
    <?php if (isset($message)) {echo $message;} ?>
    <?php if (isset($querylist)) {echo $querylist;} ?><br>
  <!--     <footer><br><br>
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/recruitment/common/footer.php'; ?>
                <p>Last updated:
                    <?php echo date("j F, Y", getlastmod()) ?>
                </p>
            </footer>  -->
    </body>
</html>
 


<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Query Practice</title>
    </head>
    <body>

        <h1>Welcome to the Query Practice Page</h1> 
        <p>Please read the instructions and practice your queries</p>

        <form action="control/practice.php" method="post">
            <label for="query">Enter Query</label><br><br>
            <input name="query" type="text" size="100" id="query"/><br><br>
            <input type="submit" name="submit" value="Submit" />
            <input type="hidden" name="action" value="query">
        </form>
    </body>
</html>
 
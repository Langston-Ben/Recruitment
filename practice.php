

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
        <script>
function goBack() {
  window.history.back()
}
</script>
    </head>
    <body>

        <h1>Welcome to the Query Practice Page</h1> 
        <p>Please read the instructions and practice your queries</p>
        
        

        <button onclick="goBack()">Refresh for Next Query</button><br><br>

<form action="control/practice.php" method="post"> 
<!--  <form action="model/test.php" method="post"> -->
           
            <input name="query" type="text" size="100"/><br><br>
            <input type="submit" name="submit" value="Submit" /> 
            
        </form>
        
    </body>
</html>
 
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Submission Page</title>
    </head>
    <body>

        <main>
            <h1 class="entryform">Candidate Submission</h1>
            <p>Click Here To Practice Your Queries</p>
            <a href="practice.php">Practice Page</a><br><br>
            
          <!--  <form action="thankyou.php" method="post" target="_self"> -->
                <form action="mailto:blang77@aol.com" method="post" enctype="text/plain">
                <fieldset>
                    <legend>Please answer and submit the following:</legend><br>
                    <label>Please Enter Your Email Address For Tracking:<br> <input type="email" name="email" placeholder="joseph@smith.com"  size="20" maxlength="80">
                    </label>

                    <label><br><br>Question 1<br>Please Enter Your Solution For Question 1<br><input type="text" name="question1" size="80" required></label>
                    <label><br><br>Question 2<br>Please Enter Your Solution For Question 2<br><input type="text" name="question2" size="80" required></label>
                    <label><br><br>Question 3<br>Please Enter Your Solution For Question 3<br><input type="text" name="question3" size="80" required></label>
                    <label><br><br>Question 4<br>Please Enter Your Solution For Question 4<br><input type="text" name="question4" size="80" required></label>
                    <label><br><br>Question 5<br>Please Enter Your Solution For Question 5<br><input type="text" name="question5" size="80" required></label>
                    <label><br><br>Question 6<br>Please Enter Your Solution For Question 6<br><input type="text" name="question6" size="80" required></label>
                    <label><br><br>Question 7<br>Please Enter Your Solution For Question 7<br><input type="text" name="question7" size="80" required></label>
                    <label><br><br>Question 8<br>Please Enter Your Solution For Question 8<br><input type="text" name="question8" size="80" required></label>
                    <label><br><br>Question 9<br>Please Enter Your Solution For Question 9<br><input type="text" name="question9" size="80" required></label>
                    <label><br><br>Question 10<br>Please Enter Your Solution For Question 10<br><input type="text" name="question10" size="80" required></label><br><br>

                </fieldset>

                <fieldset>

                    <p>
                        <label for="comments">Additional Comments:</label><br />
                        <textarea rows="4" cols="60" id="comments"></textarea>
                    <p><input class="submit" type="submit" value="Submit" /></p>
                    
                    <button type="reset" value="Reset">Reset</button>
                </fieldset>
            </form>
        </main>

    </body>
</html>

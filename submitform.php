<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>

        <?php $ptitle = "Form Submission";
        include $_SERVER['DOCUMENT_ROOT'] . '/Recruitment/common/head.php';
        ?>

        <script>
            var textContainer, textareaSize, input;
            var autoSize = function () {
                // also can use textContent or innerText
                textareaSize.innerHTML = input.value + '\n';
            };

            document.addEventListener('DOMContentLoaded', function () {
                textContainer = document.querySelector('.textarea-container');
                textareaSize = textContainer.querySelector('.textarea-size');
                input = textContainer.querySelector('textarea');

                autoSize();
                input.addEventListener('input', autoSize);
            });
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

        <main>
            <h1 class="entryform">Candidate Submission</h1>
            <p>Click Here To Practice Your Queries</p>
            <a href="/Recruitment/control/practice.php?action=newquery">Practice Page</a><br><br>

            <!--  <form action="thankyou.php" method="post" target="_self"> -->
            <form action="mailto:blang77@aol.com" method="post" enctype="text/plain">
                <fieldset>
                    <legend>Please answer and submit the following:</legend><br>
                    <label>Please Enter Your Email Address For Tracking:<br> <input type="email" name="email" placeholder="joseph@smith.com"  size="40" maxlength="80">
                    </label>

                    <div class="textarea-container"><br><br>Question 1<br>Please Enter Your Solution For Question 1<br>
                        <textarea class="autofit" name="question1"  required></textarea><div class="textarea-size"></div></div><br>

                    <div class="textarea-container"><br><br>Question 2<br>Please Enter Your Solution For Question 2<br>
                        <textarea class="autofit" name="question2" required></textarea><div class="textarea-size"></div></div><br>

                    <div class="textarea-container"><br><br>Question 3<br>Please Enter Your Solution For Question 3<br>
                        <textarea class="autofit" name="question1"  required></textarea><div class="textarea-size"></div></div><br>

                    <div class="textarea-container"><br><br>Question 4<br>Please Enter Your Solution For Question 4<br>
                        <textarea class="autofit" name="question2" required></textarea><div class="textarea-size"></div></div><br>

                    <div class="textarea-container"><br><br>Question 5<br>Please Enter Your Solution For Question 5<br>
                        <textarea class="autofit" name="question1"  required></textarea><div class="textarea-size"></div></div><br> 

                    <div class="textarea-container"><br><br>Question 6<br>Please Enter Your Solution For Question 6<br>
                        <textarea class="autofit" name="question2" required></textarea><div class="textarea-size"></div></div><br>

                    <div class="textarea-container"><br><br>Question 7<br>Please Enter Your Solution For Question 7<br>
                        <textarea class="autofit" name="question1"  required></textarea><div class="textarea-size"></div></div><br>

                    <div class="textarea-container"><br><br>Question 8<br>Please Enter Your Solution For Question 8<br>
                        <textarea class="autofit" name="question2" required></textarea><div class="textarea-size"></div></div><br>

                    <div class="textarea-container"><br><br>Question 9<br>Please Enter Your Solution For Question 9<br>
                        <textarea class="autofit" name="question1"  required></textarea><div class="textarea-size"></div></div><br> 

                    <div class="textarea-container"><br><br>Question 10<br>Please Enter Your Solution For Question 10<br>
                        <textarea class="autofit" name="question2" required></textarea><div class="textarea-size"></div></div><br><br><br>    


                </fieldset>

                <fieldset>


                    <div class="textarea-container"><br><br>Additional Comments:<br />
                        <textarea class="autofit" id="comments"></textarea><div class="textarea-size"></div></div><br><br><br> 
                    <p><input class="submit" type="submit" value="Submit" />

                        <button type="reset" value="Reset">Reset</button>
                </fieldset>
            </form>
        </main>
        <footer><br><br>
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/Recruitment/common/footer.php'; ?>
            <p>Last updated:
<?php echo date("j F, Y", getlastmod()) ?>
            </p>
        </footer>

    </body>
</html>

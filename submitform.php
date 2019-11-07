<?php session_start(); ?>
<!DOCTYPE html>

<html>
    <head>

        <!--<script src="https://code.jquery.com/jquery-3.4.1.js"></script>-->
        <script src="/Recruitment/script/jquery-3.4.1.js"></script>
        <?php
        $ptitle = "Form Submission";
        include $_SERVER['DOCUMENT_ROOT'] . '/Recruitment/common/head.php';
        ?>

        <script>
            var autoExpand = function (field) {

                // Reset field height
                field.style.height = 'inherit';

                // Get the computed styles for the element
                var computed = window.getComputedStyle(field);

                // Calculate the height
                var height = parseInt(computed.getPropertyValue('border-top-width'), 10)
                        + parseInt(computed.getPropertyValue('padding-top'), 10)
                        + field.scrollHeight
                        + parseInt(computed.getPropertyValue('padding-bottom'), 10)
                        + parseInt(computed.getPropertyValue('border-bottom-width'), 10);

                field.style.height = height + 'px';

            };

            document.addEventListener('input', function (event) {
                if (event.target.tagName.toLowerCase() !== 'textarea')
                    return;
                autoExpand(event.target);
            }, false);


            if (sessionStorage) {
                $(function () {

                    $("#saveForm")
                            .after("<input type='submit' value='Save Input' id='saveInput'>");

                    // by using onchange, the form will be saved everytime something changes on the input.
                    $("#saveInput")
                    document.getElementById("submission").onchange =
                            (function (e) {
                                e.preventDefault();
                                sessionStorage.setItem("flag", "set");

                                var data = $("#submission").serializeArray();
                                $.each(data, function (i, obj) {
                                    sessionStorage.setItem(obj.name, obj.value);
                                });
                            });

                    if (sessionStorage.getItem("flag") === "set") {

//                $("header").before("<p>This for has saved data!</p>");

                        var data = $("#submission").serializeArray();
                        $.each(data, function (i, obj) {
                            $("[name='" + obj.name + "']").val(sessionStorage.getItem(obj.name));
                        });
                    }

                    $("#clearData")
                            .click(function (e) {
                                e.preventDefault();
                                sessionStorage.setItem("flag", "");
                                location.reload();
                            })
                });
            }

            $(document).ready(function () {
                $('textarea').on("load propertychange keyup input paste",
                        function () {
                            var text_max = 500;
                            var cc = $(this).val().length;
                            var id = $(this, 'textarea').attr('id');
                            //  var text_length = $('textarea').val().length;
                            var tr = text_max - cc;
                            $('#' + id).next('p').text('Characters Remaining: ' + tr);
                            console.log(tr);
                        });

                $('textarea').trigger('load');

            });

        </script>
    </head>

    <body>

        <header>
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/Recruitment/common/header.php'; ?>
        </header>

        <nav>
            <?php
            $page = 'home';
            include $_SERVER['DOCUMENT_ROOT'] . '/Recruitment/common/nav.php';
            ?>
        </nav>


<?php if (isset($message)) {
    echo $message;
} ?>

        <main>
            <h1 class="entryform">Candidate Submission</h1>
            <p>Click Here To Practice Your Queries</p>
            <a href="/Recruitment/control/practice.php?action=newquery">Practice Page</a><br><br>

            <form action="/Recruitment/control/pdfcontrol.php" method="post" id="submission" 
                  autocomplete="on">
                <fieldset>
                    <legend>Please answer and submit the following:</legend><br>
                    <h4>*Please note, input boxes are limited to 500 characters.*</h4>
                    <label>Please Enter Your Email Address For Tracking:<br> 
                        <input type="email" name="email" placeholder="joseph@smith.com"  
                               size="40" maxlength="80">
                    </label>

                    <br><br>Question 1<br>Please Enter Your Solution For Question 1<br>
                    <textarea class="autofit" name="question1" id="area1" 
                              maxlength="500" required></textarea><p></p>

                    <br><br>Question 2<br>Please Enter Your Solution For Question 2<br>
                    <textarea class="autofit" name="question2" id="area2" 
                              maxlength="500" required></textarea><p></p>


                    <br><br>Question 3<br>Please Enter Your Solution For Question 3<br>
                    <textarea class="autofit" name="question3" id="area3" 
                              maxlength="500" required></textarea><p></p>


                    <br><br>Question 4<br>Please Enter Your Solution For Question 4<br>
                    <textarea class="autofit" name="question4" id="area4" 
                              maxlength="500" required></textarea><p></p>

                    <br><br>Question 5<br>Please Enter Your Solution For Question 5<br>
                    <textarea class="autofit" name="question5"  id="area5" 
                              maxlength="500" required></textarea><p></p>

                    <br><br>Question 6<br>Please Enter Your Solution For Question 6<br>
                    <textarea class="autofit" name="question6" id="area6" 
                              maxlength="500" required></textarea><p></p>

                    <br><br>Question 7<br>Please Enter Your Solution For Question 7<br>
                    <textarea class="autofit" name="question7"  id="area7" 
                              maxlength="500" required></textarea><p></p>

                    <br><br>Question 8<br>Please Enter Your Solution For Question 8<br>
                    <textarea class="autofit" name="question8" id="area8" 
                              maxlength="500" required></textarea><p></p>

                    <br><br>Question 9<br>Please Enter Your Solution For Question 9<br>
                    <textarea class="autofit" name="question9" id="area9" 
                              maxlength="500" required></textarea><p></p>

                    <br><br>Question 10<br>Please Enter Your Solution For Question 10<br>
                    <textarea class="autofit" name="question10" id="area10" 
                              maxlength="500" required></textarea><p></p>

                </fieldset>

                <fieldset>

                    <br><br>Additional Comments: (optional)<br />
                    <textarea class="autofit" name="comments" id="comments" maxlength="500"></textarea><p></p>
                    <input class="submit" type="submit" value="Submit">
                    <input type="hidden" name="action" value="createform">                    

                    <button type="submit" value="Clear Data" id="clearData">Clear Form</button>

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

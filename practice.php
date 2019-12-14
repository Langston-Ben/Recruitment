<!DOCTYPE html>
<html lang="en-us">
    <head>
        <?php $ptitle = "Database Practice";
        include $_SERVER['DOCUMENT_ROOT'] . '/Recruitment/common/head.php';
        ?>
        <script src="/Recruitment/script/jquery-3.4.1.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script type = "text/javascript">
            function goBack() {
                window.history.back();
            }
            
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
	if (event.target.tagName.toLowerCase() !== 'textarea') return;
	autoExpand(event.target);
}, false);



$(document).ready(function(){
if(localStorage.getItem("imageHidden") === "true" ){
    $("#img").hide();
  
} else if (localStorage.getItem("imageHidden") === "false" ) {
    $("#img").show();
//  localStorage.setItem("flag", "");
};

$("#btn").on("click", function(){ 
    $("#img").hide();
    localStorage.setItem("imageHidden", "true");
});

$("#showBtn").on("click", function(){
    $("#img").show(); 
    localStorage.setItem("imageHidden", "false");
});

  });
  
  
  if (sessionStorage) {
                $(function () {

                    $("#saveForm")
                            .after("<input type='submit' value='Save Input' id='saveInput2'>");

                    // by using onchange, the form will be saved everytime something changes on the input.
                    $("#saveInput2")
                    document.getElementById("practicedb").onchange =
                            (function (e) {
                                e.preventDefault();
                                sessionStorage.setItem("flag", "set");

                                var data = $("#practicedb").serializeArray();
                                $.each(data, function (i, obj) {
                                    sessionStorage.setItem(obj.name, obj.value);
                                });
                            });

                    if (sessionStorage.getItem("flag") === "set") {

//                $("header").before("<p>This for has saved data!</p>");

                        var data = $("#practicedb").serializeArray();
                        $.each(data, function (i, obj) {
                            $("[name='" + obj.name + "']").val(sessionStorage.getItem(obj.name));
                        });
                    }

                    $("#clearData2")
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
    <!--<body onload="onLoad()">-->
        <header>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/Recruitment/common/header.php'; ?>
        </header>


        <nav>
<?php $page = 'home';
include $_SERVER['DOCUMENT_ROOT'] . '/Recruitment/common/nav.php'; ?> 
            <!--   <?php echo $navList; ?> -->
        </nav>

        <h1>Welcome to the Query Practice Page</h1>
        
        
        
         <div class="database">
        
            <img src="/Recruitment/images/db.jpg" alt="database" id="img" >
         </div><br>
        <!--<button onclick="onClose()">Toggle between hide() and show()</button>-->
        <button Id="btn">Hide</button>
        <button id="showBtn">Show</button>
        
        <p>Please read the instructions and practice your queries</p>
        <p>The practice database is built on the MySQL platform.</p>
        
        <p>The database contains the following tables:</p>
        
        
        <ul>
            <li>Table1</li>
            <li>Table2</li>         
        </ul>
        
        <p>*Please note, queries are limited to 500 characters.*</p>
        
       

        <!--<button onclick="goBack()" id="button">Clear Previous Query</button><br><br>-->
        
        <button type="submit" value="Clear Previous Query" id="clearData2">Clear Previous Query</button><br><br>

        <form action="/Recruitment/practice/index.php" method="post" id="practicedb"> 

        <!--    <div class="practice"><input name="query" type="text" size="100"/><br><br></div> -->
            
            <div class="textarea-container">

            <textarea class="autofit" name="query" id="queryInput" maxlength="500"></textarea><p></p> 
            
            <div class="textarea-size"></div>
            </div>
            <div class="submit"><input id="submit" type="submit" name="submit" value="Submit" /></div> 
            <input type="hidden" name="action" value="query">

        </form><br>
        <?php if (isset($message)) {
            echo $message;
        } ?>
        <?php if (isset($querylist)) {
            echo $querylist;
        } ?><br>
        

        <!--     <footer><br><br>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/recruitment/common/footer.php'; ?>
                      <p>Last updated:
<?php echo date("j F, Y", getlastmod()) ?>
                      </p>
                  </footer>  -->
        

    </body>
    
    
</html>

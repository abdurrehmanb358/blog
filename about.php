<?php
include("index.php");
?>
<html>
    <head>
        <title>AJAX Form Submit without Page Refresh</title>
    </head>
    <body>
    
    <form id="myForm">
        <input type="text" name="name" placeholder="Enter your name" required />
        <input type="text" name="email" placeholder="Email ID" required />
        <input type="text" name="city" placeholder="City" required />
        <input type="submit" name="submit" value="Submit Form" />
    </form>
    
    <div id="postData"></div>
    
    <script src="js/jquery-1.10.2.js" type="text/javascript"></script>
    <script type="text/javascript">
    $(document).ready(function(){
        $('#myForm').submit(function(e){
            e.preventDefault();

               if(con==pass){
                
               }








            $.ajax({
                url: ".php",
                type: "POST",
                data: $(this).serialize(),
                success: function(data){
                    $("#postData").html(data);
                },
                error: function(){
                    alert("Form submission failed!");
                }
            });
        });
    });
    </script>
    </body>
</html>






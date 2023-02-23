<?php

include("config.php")
?>
<html lang="en">
<head>
<style>
  .div{
    margin-left:535px;
  }
</style>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <title>Posts</title>
</head>

<body>
   <?php 
   $id = $_GET["id"];
   $sql = "SELECT * FROM posts where id =$id";
   $result = mysqli_query($conn, $sql);
   if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    ?>
       <div class="w-4/5 m-auto text-left">
           <div class="py-15">
               <h1 class="text-6xl"style="margin-top:20px">
               <?php echo ($row['title'])?>
                   </h1>
           </div>
       </div>
       <div class="sm:grid grid-cols-1 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200" style ="width:400px">
               
       <img class="card-img-top" src="/blog/img/<?php echo $row['image']?>" alt="Card image cap" width="100%" height="300px">
               </div>
       <div class="w-4/5 m-auto pt-20">
           <span class="text-gray-500">
           
           <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light" style="text-align:center;">
           <?php echo ($row['content'])?>
       
           </p>
       </div>
<?php     } ?>   
    

   
   
   </body>
</html>
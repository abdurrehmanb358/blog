<?php
include("index.php");
include("config.php")
?>
<html lang="en">
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
  <div class="container">

    <div class="row mt-5 ">

      <?php
      $sql = "SELECT * FROM posts";
      $result = mysqli_query($conn, $sql);
      if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while ($row = mysqli_fetch_assoc($result)) { ?>


          <div class="col-4"  >

            <div class="card" style="width: 22rem;">
            <img class="card-img-top" src="/blog/img/<?php echo $row['image']?>" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title"><?php echo substr($row['title'],0,10)  ?></h5>
                <p class="card-text"> <?php echo substr($row['content'],0,15) ?></p>
                <a href="#" class="btn btn-primary">Read More</a>
              </div>

            </div>

            </div>
        <?php
         }}?>
        </div>
      </div>
    </div>
   <?php
  //  include("config.php");
  $sql1 =" SELECT * FROM posts ";
  $result1 = mysqli_query($conn ,$sql1 ) or die ("quary failed");
  if (mysqli_num_rows($result1) > 0) {
     $total_records = mysqli_num_rows($result1);
     $limit = 3;
     $total_page = ceil( $total_records/ $limit);
        echo '<div class="pagination">';
        for($i = 1; $i <= $total_page; $i++){

         echo '<li><a href="tulip.php?page='.$i.'"></a>'.$i.'</li>';


    } 
       echo '</div>';
    }
   
   ?> 
<nav aria-label="...">
  <ul class="pagination pagination-lg">
    
    <li><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
  </ul>
</nav>
   
   
   
   

</div>

</body>

</html>
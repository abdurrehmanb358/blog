<?php
include("config.php");
?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <title>Posts</title>
  <style>
    #gg{
      margin-left:1275px ;
    }
  </style>
</head>


<body>
<?php
include("nav.php");
     ?>    

<div class="container main-div">

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
                <p class="card-text"> <?php echo substr($row['content'],0,50) ?></p>
                <a class="btn btn-primary" href='detail.php?id=<?php echo $row["id"] ?>'>Read more</a>
              </div>

            </div>

            </div>
        <?php
         }}?>


</body>

</html>
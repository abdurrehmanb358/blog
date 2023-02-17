 <!-- <div class="header">
  <h1 class ="center"> NEWS</h1></div>
  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <!-- <a class="navbar-brand" href="#">WebSiteName</a> -->
    <!-- </div>
    <ul class="nav navbar-nav">
      <!-- <li class="active"><a href="#">Home</a></li> -->
      <li id="center"><a href="#">BUSINESS</a></li>
      <li><a href="#">ENTERTAINMENT</a></li>
      <li><a href="#">SPORTS</a></li>
      <li><a href="#">POLITICS</a></li>
    </ul>
  </div>
</nav>
<div class= "contaner">
    <div class="pic">
        <img src ="img/img1.jpg" alt=""   width="300px" height="170px">
            <h2> <p class="size">Lorem ipsum dolor sit amet consectetur,<br> adipisicing elit.
            <br>
            <br>
           <p class="font">Lorem ipsum dolor sit amet consectetur adipisicing elit. <br> Suscipit accusamus iste, blanditiis vero illum debitis.....
            </p>
            <input type="button" value="Read More" id="btn">
             </p></h2>
             </div> -->


</div> */









<div class="container col-md-7" >
<?php
$sql = "SELECT * FROM posts";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {?>
    <div class="col-md-7">
    <div class="card-body row-md-5">
      <img class="card-img-top" src="pic\img\" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title"><?php echo $row['title']; ?></h5>
        <p class="card-text"><?php echo $row['content']; ?></p>
        <a href="" class="btn btn-primary">Read More</a>
      </div>
    </div>
    </div>
  </div>

    
        <?php
  }
}

?>








.header{
    
    text-align: center;
    color: white;
    background-color:blue;
       padding-top: 10px;
       padding-bottom:30px ;
    
}
.center{
    margin-top: 2px;
}
.navbar-inverse .navbar-nav>li>a {
color:white;

box-sizing: content-box;

}
#center{
margin-left: 550px;
}
.pic{
margin-left: 150px;
display: flex;
background-color: white;

}
.size{
color: blue;
margin-left: 25px;
margin-top: -12px;
}
.font{
font-size:23px;
margin-left: 25px;
}
#btn{
font-size:15px ;
margin-left: 500px;
background-color: blue;
 border-radius: 16px;
 padding-right: 16px;
 padding-left: 15px;
 padding-top: 7px;
 padding-bottom:7px ;
color: white;

}




</style>
<?pgp
$pageno =
        $no_of_records_per_page = 3;
        $offset = ($pageno);
       $total_pages_sql = "SELECT * FROM posts";
        $result = mysqli_query($conn,$total_pages_sql);
        $total_rows = mysqli_fetch_array($result)[0];
        $total_pages = ceil($total_rows / $no_of_records_per_page);

        $sql = "SELECT * FROM posts";
        $res_data = mysqli_query($conn,$sql);
        while($row = mysqli_fetch_array($res_data)){
            //here goes the data
        }
        mysqli_close($conn);
    ?>
    <ul class="pagination">
        <li><a href="">First</a></li>
        <li class="<?php if($pageno <= 1){ echo ''; } ?>">
            <a href="<?php if($pageno <= 1){ echo ''; } else { echo "?pageno=".($pageno - 1); } ?>">Prev</a>
        </li>
        <li class="<?php if($pageno >= $total_pages){ echo 'content'; } ?>">
            <a href="<?php if($pageno >= $total_pages){ echo 'image'; } else { echo "?pageno=".($pageno + 1); } ?>">Next</a>
        </li>
        <li><a href="?pageno=<?php echo $total_pages; ?>">Last</a></li>
    </ul>




    <?php


if (isset($_GET['page_no']) && $_GET['page_no'] != "") {
  $page_no = $_GET['page_no'];
} else {
  $page_no = 1;
}
$total_records_per_page = 3;

$offset = ($page_no - 1) * $total_records_per_page;
$previous_page = $page_no - 1;
$next_page = $page_no + 1;
$adjacents = "2";
$result_count = mysqli_query(
  $conn,
  "SELECT COUNT(*) As total_records FROM `posts`"
);
$total_records = mysqli_fetch_array($result_count);
$total_records = $total_records['total_records'];
$total_no_of_pages = ceil($total_records / $total_records_per_page);
$second_last = $total_no_of_pages - 1; // total pages minus 1
?>
<ul class="pagination">
  <?php if ($page_no > 1) {
    echo "<li><a href='?home.php'>First Page</a></li>";
  } ?>

  <li <?php if ($page_no <= 1) {
        echo "class='disabled'";
      } ?>>
    <a <?php if ($page_no > 1) {
          echo "href='home.php?$total_records_per_page=$previous_page'";
        } ?>>Previous</a>
  </li>

  <li <?php if ($page_no >= $total_no_of_pages) {
        echo "class='disabled'";
      } ?>>
    <a <?php if ($page_no < $total_no_of_pages) {
          echo "href='home.php?$total_records_per_page=$next_page'";
        } ?>>Next</a>
  </li>

  <?php if ($page_no < $total_no_of_pages) {
    echo "<li><a href='?page_no1=$total_no_of_pages'>Last &rsaquo;&rsaquo;</a></li>";
  } ?>
</ul>


  

</script>

<?php

if (isset($_GET['pageno'])) {
    $pageno = $_GET['pageno'];
} else {
    $pageno = 1;
}
$no_of_records_per_page = 3;
$offset = ($pageno-1) * $no_of_records_per_page;

$total_pages_sql = "SELECT COUNT(id) FROM posts";
// echo  $total_pages_sql;
// exit;


$result = mysqli_query($conn,$total_pages_sql);
$total_rows = mysqli_fetch_array($result)[0];
$total_pages = ceil($total_rows / $no_of_records_per_page);

$sql = "SELECT * FROM posts LIMIT $offset, $no_of_records_per_page";
$res_data = mysqli_query($conn,$sql);
while($row = mysqli_fetch_array($res_data)){?>
<?php

}
mysqli_close($conn);
?>
<ul class="pagination">
<li><a href="?pageno=1">First</a></li>
<li class="<?php if($pageno <= 1){ echo 'disabled'; } ?>">
    <a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>">Prev</a>
</li>
<li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
    <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>">Next</a>
</li>
<li><a href="?pageno=<?php echo $total_pages; ?>">Last</a></li>
</ul>
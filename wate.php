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

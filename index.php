<!DOCTYPE html>
<html>
<head>
  <title>SpaceZ</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/styles.css">
   <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
   <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/jquery.backgroundMove.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-sm fixed-top navbar-dark">
  <div class="container">
  <ul class="navbar-nav flx1">
    <li class="nav-item" id="navb">
      <a class="navbar-brand" href="#">SPACE Z</a>
    </li>
    <li class="nav-item">
      <a class="nav-link btn btn-outline-warning" href="#">Gallery</a>
    </li>
     <li class="nav-item">
      <a class="nav-link btn btn-outline-warning" href="#">Resouces</a>
    </li>
    <li class="nav-item">
      <a class="nav-link btn btn-outline-warning" href="#">About us</a>
    </li>
  </ul>
</div>
</nav>
<div class="bg"></div>
 <section class="main">
     
    <div class="main-content">
      <h1 id="h1">SPACE Z</h1>
      </div>
      <div class="main-content">
        <h2 id="h3">Future of Space Travel</h2>
      </div>
    </section>
    <div class="section">
    <div class="item">
      <h1>Option 1</h1>
      <h3>Details</h3>
      
    </div>
     <div class="item">
      <h1>Option 2</h1>
      <h3>Details</h3>
      
    </div>
     <div class="item">
      <h1>Option 3</h1>
      <h3>Details</h3>
      
    </div>
</div>
      <script type="text/javascript">
      // $('.bg').backgroundMove({
      //  movementStrength:'50'
      // });
      $(window).scroll(function(){
        console.log($(window).scrollTop());
    $(".bg")
      .css("transform", "scale("+(1-$(window).scrollTop()*0.001)+") translateY("+(1.5*$(window).scrollTop())+"px)")

});
    </script>
</body>
</html>
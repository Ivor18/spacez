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
      <a class="navbar-brand" href="#"> <img src="img/White.png"></a>
    </li>
    <li class="nav-item">
      <a class="nav-link btn btn-outline-danger" href="gallery.html">Gallery</a>
    </li>
     <li class="nav-item">
      <a class="nav-link btn btn-outline-warning" href="choose.html">Book a Seat</a>
    </li>
    <li class="nav-item">
      <a class="nav-link btn btn-outline-info" href="#">About us</a>
    </li>
  </ul>
</div>
</nav>
<div class="bg"></div>
   <div class="logo"></div>
      <video autoplay muted loop id="myVideo">
  <source src="vvv.mp4" type="video/mp4">
    </video>

 <section class="main">
   
    <div class="main-content">
      <h1 id="h1">SPACE Z</h1>
       
      </div>
      <div class="main-content">
        <h2 id="h3">Future of Space Travel</h2>
      </div>
 </section>
    <section class="section">
<div id="content1" class="jumbotron fs">
        <h1>Destinations</h1>
    <p>Moon, Mars and beyond!!!</p>
        </div>
        <div id="content2" class="jumbotron fe">
        <h1>Space vehicle</h1>
    <p>Safe and comfortable journey</p>
        </div>
        <div id="content3" class="jumbotron fs">
        <h1>Cost</h1>
    <p>Affordable!!!</p>
        </div>
           <div id="content4" class="jumbotron fe">
        <h1>Gallery Details</h1>
    <p>View previous expeditions</p>
        </div>
     
        
   
</section>
   <script type="text/javascript">
      // $('.bg').backgroundMove({
      //  movementStrength:'50'
      // });
      $(window).scroll(function(){
      
          if(1-$(window).scrollTop()*0.001>0.3){
    $(".bg")
      .css("transform", "scale("+(1-$(window).scrollTop()*0.001)+") translateY("+(0.350*$(window).scrollTop())+"vh)");
          }
          else{
              $(".bg").css("transform", "scale(0.3) translateY("+(0.350*$(window).scrollTop())+"vh)");
           $(".logo").css("display", "block")
               $(".logo").css("transform", "scale(0.3) translateY("+(0.350*$(window).scrollTop())+"vh)");
          }
          console.log(1-$(window).scrollTop()*0.001)
});
       
//       $(document).on("scroll", function () {
//var pageTop = $(document).scrollTop()
//var pageBottom = pageTop + $(window).height()
//var tags = $("section")
//
//for (var i = 0; i < tags.length; i++) {
//var tag = tags[i]
//
//if ($(tag).position().top < pageBottom) {
//$(tag).addClass("visible")
//} else {
//  $(tag).removeClass("visible")
//}
//}
//})
    </script>
</body>
</html>

<?php
include('../model/connection.php');
include('../model/fonction_login.php');
?>

<!DOCTYPE html>

<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login form 2 </title>
<link rel="stylesheet" href="../css/animate.css"> 
 <link rel="stylesheet" type="text/css" href="../css/style.css">
 <link rel="stylesheet" type="text/css" href="../css/style_login.css">
</head>
<body>

 <!-- Start Header  -->
 <header>
 	 <div class="container">
 	 	<div class="logo">
 	 		 <a href="">Fitness <span>Club</span></a>
 	 	</div>
 	 	<a href="javascript:void(0)" class="ham-burger">
 	       <span></span>	
 	       <span></span>
 	 	</a>
 	 	<div class="nav">
 	 		<ul>
 	 			<li><a href="home.php">Home</a></li>
 	 			<li><a href="home.php">About</a></li>
 	 			<li><a href="home.php">Services</a></li>
 	 			<li><a href="home.php">Classes</a></li>
 	 			<li><a href="home.php">Schedule</a></li>
 	 			<li><a href="home.php">Price</a></li>
				<li><a href="home.php">Contact</a></li>
				<li><a href="login.php">login</a></li>
 	 		</ul>
 	 	</div>
 	 </div>
 </header>
 <!-- End Header  -->

<!-- form login  -->

  <section class="login-page">
  <form class="form-group" method="POST" action="">
  	 	 <div class="box">
  	 	 	   <div class="form-head">
  	 	 	   	  <h2>Admin Login</h2>
  	 	 	   </div>
  	 	 	   <div class="form-body">
  	 	 	   	  <input type="UserName" name="UserName" placeholder="Enter name" />
  	 	 	   	  <input type="PassWord" name="PassWord" placeholder="Password" />
  	 	 	   </div>
  	 	 	   <div class="form-footer">
  	 	 	   	  <button type="login_submit" id="inputbtn" name="login_submit">Sign In</button>
  	 	 	   </div>
  	 	 </div>
			
  	 </form>
  </section>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
	$(document).ready(function(){

      $(".ham-burger, .nav ul li a").click(function(){
       
        $(".nav").toggleClass("open")

        $(".ham-burger").toggleClass("active");
      })      
      $(".accordian-container").click(function(){
      	$(".accordian-container").children(".body").slideUp();
      	$(".accordian-container").removeClass("active")
      	$(".accordian-container").children(".head").children("span").removeClass("fa-angle-down").addClass("fa-angle-up")
      	$(this).children(".body").slideDown();
      	$(this).addClass("active")
      	$(this).children(".head").children("span").removeClass("fa-angle-up").addClass("fa-angle-down")
      })

       $(".nav ul li a, .go-down").click(function(event){
         if(this.hash !== ""){

              event.preventDefault();

              var hash=this.hash; 

              $('html,body').animate({
                scrollTop:$(hash).offset().top
              },800 , function(){
                 window.location.hash=hash;
              });

              // add active class in navigation
              $(".nav ul li a").removeClass("active")
              $(this).addClass("active")
         }
      })
})

</script>
<script src="js/wow.min.js"></script>
<script>
    wow = new WOW(
      {
        animateClass: 'animated',
        offset:       0,
      }
    );
    wow.init();
  </script>

</body>
</html>


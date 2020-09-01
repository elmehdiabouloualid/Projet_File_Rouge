<?php

// php select option value from database
include('../model/connection.php');

// mysql select query
$query = "SELECT * FROM `Trainer`";
$query2 = "SELECT * FROM `package`";

// for method 1

$result1 = mysqli_query($con, $query);
$result2 = mysqli_query($con, $query2);

?>

<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="test../css/animate.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
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
      <li><a href="admin_dashbord.php"class="active">Members</a></li>
        <li><a href="trainer_details.php">Member details</a></li>
        <li><a href="package.php">Package details</a></li>
        <li><a href="payment.php">Payments</a></li>
        <li><a href="trainer.php" >Trainer</a></li>
        <li><a href="add_trainer.php">Add new Trainer</a></li>
        <li><a href="logout.php" tite="Logout">logout</a></li>
        
      </ul>
    </div>
   </div>
 </header>
 <!-- End Header  -->

  <!-- Start Home -->
  <section class="home wow flash" id="home">
     <div class="container">
        <h1 class="wow">It's <span>gym</span> time. Let's go</h1>
        <h1 class="wow">We are ready to <span>fit you</span></h1>
     </div>
      <!-- go down -->
          <a href="#" class="go-down">
              <i class="fa fa-angle-down" aria-hidden="true"></i>
          </a>
      <!-- go down -->

  </section>

   
       
 <!-- <div class="jumbotron" style="border-radius:0;background:url('images/3.jpg');background-size:cover;height:400px;"></div> -->
 <div class="container">
   
            <div class="card">
                
                <div class="card-body" style="background-color:#c11325;color:#fff;">
                <h3 style="text-align: center;">Register new members</h3>
                </div> 
                <div class="card-body"></div>
                <form class="form-group" action="../model/fonction_membre_add.php" method="post" style="margin: 0 10px 0 10px;">
                <label>First name:</label>
                <input type="text" name="fname" class="form-control"><br>
                <label>Last name:</label>
                <input type="text" name="lname" class="form-control"><br> 
               <label>E-mail</label>
               <input type="text" name="email" class="form-control"><br>
               <label>Member CIN</label>
               <input type="text" name="contact" class="form-control"><br>        
               <label>Trainer </label> 
               <select class="form-control" name="docapp">
 
                <?php while($row1 = mysqli_fetch_array($result1)):;?>

               <option value="<?php echo $row1[0];?>"><?php echo $row1[1];?></option>

               <?php endwhile;?>

               </select>
               <br>


              <label>Package </label> 
             <select class="form-control" name="package">

             <?php while($row2 = mysqli_fetch_array($result2)):;?>

            <option value="<?php echo $row2[0];?>"><?php echo $row2[1];?></option>

            <?php endwhile;?>

            </select>
            <br>
                                        
  <input type="submit" class="btn btn-primary" name="pat_submit" value="Register" style="background-color: #c11325; border: none; margin-bottom: 20px; cursor: pointer;">
                    
                    
                </form>
                </div>
     

</header>
<!-- jquery -->


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="test.js"></script>
<script src="js/wow.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

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
   
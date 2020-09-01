<?php 
require_once('Connection.php');
session_start();

    if(isset($_POST['login_submit']))
    {
       if(empty($_POST['UserName']) || empty($_POST['PassWord']))
       {
            header("location:Login.php?Empty= Please Fill in the Blanks");
       }
       else
       {
            $query="select * from logintb where username='".$_POST['UserName']."' and password='".$_POST['PassWord']."'";
            $result=mysqli_query($con,$query);
 
            if(mysqli_fetch_assoc($result))
            {
                $_SESSION['admin']=$_POST['UserName'];
                header("location:admin_dashbord.php");
            }
            else
            {
              
              header("location: login.php"); //send user back to the login page.
            }
       }
    }
   
?>


<?php 
require_once('Connection.php');


//add_membre
   
if(isset($_POST['pat_submit']))
{
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $contact=$_POST['contact'];
    $docapp=$_POST['docapp'];
    $package=$_POST['package'];
    $query="insert into doctorapp(fname,lname,email,contact,docapp,package)values('$fname','$lname','$email','$contact','$docapp','$package')";
     $result=mysqli_query($con,$query);
    if($result)
    {
      echo "<script>alert('Member added.')</script>";
        echo "<script>window.open('../view/admin_dashbord.php','_self')</script>";
    }
    
	else
    {
        echo "<script>alert('error  ')</script>";
        echo "<script>window.open('../view/admin_dashbord.php','_self')</script>";
    }
    } 
//add_payment    
if(isset($_POST['pay_submit']))
    {
        $Payment_id=$_POST['Payment_id'];
        $Amount=$_POST['Amount'];
        $customer_id=$_POST['customer_id'];
        $payment_type=$_POST['payment_type'];
        $query="insert into Payment(Payment_id,Amount,customer_id,payment_type)values('$Payment_id','$Amount','$customer_id','$payment_type')";
         $result=mysqli_query($con,$query);
        if($result)
        {
          echo "<script>alert('Payment sucessfull.')</script>";
          echo "<script>window.open('../view/payment.php','_self')</script>";
        }
        {
            echo "<script>alert('error.')</script>";
            echo "<script>window.open('../view/payment.php','_self')</script>";
        }
        } 

 //add_trainer       
 if(isset($_POST['tra_submit']))
        {
            $Trainer_id=$_POST['Trainer_id'];
            $Name=$_POST['Name'];
            $phone=$_POST['phone'];
            $query="insert into Trainer(Trainer_id,Name,phone)values('$Trainer_id','$Name','$phone')";
             $result=mysqli_query($con,$query);
            if($result)
            {
                echo "<script>alert('Trainer added.')</script>";
                echo "<script>window.open('../view/add_trainer.php','_self')</script>";
            }
            {
                echo "<script>alert('error')</script>";
                echo "<script>window.open('../view/add_trainer.php','_self')</script>";
            }
            }   

//add_package 

if(isset($_POST['Pack_submit']))
    {
        $Package_id=$_POST['Package_id'];
        $Package_name=$_POST['Package_name'];
        $Amount=$_POST['Amount'];
        $query="insert into package(Package_id,Package_name,Amount)values('$Package_id','$Package_name','$Amount')";
        $result=mysqli_query($con,$query);
        if($result)
        {
          echo "<script>alert('package added.')</script>";
          echo "<script>window.open('../view/package.php','_self')</script>";
        }
        {
            echo "<script>alert('error.')</script>";
            echo "<script>window.open('../view/package.php','_self')</script>";
        }
        } 
?>

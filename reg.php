<?php 
include('config.php'); 
include('header.php'); 
?>
<!DOCTYPE html>
<html lang="en">

    <style>
    body
        {
             background-image: url('images/banner.jpg');
             background-repeat: no-repeat;
             background-attachment: fixed;
             background-position: center;
             background-size:100% 100%;
             color:white;
            
        }
         label{color:white;}
        .frm {background-color: transparent;color:white;}
        .frm:hover{border: 2px solid orange; }
        a{color: white}
        .frm:focus{background-color:black}
    </style>
<body class="banner"> 
    
<div class="row container">
    <div class="col-md-6"></div>
    <div class="col-md-4" style="background-color:#00000070;border-radius:10px;">
        <h1>Register Form</h1><hr>
        <br>
    <form method="post" autocomplete="off">
    <label>Name</label>    
    <input type="text" required name="name" class="form-control frm">
    <label>Phone</label>    
    <input type="tel"  pattern="[0-9]{3}[0-9]{3}[0-9]{4}" required name="phone" class="form-control frm">
    <label>E-Mail</label>    
    <input type="email" required name="mail" class="form-control frm">
        
    <label>Address</label>    
        <textarea required name="add" class="form-control frm"></textarea>
        
    <label>Username</label>    
    <input type="text" required name="uname" class="form-control frm">
    
    <label>Password</label>    
    <input type="password" required name="pass" class="form-control frm"><br>
    <input type="submit" name="sb" value="Register Now" class="btn btn-primary form-control"><br><br>
        <label>Already have an account ?</label>&nbsp;<a href="login.php">LOGIN</a>
        <br><br>
    </form>
    </div>
</div>


</body>
</html>


<?php
if(isset($_POST['sb']))
{
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $mail=$_POST['mail'];
    $address=$_POST['add'];
    $uname=$_POST['uname'];
    $pass=$_POST['pass'];
    
    $query="INSERT INTO `registration`(`name`, `phone`, `email`, `address`, `uname`, `password`) VALUES ('$name','$phone','$mail','$address','$uname','$pass')";
    $res=mysqli_query($con,$query)or die(mysqli_error($con));
    if(!empty($res))
    {
        header('location:login.php');
    }
    else
    {
        echo '<script>alert("Try Again")</script>';
    }
    
}   
?>
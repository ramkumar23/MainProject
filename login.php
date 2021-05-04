<?php
include('config.php'); 
include('header.php'); 
session_start();

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
    <div class="col-md-4" style="margin-top:70px;background-color:#00000070;">
        <h1>Login Form</h1><hr>
        <br>
    <form method="post" autocomplete="off">
     <label>Username</label>    
    <input type="text" required name="u_name" class="form-control frm">
    <label>Password</label>    
    <input type="password" required name="pass" class="form-control frm"><br>
    <input type="submit" name="sb" value="Login" class="btn btn-primary form-control">
        <br><br>
    </form>
    </div>
</div>


</body>
</html>



<?php
if(isset($_POST['sb']))
{
    $uname = $_POST['u_name'];
    $_SESSION['sess']=$uname;
    $password = $_POST['pass'];
    
    $query="select * from registration where uname='".$uname."' && password='".$password."'";
    $res=mysqli_query($con,$query)or die(mysqli_error($con));
    $fet=mysqli_fetch_array($res);
    if($fet['uname'] == $uname && $fet['password'] == $password)
    {
        //echo '<script>alert("Success")</script>';
        header('location:user/');
    }
    elseif($uname == 'admin' && $password == 'admin')
    {
        header('location:admin/');
    }
     else
    {
        echo '<script>alert("Try Again")</script>';
    }
    
}   
?>
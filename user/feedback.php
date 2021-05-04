<?php
include('header.php');
session_start();
$sess = $_SESSION['sess'];
include('../config.php');

?>
<style>
    a{color:white;}
    .bdy
    {
        overflow:hidden;
        background-color:#00000078;
        margin-top: -20px;
    }
    .logo-small {
    color: #f4511e;
    font-size: 50px;
  }
    strong{color:white;}
</style>
<body class="">   
<div class="container">
   
    <form method="post" class="col-md-6 pull-right" style="margin-top:20px;background-color:#0000009c;">
    <h1 style="color:gold"><u>Your Feedback</u></h1>
    
    <strong>Subject</strong>
    <input type="text" name="sub" class="form-control ll" required>
    <strong>Details</strong>
    <textarea name="det" class="form-control ll" required></textarea>
  <br>
    <input type="submit" name="sb" class="btn btn-primary"><br><br>
    </form>
    

    <div class="footer">
  <p>Footer</p>
</div>
    <br>
    <br>
    <br>
    <br>
</div>    
</body>


<?php
 $to_day_date = date("d/M/Y");
if(isset($_POST['sb']))
{
    $sub=$_POST['sub'];
    $detail=$_POST['det'];
    
    
      $query="INSERT INTO `feedback`(`date`, `subject`, `content`, `user_id`) VALUES ('$to_day_date','$sub','$detail','$sess')";  
    
    $res=mysqli_query($con,$query);
    if(!empty($res))
    {
        echo '<script>alert("Success")</script>';
        echo '<script>window.location.href="view_feedback.php"</script>';
    }
    else
    {
        echo '<script>alert("Try Agan")</script>';
    }
}
?>
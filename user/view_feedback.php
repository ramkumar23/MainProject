<?php
include('../config.php');
session_start();
$sess = $_SESSION['sess'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Online OutPatient Management System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="../bootstrap-3.4.1/css/bootstrap.min.css">
  <script src="../bootstrap-3.4.1/jquery/jquery.min.js"></script>
  <script src="../bootstrap-3.4.1/js/bootstrap.min.js"></script></script>
  <link href="../style.css" rel="stylesheet"></script>
  <link href="../style.css" rel="stylesheet">
<style>
    th{color:gold;}
    h1{color:white;}
    td{color:white;}
    p{text-align: center;color:white;}
</style>
</head>
<body class="user">
    <div style="background-color:#00000061;">
<?php  include('header.php'); ?>
<div class="container">   
    
 <div class="row" style="border:2px solid white;background-color:#0000004f;">
     <table class="table" border="1">
         <h1 style="text-align:center;">View Feedback</h1>
    
    <tr>
    <th>Subject</th>
    <th>Content</th>
    <th>Date Of Post</th>
    <th>Delete</th>
    </tr>
    
        <?php
        $query="select * from feedback where user_id='$sess'";
        $res=mysqli_query($con,$query);
        while($fet=mysqli_fetch_array($res))
        {
        ?>
    <tr>
    <td><?php echo $fet['subject'];  ?></td>   
    <td><?php echo $fet['content'];  ?>  </td>  
    <td><?php echo $fet['date'];  ?>  </td>  
   
    <td><a href="view_feedback.php?id=<?php echo $fet['id'] ;?>"><button class="btn btn-primary form-control">Delete</button></a></td>
    </tr>
        <?php
        }
        ?>
         </table>
 </div>    
</div><br><br><br>
        </div>
</body>
</html>


<?php

if(!empty($_GET['id']))
{
    $id=$_GET['id'];
    $query="delete from feedback where id=$id";
    $res=mysqli_query($con,$query);
    if(!empty($res))
    {
        echo '<script>window.location.href="view_feedback.php"</script>';
    }
    else
    {
        echo '<script>alert("try again");</script>';
    }
}
?>
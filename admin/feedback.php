<?php
include('../config.php');
session_start();
$sess = $_SESSION['sess'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Online Food Tracking</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../bootstrap-3.4.1/css/bootstrap.min.css">
  <script src="../bootstrap-3.4.1/jquery/jquery.min.js"></script>
  <script src="../bootstrap-3.4.1/js/bootstrap.min.js"></script>
  <link href="../style.css" rel="stylesheet">
<style>
    th{color:gold;}
    h1{color:white;}
    td{color:white;}
    p{text-align: center;color:white;}
</style>
</head>
<body class="admin">
    <div style="background-color:#00000061;">
<?php  include('header.php'); ?>
<div class="container">   
    
 <div class="row" style="border:2px solid white;background-color:#0000004f;margin-top:50px;">
     <table class="table" border="1">
         <h1 style="text-align:center;">View Feedback</h1>
    
    <tr>
    <th>S.No.</th>
    <th>Subject</th>
    <th>Content</th>
    <th>User ID</th>
    <th>Date Of Post</th>
    </tr>
    
        <?php
         $i=0;
        $query="select * from feedback";
        $res=mysqli_query($con,$query);
        while($fet=mysqli_fetch_array($res))
        {
        ?>
    <tr>
    <td><?php $i++; echo $i;  ?></td>    
    <td><?php echo $fet['subject'];  ?></td>   
    <td><?php echo $fet['content'];  ?>  </td>  
    <td><?php echo $fet['user_id'];  ?>  </td>  
    <td><?php echo $fet['date'];  ?>  </td>  
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
        echo '<script>alert("Success");</script>'. '<script>window.location.href="feedback.php"</script>';
    }
    else
    {
        echo '<script>alert("try again");</script>';
    }
}
?>
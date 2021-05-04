<?php
include('header.php');
include('../config.php');
session_start();
$sess = $_SESSION['sess'];
?>
<style>
    a{color:white;}
    .bdy
    {
        overflow:hidden;
        background-color:#000000b8;
        margin-top: -20px;
        
    }
    .logo-small {
    color: #f4511e;
    font-size: 50px;
  }
    th{color:gold}
    h1{color:black}
    .co{margin-top: 50px;}
</style>
<body class="">   
<div class="">
    <div class="container">
    <h1><u>My Service Details</u></h1>
    <a href="add_service.php"><button class="btn btn-success pull-right">Add Service</button></a><br>
   	<table class="table co" style="background-color:#000000ab;">
    <tr>
    <th>S.no</th>
    <th>Vehicle Name</th>
    <th>Vehicle Type</th>
    <th>Vehicle Year</th>
    <th>Problem</th>
    <th>Delivery Date</th>
    <th>Cost</th>
    <th>Post Date</th>
    <th>Delete</th>
    </tr>
     <?php
        $count=0;
        $query="SELECT * FROM `service` where user_id='$sess'";
        $res=mysqli_query($con,$query);
        while($fet=mysqli_fetch_array($res))
        {
        ?> 
    <tr style="text-align:center;">
        
    <td><?php echo ++$count; ?></td>
    <td><?php echo $fet['vehicle_name']; ?></td>
    <td><?php echo $fet['vehicle_type']; ?></td>
    <td><?php echo $fet['vehicle_year']; ?></td>
    <td><?php echo $fet['problem']; ?></td>
    <td><?php if(empty($fet['delivery_date'])){echo "-";}else{echo $fet['delivery_date'];} ?></td>
    <td><?php if(empty($fet['price'])){echo "-";}else{echo $fet['price'];} ?></td>
    <td><?php echo $fet['post_date']; ?></td>
        <td><a href="service.php?id=<?php echo $fet['id']; ?>"><button class="btn btn-danger">Delete</button></a></td>
    </tr>
        <?php
    }
    ?>
    </table>
    <div class="footer">
  <p>Footer</p>
</div>
    <br>
    <br>
    <br>
    <br>
        </div>
</div>    
</body>

<?php
if(!empty($_GET['id']))
   {
     $id=$_GET['id'];
    $query="DELETE FROM `service` WHERE id='$id'";
    $res=mysqli_query($con,$query);
    if(!empty($res))
    {
        echo '<script>window.location.href="service.php"</script>';
    }
    else
    {
        echo '<script>alert("try again")</script>';

    }
}
?>
        
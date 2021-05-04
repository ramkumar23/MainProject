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
    h1{color:black}
    th{color:gold}
    .co{margin-top: 50px;}
</style>
<body class="">   
<div class="">
    <div class="container">
    <h1><u>My Enquiry List</u></h1>
   	<table class="table co" style="background-color:#000000ab;">
    <tr>
    <th>S.no</th>
    <th>Booking Date</th>
    <th>Vehicle Name</th>
    <th>Enquiry Date</th>
    
    <th>Delete</th>
    </tr>
     <?php
        $count=0;
        $query="SELECT * FROM `enquiry` where user_id='$sess'";
        $res=mysqli_query($con,$query);
        while($fet=mysqli_fetch_array($res))
        {
            $pro=$fet['product_id'];
    
        ?> 
    <tr style="text-align:center;">
        
    <td><?php echo ++$count; ?></td>
    <td><?php echo $fet['booking_date']; ?></td>
    <td><?php if($pro)
    {
        $qq=mysqli_query($con,"select * from add_product where id='$pro'");
            while($rs=mysqli_fetch_array($qq))
            {
                $imss=$rs['image'];
                ?>
        <img style="width:100px;" src="../admin/upload/<?php echo $imss; ?>">
        <?php
            }
    }; ?></td>
    <td><?php echo $fet['enquiry_date']; ?></td>
    
    
        <td><a href="myenqlist.php?id=<?php echo $fet['id']; ?>"><button class="btn btn-danger">Delete</button></a></td>
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
    $query="DELETE FROM `enquiry` WHERE id='$id'";
    $res=mysqli_query($con,$query);
    if(!empty($res))
    {
        echo '<script>window.location.href="myenqlist.php"</script>';
    }
    else
    {
        echo '<script>alert("try again")</script>';

    }
}
?>
        
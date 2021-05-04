<?php
include('header.php');
include('../config.php');
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
    table{background-color:#ffffff30;}
    th{color:gold}
    .co{margin-top: 50px;}
</style>
<body class="admin">   
<div class="bdy">
    <div class="container">
    <h1><u>Manage Product</u></h1>
    <a href="add_product.php"><button class="btn btn-success pull-right">Add Product</button></a><br>
   	<table class="table co">
    <tr>
    <th>S.no</th>
    <th>Image</th>
    <th>Name</th>
    <th>Color</th>
    <th>Description</th>
    <th>Price</th>
    <th>View</th>
    <th>Update</th>
    <th>Delete</th>
    </tr>
     <?php
        $count=0;
        $query="SELECT * FROM `add_product`";
        $res=mysqli_query($con,$query);
        while($fet=mysqli_fetch_array($res))
        {
        ?> 
    <tr>
        
    <td><?php echo ++$count; ?></td>
    <td><img style="width:150px;" src="upload/<?php echo $fet['image']; ?>"></td>
    <td><?php echo $fet['name']; ?></td>
    <td><?php echo $fet['color']; ?></td>
    <td><?php echo $fet['description']; ?></td>
    <td>&#8377;<?php echo $fet['price']; ?></td>
   <!-- <td><?php /* echo $fet['milage']; ?></td>
    <td><?php echo $fet['fuel_type']; ?></td>
    <td><?php echo $fet['engile_cc']; ?></td>
    <td><?php echo $fet['torque']; ?></td>
    <td><?php echo $fet['seat_capacity']; ?></td>
    <td><?php echo $fet['transmission_type']; ?></td>
    <td><?php echo $fet['boot_space']; ?></td>
    <td><?php echo $fet['fuel_tank_capacity']; ?></td>
    <td><?php echo $fet['body_type']; ?></td>
    <td><?php echo $fet['service_cost']; ?></td>
    <td><?php echo $fet['power_steering']; ?></td>
    <td><?php echo $fet['power_window']; ?></td>
    <td><?php echo $fet['ac']; ?></td>
    <td><?php echo $fet['driver_airbag']; ?></td>
    <td><?php echo $fet['passenger_airbag']; ?></td>
    <td><?php echo $fet['alloy_wheel']; */?></td>-->
    <td><a href="view_product.php?id=<?php echo $fet['id']; ?>"><button class="btn btn-success">View</button></a></td>
       <td><a href="update_product.php?id=<?php echo $fet['id']; ?>"><button class="btn btn-warning">Update</button></a></td>
        <td><a href="product.php?id=<?php echo $fet['id']; ?>"><button class="btn btn-danger">Delete</button></a></td>
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
    $query="DELETE FROM `add_product` WHERE id='$id'";
    $res=mysqli_query($con,$query);
    if(!empty($res))
    {
        echo '<script>window.location.href="product.php"</script>';
    }
    else
    {
        echo '<script>alert("try again")</script>';

    }
}
?>
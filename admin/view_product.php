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
    <div class="container" style="background-color:#00000030;">
    <h1><u>Product Details</u></h1>
        
    <div class="container"><br><br><br>
        <?php
        if(!empty($_GET['id']))
        {
            $id=$_GET['id'];
        }
        $query="select * from add_product where id='$id'";
        $res=mysqli_query($con,$query);
        while($fet=mysqli_fetch_array($res))
        {   ?>
            <img style="height:200px;" src="upload/<?php echo $fet['image']; ?>">
        <?php
        }
        ?>
        <div class="row">
        <div class="col-md-4" style="color:gold;">
        <h3>Name</h3>
        <h3>Color</h3>
        <h3>Description</h3>
        <h3>Price</h3>
        <h3>Milage</h3>
        <h3>Fuel Type</h3>
        <h3>Engile_CC</h3>
        <h3>Maximum Torque</h3>
        <h3>Seat Capacity</h3>
        <h3>Transmission Type</h3>
        <h3>Boot Space</h3>
        <h3>Fuel Tank_capacity</h3>
        <h3>Body Type</h3>
        <h3>Service Cost</h3>
        <h3>Power Steering</h3>
        <h3>Power Window</h3>
        <h3>Air Conditioner</h3>
        <h3>Driver Airbag</h3>
        <h3>Passenger Airbag</h3>
        <h3>Alloy Wheel</h3>
        </div>
        <div class="col-md-2" style="color:gold;">:<br>:<br>:<br>:<br>:<br>:<br>:<br>:<br>:<br>:<br>:<br>:<br>:<br>:<br>:<br>:<br>:<br>:<br>:<br>:<br>:<br>:<br>:<br>:<br>:<br>:<br>:<br>:<br>:<br>:<br>:<br>:<br>:<br>:<br>:<br>:<br>:<br>:<br>:<br>:<br>:<br>:<br>:<br>:<br>:<br>:<br>:<br>:<br></div>
        <?php
        $query="select * from add_product where id='$id'";
        $res=mysqli_query($con,$query);
        while($fet=mysqli_fetch_array($res))
        {
        ?>
        <div class="col-md-4" style="color:gold;">
        <p><?php echo $fet['name']; ?></p>
        <p><?php echo $fet['price']; ?></p><br>
        <p><?php echo $fet['color']; ?></p><br>
        <p><?php echo $fet['description']; ?></p><br>
        <p><?php echo $fet['milage']; ?></p><br>
        <p><?php echo $fet['fuel_type']; ?></p><br>
        <p><?php echo $fet['engile_cc']; ?></p><br>
        <p><?php echo $fet['torque']; ?></p><br>
        <p><?php echo $fet['seat_capacity']; ?></p><br>
        <p><?php echo $fet['transmission_type']; ?></p><br>
        <p><?php echo $fet['boot_space']; ?></p><br>
        <p><?php echo $fet['fuel_tank_capacity']; ?></p><br>
        <p><?php echo $fet['body_type']; ?></p><br>
        <p><?php echo $fet['service_cost']; ?></p><br>
        <p><?php echo $fet['power_steering']; ?></p><br>
        <p><?php echo $fet['power_window']; ?></p><br>
        <p><?php echo $fet['ac']; ?></p><br>
        <p><?php echo $fet['driver_airbag']; ?></p><br>
        <p><?php echo $fet['passenger_airbag']; ?></p><br>
        <p><?php echo $fet['alloy_wheel']; ?></p><br>
        </div>
        </div>
    </div>
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
        }
?>

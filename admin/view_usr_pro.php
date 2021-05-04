<?php
include('header.php');
include('../config.php');
session_start();
$usr_sess = $_SESSION['sess'];
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
<div class="container">
			
			<!--<table class="table">-->
                
                    
                    
               
			<?php
    
            $id=$_GET['id'];
				$query = "SELECT * FROM user_product where id='$id'";
				$result = mysqli_query($con, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
				?>
			<div class="row" style="background-color:#0000006b;">
                <br>
				<div class="col-md-12">
                <img style="width:500px;" src="../user/upload/<?php echo $row['image']; ?>">
                    <h1></h1>
                </div>
                <hr>
			    <div class="col-md-12">
                    <table class="table">
                        <div>
            <tr style="background-color:black;color:gold;"><td> <b>User Name</b></td> <td>:</td> <td><?php echo $row["user_name"]; ?></td></tr>
            <tr style="background-color:black;color:gold;"><td> <b>Phone</b></td> <td>:</td> <td><?php echo $row["usr_phone"]; ?></td></tr></div>
            <tr><td> <b>Name</b></td> <td>:</td> <td><?php echo $row["name"]; ?></td></tr>
                <tr><td><b>Price</b></td> <td>:</td> <td><?php echo $row["price"]; ?></td></tr>    
                <tr><td><b>Color</b></td> <td>:</td> <td><?php echo $row["color"]; ?></td></tr>    
                <tr><td><b>Milage</b></td> <td>:</td> <td> <?php echo $row["milage"]; ?></td></tr>   
                <tr><td><b>Fuel Type</b></td> <td>:</td> <td> <?php echo $row["fuel_type"]; ?> </td></tr> 
                <tr><td><b>Engine CC</b></td> <td>:</td> <td>  <?php echo $row["engile_cc"]; ?></td></tr>  
                <tr><td><b>Torque</b></td> <td>:</td> <td>    <?php echo $row["torque"]; ?></td></tr>
                <tr><td><b>Seat Capacity</b></td> <td>:</td> <td> <?php echo $row["seat_capacity"]; ?> </td></tr>  
                <tr><td><b>Transmission Type</b></td> <td>:</td> <td><?php echo $row["transmission_type"]; ?> </td></tr>   
                <tr><td><b>Boot Space</b></td> <td>:</td> <td>    <?php echo $row["boot_space"]; ?></td></tr>
                <tr><td><b>Fuel Capacity</b></td> <td>:</td> <td>  <?php echo $row["fuel_tank_capacity"]; ?> </td></tr> 
                <tr><td><b>Body Type</b></td> <td>:</td> <td>    <?php echo $row["body_type"]; ?></td></tr>
                <tr><td><b>Service Cost</b></td> <td>:</td> <td>   <?php echo $row["service_cost"]; ?></td></tr> 
                <tr><td><b>Power Steering</b></td> <td>:</td> <td> <?php echo $row["power_steering"]; ?> </td></tr>  
                <tr><td><b>Power Window</b></td> <td>:</td> <td>  <?php echo $row["power_window"]; ?> </td></tr> 
                <tr><td><b>A/C</b></td> <td>:</td> <td>    <?php echo $row["ac"]; ?></td></tr>
                <tr><td><b>Driver AirBag</b></td> <td>:</td> <td> <?php echo $row["driver_airbag"]; ?></td></tr>  
                <tr><td><b>Passenger AirBag</b></td> <td>:</td> <td><?php echo $row["passenger_airbag"]; ?></td></tr>    
                <tr><td><b>Alloy Wheel</b></td> <td>:</td> <td>   <?php echo $row["alloy_wheel"]; ?></td></tr>
                <tr><td><b>Description</b></td> <td>:</td> <td><?php echo $row["description"]; ?></td></tr>
              <hr>
                        </table>
                    
                </div>
			</div>
			<?php
					}
				}
			?>
			
	</div>   
</body>


<?php
if(isset($_POST['sb']))
{
    $eqdate=$_POST['enqdate'];
    $date=date('d/M/Y');

    $query="INSERT INTO `enquiry`(`user_id`, `booking_date`, `product_id`, `enquiry_date`) VALUES ('$usr_sess','$date','$id','$eqdate')";
    $res=mysqli_query($con,$query);
   
    if(!empty($res))
    {
        echo "<script>alert('Success')</script>";
        echo "<script> window.location.href ='view_car.php';</script>";
    }
    else
    {
        echo "<script>alert('Try Again')</script>";
    }
}
?>   
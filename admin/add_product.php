<?php
include('header.php');
include('../config.php');
?>
<link href="../style.css" rel="stylesheet">
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
    .co{margin-top: 50px;}
</style>
<body class="admin">   
<div class="bdy">
    <div class="row container">
        <div class="col-md-4"></div>
   <form method="post" enctype="multipart/form-data" class="col-md-6">
    <div class="form-group row">
        <label class="col-sm-3 col-form-label"></label>
            <h1 style="text-shadow: 2px 2px #FF0000;"><u>Add Product </u></h1>
    </div>
       
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Image</label>
        <div class="col-sm-9">
            <input type="file" required class="form-control frm" name="file">
        </div>
    </div>
    
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Name</label>
        <div class="col-sm-9">
            <input type="text" required class="form-control frm" placeholder=" Name" name="name">
        </div>
    </div>
    
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Price</label>
        <div class="col-sm-9">
        <input type="number" required class="form-control frm" name="price" placeholder=" Price">
        </div>
    </div>
       
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Color</label>
        <div class="col-sm-9">
        <input type="text" required class="form-control frm" name="color" placeholder=" Price">
        </div>
    </div>
    
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Description</label>
        <div class="col-sm-9">
         <textarea required class="form-control frm" name="des" placeholder=" Description"></textarea>
        </div>
    </div>
        
<div class="form-group row">
        <h1 style="text-shadow: 2px 2px #FF0000;"><u>Add Specifications</u></h1>
    </div>
        
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Milage</label>
        <div class="col-sm-9">
        <input type="number" required class="form-control frm" name="mil" placeholder=" Car Milage">
        </div>
    </div>
    
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Charge Type</label>
        <div class="col-sm-9">
        <select required class="form-control frm" name="fuel_type">
        <option value="">Charge Type</option>    
        <option value="Rapid">Rapid</option>    
        <option value="Fast">Fast</option>    
        <option value="Slow">Slow</option>    
        </select>
        </div>
    </div>
       
       
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Engine (CC)</label>
        <div class="col-sm-9">
        <input type="number" required class="form-control frm" name="engcc" placeholder=" Engine (CC)">
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Maximum Torque</label>
        <div class="col-sm-9">
        <input type="number" required class="form-control frm" name="m_torque" placeholder=" Maximum Torque">
        </div>
    </div>

   <div class="form-group row">
        <label class="col-sm-3 col-form-label">Seating Capacity</label>
        <div class="col-sm-9">
        <input type="number" required class="form-control frm" name="seat_cap" placeholder=" Seating Capacity">
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Transmission Type</label>
        <div class="col-sm-9">
        <select required class="form-control frm" name="tran_type">
        <option value="">Transmission Type</option>    
        <option value="Automatic">Automatic</option>    
        <option value="Semi Automatic">Semi Automatic</option>    
        <option value="Manual">Manual</option>    
        </select>        
    </div>
    </div>
       
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Boot Space (Litres)</label>
        <div class="col-sm-9">
        <input type="number" required class="form-control frm" name="boot" placeholder=" Boot Space in Litres">
        </div>
    </div>
       
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Fuel Tank Capacity</label>
        <div class="col-sm-9">
        <input type="number" required class="form-control frm" name="fuel_cap" placeholder=" Fuel Tank Capacity">  
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Body Type</label>
        <div class="col-sm-9">
        <select required class="form-control frm" name="b_type">
        <option value="">Body Type</option>    
        <option value="Hatchback">Hatchback</option>    
        <option value="Sedan">Sedan</option>    
        <option value="MUV">MUV</option>    
        <option value="SUV">SUV</option>    
        </select>    
        </div>
    </div>
       
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Service Cost</label>
        <div class="col-sm-9">
        <input type="number" required class="form-control frm" name="serv_cost" placeholder="Service Cost">  
        </div>
    </div>
       
    <div class="form-group row">
        <h1 style="text-shadow: 2px 2px #FF0000;">
            <u>Key Features</u></h1>
    </div>
       
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Power Steering</label>
        <div class="col-sm-3">
        <input type="radio" required value="Yes"  name="ps" placeholder=" Price"> 
        <label>Yes</label>
        </div>
    <div class="col-sm-3">
        <input type="radio" required value="No"  name="ps" placeholder=" Price">  
        <label>No</label>

        </div>
    </div>
       
   <div class="form-group row">
        <label class="col-sm-3 col-form-label">Power Window</label>
        <div class="col-sm-3">
        <input type="radio" required value="Yes"  name="pw" placeholder=" Price"> 
        <label>Yes</label>
        </div>
    <div class="col-sm-3">
        <input type="radio" required value="No"  name="pw" placeholder=" Price">  
        <label>No</label>

        </div>
    </div>
        
<div class="form-group row">
        <label class="col-sm-3 col-form-label">Air Conditioner</label>
        <div class="col-sm-3">
        <input type="radio" required value="Yes"  name="ac" placeholder=" Price"> 
        <label>Yes</label>
        </div>
    <div class="col-sm-3">
        <input type="radio" required value="No"  name="ac" placeholder=" Price">  
        <label>No</label>

        </div>
    </div>
        
<div class="form-group row">
        <label class="col-sm-3 col-form-label">Driver AirBag</label>
        <div class="col-sm-3">
        <input type="radio" required value="Yes"  name="dair" placeholder=" Price"> 
        <label>Yes</label>
        </div>
    <div class="col-sm-3">
        <input type="radio" required value="No"  name="dair" placeholder=" Price">  
        <label>No</label>

        </div>
    </div>
        
<div class="form-group row">
        <label class="col-sm-3 col-form-label">Passenger AirBag</label>
        <div class="col-sm-3">
        <input type="radio" required value="Yes"  name="pair" placeholder=" Price"> 
        <label>Yes</label>
        </div>
    <div class="col-sm-3">
        <input type="radio" required value="No"  name="pair" placeholder=" Price">  
        <label>No</label>

        </div>
    </div>
        
<div class="form-group row">
        <label class="col-sm-3 col-form-label">Alloy Wheel</label>
        <div class="col-sm-3">
        <input type="radio" required value="Yes"  name="alloywheel" placeholder=" Price"> 
        <label>Yes</label>
        </div>
    <div class="col-sm-3">
        <input type="radio" required value="No"  name="alloywheel" placeholder=" Price">  
        <label>No</label>
        </div>
    </div>
          
    <div class="form-group row">
        <label class="col-sm-3 col-form-label"></label>
        <div class="col-sm-9">
        <button type="submit" name="sb" class="btn btn-primary form-control">Add Product</button><br><br><br><br>
        </div>
    </div>
</form>
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
if(isset($_POST['sb']))
{
    $filee = $_FILES['file']['name'];
    $filename = $_FILES['file']['tmp_name'];
    move_uploaded_file($filename ,"upload/".$filee);
    move_uploaded_file($_FILES['file']['tmp_name'],'upload/'.$filee);
    
    $name=$_POST['name'];
    $price=$_POST['price'];
    $color=$_POST['color'];
    $desc=$_POST['des'];
    $milage=$_POST['mil'];
    $fuel_type=$_POST['fuel_type'];
    $engine_cc=$_POST['engcc'];
    $torque=$_POST['m_torque'];
    $seat_capacity=$_POST['seat_cap'];
    $transmission_type=$_POST['tran_type'];
    $boot=$_POST['boot'];
    $fuel_capacity=$_POST['fuel_cap'];
    $body_type=$_POST['b_type'];
    $service_cost=$_POST['serv_cost'];
    $power_steering=$_POST['ps'];
    $power_window=$_POST['pw'];
    $ac=$_POST['ac'];
    $driver_airbag=$_POST['dair'];
    $passenger_airbag=$_POST['pair'];
    $alloy_wheel=$_POST['alloywheel'];

    $query="INSERT INTO `add_product`(`image`, `name`, `price`, `color`, `description`, `milage`, `fuel_type`, `engile_cc`, `torque`, `seat_capacity`, `transmission_type`, `boot_space`, `fuel_tank_capacity`, `body_type`, `service_cost`, `power_steering`, `power_window`, `ac`, `driver_airbag`, `passenger_airbag`, `alloy_wheel`) VALUES('$filee','$name','$price','$color','$desc','$milage','$fuel_type','$engine_cc','$torque','$seat_capacity','$transmission_type','$boot','$fuel_capacity','$body_type','$service_cost','$power_steering','$power_window','$ac','$driver_airbag','$passenger_airbag','$alloy_wheel')";
    $res=mysqli_query($con,$query) or die(mysqli_error($con));
   
    if(!empty($res))
    {
        echo "<script>alert('Success')</script>";
        //echo "<script> window.location.href ='employee.php';</script>";
    }
    else
    {
        echo "<script>alert('Try Again')</script>";
    }
}
?>   
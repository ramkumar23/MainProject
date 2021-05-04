<?php
include('header.php');
include('../config.php');
function get_rand_id($length)
    {
        $str_result = '0123456789'; 
        $rand_id = substr(str_shuffle($str_result),0, $length);
        return $rand_id; 
    } 
    $rand = get_rand_id(6);
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
    <div class="container">
   <form method="post" enctype="multipart/form-data">
    <div class="form-group row">
        <label class="col-sm-2 col-form-label"></label>
        <div class="col-sm-10">
            <h1 style="text-shadow: 2px 2px #FF0000;"><u>Add Power Station  :</u></h1>
        </div>
    </div>
    
    
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Image</label>
        <div class="col-sm-10">
            <input type="file" required class="form-control frm" placeholder="Name Of The Employee" name="file">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Name</label>
        <div class="col-sm-10">
            <input type="text" required class="form-control frm" placeholder="Name Of The Power Station" name="name">
        </div>
    </div>
    
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Contact Number</label>
        <div class="col-sm-10">
        <input type="number" required class="form-control frm" name="cts" placeholder="Contact Number">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Latitude</label>
        <div class="col-sm-10">
        <input type="text" required class="form-control frm" name="lat" placeholder="Latitude">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Longitude</label>
        <div class="col-sm-10">
        <input type="text" required class="form-control frm" name="lon" placeholder="Longtitude">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Address</label>
        <div class="col-sm-10">
            <textarea required class="form-control frm" name="add" placeholder="Address"></textarea>
        </div>
    </div>
    
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Description</label>
        <div class="col-sm-10">
            <textarea required class="form-control frm" name="des" placeholder="Description"></textarea>
        </div>
    </div>
        
    
    <div class="form-group row">
        <label class="col-sm-2 col-form-label"></label>
        <div class="col-sm-10">
        <button type="submit" name="sb" class="btn btn-primary">Add Power Station</button>
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
    move_uploaded_file($_FILES['file']['tmp_name'],'upload/'.$filee);
    
    
    $name=$_POST['name'];
    $cts=$_POST['cts'];
    $lat=$_POST['lat'];
    $lon=$_POST['lon'];
    $add=$_POST['add'];
    $des=$_POST['des'];
    

    $query="INSERT INTO `add_power`(`image`, `name`, `phone`, `latitude`, `longitude`, `address`, `des`) VALUES ('$filee','$name','$cts','$lat','$lon','$add','$des')";
    $res=mysqli_query($con,$query);
   
    if(!empty($res))
    {
        echo "<script>alert('Success')</script>";
        echo "<script> window.location.href ='power_station.php';</script>";
    }
    else
    {
        echo "<script>alert('Try Again')</script>";
    }
}
?>   
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
    
    .co{margin-top: 50px;}
    label{color:black;}
    .frm:active{color:black;background: white;}
    .frm{color:black;}
</style>
<body class="">   
<div class="">
    <div class="container">
    <form method="post" style="background-color:#000000ab;">
    <div class="form-group row">
        <label class="col-sm-2 col-form-label"></label>
        <div class="col-sm-10">
            <h1 style="text-shadow: 2px 2px #FF0000;"><u>My Service Details  :</u></h1>
        </div>
    </div>
    
    <div class="form-group row">
        <label class="col-sm-2 col-form-label" style="color:white;">Vehice Name</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" placeholder="Enter Vehicle Name" name="veh_name">
        </div>
    </div>        
    
    
    <div class="form-group row">
        <label class="col-sm-2 col-form-label" style="color:white;">Vehicle Type</label>
        <div class="col-sm-10">
            <input type="text" required class="form-control" placeholder="Enter Vehicle Type" name="veh_type">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label" style="color:white;">Vehicle Year</label>
        <div class="col-sm-10">
        <input type="date" required class="form-control" name="veh_yr" placeholder="Enter Vehicle Year">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label" style="color:white;">Problems</label>
        <div class="col-sm-10">
            <textarea required class="form-control" name="probl" placeholder="Enter Vehicle Problems"></textarea>
        </div>
    </div>
    
    
        
    <div class="form-group row">
        <label class="col-sm-2 col-form-label"></label>
        <div class="col-sm-10">
        <button type="submit" name="sb" class="btn btn-primary">Add Service</button>
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
    $veh_name=$_POST['veh_name'];
    $veh_type=$_POST['veh_type'];
    $veh_yr=$_POST['veh_yr'];
    $probl=$_POST['probl'];
    $date=date('d/M/Y');

    $query="INSERT INTO `service`(`vehicle_name`, `vehicle_type`, `vehicle_year`, `problem`, `post_date`, `user_id`) VALUES ('$veh_name','$veh_type','$veh_yr','$probl','$date','$sess')";
    $res=mysqli_query($con,$query);
   
    if(!empty($res))
    {
        echo "<script>alert('Success')</script>";
        echo "<script> window.location.href ='service.php';</script>";
    }
    else
    {
        echo "<script>alert('Try Again')</script>";
    }
}
?>   
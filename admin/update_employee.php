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
    <div class="container">
        <?php
        $id=$_GET['id'];
        $query="select * from employee where id='$id'";
        $res=mysqli_query($con,$query);
        while($fet=mysqli_fetch_array($res))
        {
        ?>
   <form method="post">
    <div class="form-group row">
        <label class="col-sm-2 col-form-label"></label>
        <div class="col-sm-10">
            <h1 style="text-shadow: 2px 2px #FF0000;"><u>Update Employee Details</u></h1>
        </div>
    </div>
    
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Employee ID</label>
        <div class="col-sm-10">
            <input type="text" style="background-color:black;color:white;" readonly value="<?php echo $fet['emp_id']; ?>" class="form-control cc" name="eid">
        </div>
    </div>        
    
    
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Name</label>
        <div class="col-sm-10">
            <input type="text" value="<?php echo $fet['name']; ?>" class="form-control frm" name="name">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Contact Number</label>
        <div class="col-sm-10">
        <input type="number" value="<?php echo $fet['phone']; ?>" class="form-control frm" name="cts">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Address</label>
        <div class="col-sm-10">
            <textarea class="form-control frm" name="add"><?php echo $fet['address']; ?></textarea>
        </div>
    </div>
    
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Joining Date</label>
        <div class="col-sm-10">
            <input type="date" value="<?php echo $fet['joining_date']; ?>" class="form-control frm" name="jdate">
        </div>
    </div>
        
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">User Name</label>
        <div class="col-sm-10">
            <input type="text" class="form-control frm" value="<?php echo $fet['uname']; ?>" name="u_nme">
        </div>
    </div>
        
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-10">
            <input type="text" class="form-control frm" value="<?php echo $fet['password']; ?>" name="pass">
        </div>
    </div>
        
    <div class="form-group row">
        <label class="col-sm-2 col-form-label"></label>
        <div class="col-sm-10">
        <button type="submit" name="sb" class="btn btn-primary">Update Employee</button>
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
        }
if(isset($_POST['sb']))
{
    $eid=$_POST['eid'];
    $name=$_POST['name'];
    $contact=$_POST['cts'];
    $address=$_POST['add'];
    $jdate=$_POST['jdate'];
    $user_name=$_POST['u_nme'];
    $pass=$_POST['pass'];
    

    $query="UPDATE `employee` SET `emp_id`='$eid',`name`='$name',`phone`='$contact',`address`='$address',`joining_date`='$jdate',`uname`='$user_name',`password`='$pass' WHERE id='$id'";
    $res=mysqli_query($con,$query);
   
    if(!empty($res))
    {
        echo "<script>alert('Success')</script>";

        echo "<script> window.location.href ='employee.php';</script>";
    }
    else
    {
        echo "<script>alert('Try Again')</script>";
    }
}
?>   
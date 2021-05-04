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
   <form method="post">
    <div class="form-group row">
        <label class="col-sm-2 col-form-label"></label>
        <div class="col-sm-10">
            <h1 style="text-shadow: 2px 2px #FF0000;"><u>Add Employee  :</u></h1>
        </div>
    </div>
    
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Employee ID</label>
        <div class="col-sm-10">
            <input type="text" style="background-color:black;color:white;" readonly value="<?php echo $rand; ?>" class="form-control cc" placeholder="Staff ID" name="eid">
        </div>
    </div>        
    
    
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Name</label>
        <div class="col-sm-10">
            <input type="text" required class="form-control frm" placeholder="Name Of The Employee" name="name">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Contact Number</label>
        <div class="col-sm-10">
        <input type="number" required class="form-control frm" name="cts" placeholder="Contact Number">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Address</label>
        <div class="col-sm-10">
            <textarea required class="form-control frm" name="add" placeholder="Address"></textarea>
        </div>
    </div>
    
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Joining Date</label>
        <div class="col-sm-10">
            <input type="date" required class="form-control frm" name="jdate">
        </div>
    </div>
        
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">User Name</label>
        <div class="col-sm-10">
            <input type="text" required class="form-control frm" placeholder="Employee User Name" name="u_nme">
        </div>
    </div>
        
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-10">
            <input type="password" required class="form-control frm" placeholder="Employee Password" name="pass">
        </div>
    </div>
        
    <div class="form-group row">
        <label class="col-sm-2 col-form-label"></label>
        <div class="col-sm-10">
        <button type="submit" name="sb" class="btn btn-primary">Add Staff</button>
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
    $eid=$_POST['eid'];
    $name=$_POST['name'];
    $contact=$_POST['cts'];
    $address=$_POST['add'];
    $jdate=$_POST['jdate'];
    $user_name=$_POST['u_nme'];
    $pass=$_POST['pass'];
    

    $query="INSERT INTO `employee`(`emp_id`, `name`, `phone`, `address`, `joining_date`, `uname`, `password`) VALUES ('$eid','$name','$contact','$address','$jdate','$user_name','$pass')";
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
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
            <h1 style="text-shadow: 2px 2px #FF0000;"><u>Add Loan  :</u></h1>
        </div>
    </div>
    
     
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Customer Income</label>
        <div class="col-sm-10">
            <input type="number" required class="form-control frm" placeholder="Customer Income" name="c_in">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Car Price Below</label>
        <div class="col-sm-10">
        <input type="number" required class="form-control frm" name="cpb" placeholder="Enter Car Price">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Amount</label>
        <div class="col-sm-10">
        <input type="number" required class="form-control frm" name="amt" placeholder="Enter Amount">
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
        <button type="submit" name="sb" class="btn btn-primary">Add Loan</button>
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
    
    $c_in=$_POST['c_in'];
    $cpb=$_POST['cpb'];
    $amt=$_POST['amt'];
    $des=$_POST['des'];
    

    $query="INSERT INTO `loan`(`cus_inc`, `car_price`, `amt`, `des`) VALUES ('$c_in','$cpb','$amt','$des')";
    $res=mysqli_query($con,$query);
   
    if(!empty($res))
    {
        echo "<script>alert('Success')</script>";
        echo "<script> window.location.href ='loan.php';</script>";
    }
    else
    {
        echo "<script>alert('Try Again')</script>";
    }
}
?>   
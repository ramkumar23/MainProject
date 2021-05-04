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
        <?php
        $id=$_GET['id'];
        $query="select * from add_spare where id='$id'";
        $res=mysqli_query($con,$query);
        while($fet=mysqli_fetch_array($res))
        {
        ?>
   <form method="post" enctype="multipart/form-data" class="col-md-6">
    <div class="form-group row">
        <label class="col-sm-3 col-form-label"></label>
            <h1 style="text-shadow: 2px 2px #FF0000;"><u>Update Spare Product </u></h1>
    </div>
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Name</label>
        <div class="col-sm-9">
            <input type="text" value="<?php echo $fet['name']; ?>" required class="form-control frm" placeholder=" Name" name="name">
        </div>
    </div>
    
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Vehicle Type</label>
        <div class="col-sm-9">
            <input type="text" required value="<?php echo $fet['vehicle_type']; ?>" class="form-control frm" placeholder=" Vehicle Type" name="v_type">
        </div>
    </div>
    
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Quantity</label>
        <div class="col-sm-9">
            <input type="number" required value="<?php echo $fet['quantity']; ?>" class="form-control frm" placeholder=" Quantity" name="quan">
        </div>
    </div>
    
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Price</label>
        <div class="col-sm-9">
        <input type="number" required value="<?php echo $fet['price']; ?>" class="form-control frm" name="price" placeholder=" Price">
        </div>
    </div>
       
     <div class="form-group row">
        <label class="col-sm-3 col-form-label">Description</label>
        <div class="col-sm-9">
         <textarea required class="form-control frm" name="des" placeholder=" Description"><?php echo $fet['des']; ?></textarea>
        </div>
    </div>
        

          
    <div class="form-group row">
        <label class="col-sm-3 col-form-label"></label>
        <div class="col-sm-9">
        <button type="submit" name="sb" class="btn btn-primary form-control">Update Sub Product</button><br><br><br><br>
        </div>
    </div>
</form>
        <?php
        }
        ?>
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
    $name=$_POST['name'];
    $vehicle_type=$_POST['v_type'];
    $quantity=$_POST['quan'];
    $price=$_POST['price'];
    $desc=$_POST['des'];

    $query="UPDATE `add_spare` SET `name`='$name',`vehicle_type`='$vehicle_type',`quantity`='$quantity',`price`='$price',`des`='$desc' WHERE id='$id'";
    $res=mysqli_query($con,$query) or die(mysqli_error($con));
   
    if(!empty($res))
    {
        echo "<script>alert('Success')</script>";
        echo "<script> window.location.href ='sub_product.php';</script>";
    }
    else
    {
        echo "<script>alert('Try Again')</script>";
    }
}
?>   
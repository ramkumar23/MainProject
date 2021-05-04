<?php
include('header.php');
include('../config.php');
session_start();
?>

<body>
		<br />
		<div class="container">
			
			
			<?php
            $id=$_GET['id'];
           
				$query = "SELECT * FROM add_spare where id='$id'";
				$result = mysqli_query($con, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
				?>
			<div class="row" style="background-color:whitesmoke;">
                <br>
				<div class="col-md-6">
                <img style="width:500px;" src="../admin/upload/<?php echo $row['file']; ?>">
                </div>
			    <div class="col-md-6" style="border-left:5px double red;"><br><br>
                <b>Name</b>:<?php echo $it_name = $row["name"]; ?><br><br>
                <b>Price</b>:&#x20B9;<?php echo $rs=$row["price"]; ?><br><br>
                <b>Description</b>:<br><div style="text-align:justify;"><?php echo $row["description"]; ?></div><br><br>
                  <div>
            <form method="POST">
            <label><u>Payment Option</u></label><br>
                <input type="radio" name="payoption" required value="Online Payment"><b>Online Payment</b><br>
            <input type="radio" name="payoption" required value="Cash On Delivery"> <b>Cash On Delivery</b><br><br>
                <span>Quantity :</span>  <input type="number" name="count" class="form-control"><br>
                <input type="submit" name="ss" class="btn btn-primary" value="Continue">
                </form>
                  </div>  
                </div>
			</div>
			<?php
                         $_SESSION['iiiddd']=$id;
                        $it_cate = $row["category"]; 
					}
				}
			?>
			
	</div>
	<br />
	</body>
</html>


<?php

if(!empty($_POST['ss']))
{
    $pay=$_POST['payoption'];
    $count=$_POST['count'];
    
    $total = $count*$rs;
    
   $_SESSION['total']=$total;
    
    if($pay=="Online Payment")
    {
        echo '<script>window.location.href="payment.php"</script>';
    }
    elseif($pay=="Cash On Delivery")
    {
        $quy="INSERT INTO `purchase`(`item_name`, `item_category`, `item_price`,`payment_method`, `user_sess`) VALUES ('$it_name','$it_cate','$rs','Cash On Delivery','$sess')";
        $res=mysqli_query($con,$quy);
        if(!empty($res))
        {
            echo '<script>alert("Your Order Placed.....")</script>';
        echo '<script>window.location.href="index.php"</script>';
        }
    }
   
    
}
?>
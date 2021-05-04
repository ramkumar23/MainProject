<?php
include('header.php');
include('../config.php');
?>
<style>
    a{color:white;}
    .bdy
    {
        overflow:hidden;
        background-color:#00000078;
        margin-top: -20px;
    }
    .logo-small {
    color: #f4511e;
    font-size: 50px;
  }
</style>
<body class="">   
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
			<div class="row" style="background-color:#0000006b;">
                <br>
				<div class="col-md-6">
                <img style="width:500px;" src="../admin/upload/<?php echo $row['file']; ?>">
                </div>
			    <div class="col-md-6" style="border-left:5px double red;"><br><br>
                <b>Name</b>:<?php echo $row["name"]; ?><br><br>
                <b>Vehicle Type</b>:<?php echo $row["vehicle_type"]; ?><br><br>
                <b>Price</b>:&#x20B9;<?php echo $rs=$row["price"]; ?><br><br>
                <b>Description</b>:<br><div style="text-align:justify;"><?php echo $row["des"]; ?></div><br><br>
                    
                    <form method="post">
                <b>Quantity </b>:<input type="number" name="coun" value="1" class="form-control" required><br><br>
        <input type="submit" name="sb" class="btn btn-primary" value="Make Payment">
                    </form>
                        <br><br>
                </div>
			</div>
			<?php
					}
				}
			?>
			
	</div>   
</body>


<?php
session_start();
if(isset($_POST['sb']))
{
    $count=$_POST['coun'];
     $tot=$rs*$count;
    $_SESSION['tt']=$tot;
    $_SESSION['p_id']=$id;
    header('location:payment.php');
}
?>
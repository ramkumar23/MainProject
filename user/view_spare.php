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
    /*h3{color:black;}*/
</style>
<body class="">   
<div class="bdy container" style="background-color:#000000ab;">
    <div class="container-fluid bg-3 text-center">    
  <h3>Spare Parts</h3><br>
        <div class="row">
        <?php
        $query=mysqli_query($con,"select * from add_spare");
        while($fet=mysqli_fetch_array($query))
        {
        ?>
  
    <div class="col-md-4">
				<form method="post" action="view.php?id=<?php echo $fet["id"]; ?>">
					<div style="border:3px solid white;; background-color:whitesmoke; border-radius:5px; padding:16px;" align="center">

<h4 class="text-info"><?php echo $fet["name"]; ?></h4>
<img style="height:250px;width:290px;" src="../admin/upload/<?php echo $fet["file"]; ?>" class="img-responsive" /><br />


<h4 class="text-danger">&#x20B9; <?php echo $fet["price"]; ?></h4>


<input type="submit" name="mp" style="margin-top:5px;" class="btn btn-success" value="View Detail" />

</div><br>
				</form>
			</div>
 
        <?php
        }
        ?>
             </div>
</div><br>

    <div class="footer">
  <p>Footer</p>
</div>
    <br>
    <br>
    <br>
    <br>
</div>    
</body>
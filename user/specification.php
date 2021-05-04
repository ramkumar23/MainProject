<?php
include('header.php');
include('../config.php');
session_start();
$uses=$_SESSION['sess'];

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
    th{color:gold}
    h1{color:black}
    table{background-color:#ffffff30;}
    td{color:white}
    .co{margin-top: 50px;}
</style>
<body class="">   
<div class="">
    <div class="container">
    <h1><u>Manage My Specifications</u></h1>
    <a href="my_specification.php"><button class="btn btn-success pull-right">Add Product</button></a><br>
   	<table class="table co" style="background-color:#000000ab;">
    <tr>
    <th>S.no</th>
    <th>Image</th>
    <th>Name</th>
    <th>Color</th>
    <th>Description</th>
    <th>Price</th>
    <th>View</th>
    <th>Delete</th>
    </tr>
     <?php
        $count=0;
        $query="SELECT * FROM `user_product` where usr_name='$uses'";
        $res=mysqli_query($con,$query);
        while($fet=mysqli_fetch_array($res))
        {
        ?> 
    <tr>
        
    <td><?php echo ++$count; ?></td>
    <td><img style="width:150px;" src="upload/<?php echo $fet['image']; ?>"></td>
    <td><?php echo $fet['name']; ?></td>
    <td><?php echo $fet['color']; ?></td>
    <td><?php echo $fet['description']; ?></td>
    <td>&#8377;<?php echo $fet['price']; ?></td>
    <td><a href="view_my_prod.php?id=<?php echo $fet['id']; ?>"><button class="btn btn-success">View</button></a></td>
       
        <td><a href="specification.php?id=<?php echo $fet['id']; ?>"><button class="btn btn-danger">Delete</button></a></td>
    </tr>
        <?php
    }
    ?>
    </table>
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
if(!empty($_GET['id']))
   {
     $id=$_GET['id'];
    $query="DELETE FROM `user_product` WHERE id='$id'";
    $res=mysqli_query($con,$query);
    if(!empty($res))
    {
        echo '<script>window.location.href="specification.php"</script>';
    }
    else
    {
        echo '<script>alert("try again")</script>';

    }
}
?>
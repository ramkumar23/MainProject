<?php
include('header.php');
include('../config.php');
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
    .co{margin-top: 50px;}
</style>
<body class="admin">   
<div class="bdy">
    <div class="container">
    <h1><u>Power Station Details</u></h1>
    <a href="add_power.php"><button class="btn btn-success pull-right">Add PowerStation</button></a><br>
   	<table class="table co">
    <tr>
    <th>S.no</th>
    <th>Image</th>
    <th>Name</th>
    <th>Phone</th>
    <th>Location</th>
    <th>Address</th>
    <th>Description</th>
    <th>Delete</th>
    </tr>
     <?php
        $count=0;
        $query="SELECT * FROM `add_power`";
        $res=mysqli_query($con,$query);
        while($fet=mysqli_fetch_array($res))
        {
        ?> 
    <tr>
        
    <td><?php echo ++$count; ?></td>
    <td><img style="width:150px;" src="upload/<?php echo $fet['image']; ?>"></td>
    <td><?php echo $fet['name']; ?></td>
    <td><?php echo $fet['phone']; ?></td>
    <td><a style="color:white;" href="https://www.google.com/maps/place/<?php echo $fet['latitude'].','.$fet['longitude'];?>"><?php echo $fet ['latitude']; ?>         
    <td><?php echo $fet['address']; ?></td>
    <td><?php echo $fet['des']; ?></td>
    
    <td><a href="power_station.php?id=<?php echo $fet['id']; ?>"><button class="btn btn-danger">Delete</button></a></td>
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
    $query="DELETE FROM `add_power` WHERE id='$id'";
    $res=mysqli_query($con,$query);
    if(!empty($res))
    {
        echo '<script>window.location.href="power_station.php"</script>';
    }
    else
    {
        echo '<script>alert("try again")</script>';

    }
}
?>
        
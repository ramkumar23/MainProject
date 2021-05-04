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
    th{color:gold}
    h1{color:black}
    .logo-small {
    color: #f4511e;
    font-size: 50px;
  }
    .co{margin-top: 50px;}
</style>
<body class="">   
<div class="">
    <div class="container">
    <h1><u>Power Station Details</u></h1>
   	<table class="table co" style="background-color:#000000ab;">
    <tr>
    <th>S.no</th>
    <th>Image</th>
    <th>Name</th>
    <th>Phone</th>
    <th>Location</th>
    <th>Address</th>
    <th>Description</th>
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
    <td><img style="width:150px;" src="../admin/upload/<?php echo $fet['image']; ?>"></td>
    <td><?php echo $fet['name']; ?></td>
    <td><?php echo $fet['phone']; ?></td>
        <td><a style="color:white;" href="https://www.google.com/maps/place/<?php echo $fet['latitude'].','.$fet['longitude'];?>"><?php echo $fet ['latitude']; ?></a></td>         
    <td><?php echo $fet['address']; ?></td>
    <td><?php echo $fet['des']; ?></td>
    
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
        </div></div>
</div>    
</body>


<?php
include('header.php');
include('../config.php');
session_start();
$uses=$_SESSION['sess'];

?>
<style>
    a{color:white;}
    h1{color:white;}
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
    table{background-color:#ffffff30;}
    th{color:gold}
    td{color:white}
    .co{margin-top: 50px;}
</style>
<body class="admin">   
<div class="bdy">
    <div class="container">
    <h1><u>Manage My Specifications</u></h1>
   	<table class="table co">
    <tr>
    <th>S.no</th>
    <th>Image</th>
    <th>User Name</th>
    <th>User Phone</th>
    <th>Price</th>
    <th>View</th>
    </tr>
     <?php
        $count=0;
        $query="SELECT * FROM `user_product`";
        $res=mysqli_query($con,$query);
        while($fet=mysqli_fetch_array($res))
        {
        ?> 
    <tr>
        
    <td><?php echo ++$count; ?></td>
    <td><img style="width:150px;" src="../user/upload/<?php echo $fet['image']; ?>"></td>
    <td><?php echo $fet['user_name']; ?></td>
    <td><?php echo $fet['usr_phone']; ?></td>
    <td>&#8377;<?php echo $fet['price']; ?></td>
    <td><a href="view_usr_pro.php?id=<?php echo $fet['id']; ?>"><button class="btn btn-success">View</button></a></td>
     
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

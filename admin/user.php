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
    <h1><u>List Of Registred User</u></h1>
    
   	<table class="table co">
    <tr>
    <th>S.no</th>
    <th>Name</th>
    <th>Phone</th>
    <th>E-Mail</th>
    <th>Address</th>
    <th>Username</th>
    </tr>
     <?php
        $count=0;
        $query="SELECT * FROM `registration`";
        $res=mysqli_query($con,$query);
        while($fet=mysqli_fetch_array($res))
        {
        ?> 
    <tr>
        
    <td><?php echo ++$count; ?></td>
    <td><?php echo $fet['name']; ?></td>
    <td><?php echo $fet['phone']; ?></td>
    <td><?php echo $fet['email']; ?></td>
    <td><?php echo $fet['address']; ?></td>
    <td><?php echo $fet['uname']; ?></td>
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


        
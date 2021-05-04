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
    h1{color:black}
    .co{margin-top: 50px;}
</style>
<body class="">   
<div class="">
    <div class="container">
    <h1><u>Loan Details</u></h1>
   	<table class="table co" style="background-color:#000000ab;">
    <tr>
    <th>S.no</th>
    <th>Customer Income</th>
    <th>Car Price Below</th>
    <th>May Get Loan Amount</th>
    <th>Description</th>
   
    </tr>
     <?php
        $count=0;
        $query="SELECT * FROM `loan`";
        $res=mysqli_query($con,$query);
        while($fet=mysqli_fetch_array($res))
        {
        ?> 
    <tr>
        
    <td><?php echo ++$count; ?></td>
    <td><?php echo $fet['cus_inc']; ?></td>
    <td><?php echo $fet['car_price']; ?></td>
    <td><?php echo $fet['amt']; ?></td>
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
        </div>
</div>    
</body>

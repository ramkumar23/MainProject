<?php
include('header.php');
include('../config.php');
session_start();
$sess = $_SESSION['sess'];
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
    <h1><u>My Order List</u></h1>
   	<table class="table co" style="background-color:#000000ab;">
    <tr>
    <th style="text-align:center;">S.no</th>
    <th style="text-align:center;">Image</th>
    <th style="text-align:center;">Product Name</th>
    <th style="text-align:center;">Amount</th>
    
   
    </tr>
     <?php
        $count=0;
        $query="SELECT usr_order.amt,add_spare.name,add_spare.file FROM usr_order INNER JOIN add_spare ON usr_order.product_id = add_spare.id where user_id='$sess'";
        $res=mysqli_query($con,$query);
        while($fet=mysqli_fetch_array($res))
        {
    
        ?> 
    <tr style="text-align:center;">
        
    <td><?php echo ++$count; ?></td>
    <td><img style="width:150px;" src="../admin/upload/<?php echo $fet['file']; ?>"></td>
    <td><?php echo $fet['name']; ?></td>
    <td>&#x20B9;<?php echo $fet['amt']; ?></td>
    
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
        


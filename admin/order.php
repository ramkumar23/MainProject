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
    table{background-color:#ffffff30;}
    th{color:gold}
    .co{margin-top: 50px;}
</style>
<body class="admin">   
<div class="bdy">
    <div class="container">
    <h1><u>User Purchase</u></h1>
   	<table class="table co">
    <tr>
    <th style="text-align:center;">S.no</th>
    <th style="text-align:center;">Image</th>
    <th style="text-align:center;">Product Name</th>
    <th style="text-align:center;">Amount</th>
    
   
    </tr>
     <?php
        $count=0;
        $query="SELECT usr_order.amt,add_spare.name,add_spare.file FROM usr_order INNER JOIN add_spare ON usr_order.product_id = add_spare.id";
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

<?php
if(!empty($_GET['id']))
   {
     $id=$_GET['id'];
    $query="DELETE FROM `add_product` WHERE id='$id'";
    $res=mysqli_query($con,$query);
    if(!empty($res))
    {
        echo '<script>window.location.href="product.php"</script>';
    }
    else
    {
        echo '<script>alert("try again")</script>';

    }
}
?>
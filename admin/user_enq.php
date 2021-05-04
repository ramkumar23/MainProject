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
    <h1><u>Enquiry Details</u></h1>
   	<table class="table co">
    <tr>
    <th>S.no</th>
    <th>Image</th>
    <th>Product Name</th>
    <th>User Name</th>
    <th>Phone</th>
    <th>Enquiry Date</th>
    </tr>
         
     <?php
        $count=0;
        $query="SELECT pro.image,pro.name as p_name,reg.name,reg.phone,en.enquiry_date FROM `registration` as reg INNER JOIN enquiry as en inner join add_product as pro ON pro.id=en.product_id && reg.uname=en.user_id";
        $res=mysqli_query($con,$query);
        while($fet=mysqli_fetch_array($res))
        {
        ?> 
    <tr>
        
    <td><?php echo ++$count; ?></td>
    <td><img style="width:150px;" src="upload/<?php echo $fet['image']; ?>"</td>
    <td><?php echo $fet['p_name']; ?></td>
    <td><?php echo $fet['name']; ?></td>
    <td><?php echo $fet['phone']; ?></td>
    <td><?php echo $fet['enquiry_date']; ?></td>
    
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
    $query="DELETE FROM `enquiry` WHERE id='$id'";
    $res=mysqli_query($con,$query);
    if(!empty($res))
    {
        echo '<script>window.location.href="employee.php"</script>';
    }
    else
    {
        echo '<script>alert("try again")</script>';

    }
}
?>
        
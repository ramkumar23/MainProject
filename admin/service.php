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
    <div class="container"><br>
    <h1><u>View Service List</u></h1>
    
   	<table class="table co">
    <tr>
    <th>S.no</th>
    <th>Vehicle Name</th>
    <th>Vehicle Type</th>
    <th>Vehicle Year</th>
    <th>Problem</th>
    <th>Delivery Date</th>
    <th>Cost</th>
    <th>Post Date</th>
    <th>Submit</th>
    </tr>
     <?php
        $count=0;
        $query="SELECT * FROM `service`";
        $res=mysqli_query($con,$query);
        while($fet=mysqli_fetch_array($res))
        {
        ?> 
    <tr style="text-align:center;">
        
    <td><?php echo ++$count; ?></td>
    <td><?php echo $fet['vehicle_name']; ?></td>
    <td><?php echo $fet['vehicle_type']; ?></td>
    <td><?php echo $fet['vehicle_year']; ?></td>
    <td><?php echo $fet['problem']; ?></td>
        <form method="post" action="service.php?id=<?php echo $id=$fet['id']; ?>">
    <td><?php if(empty($fet['delivery_date'])){echo "<input type='date' required class='form-control frm' title='Date Of Delivery' name='ddte'>";}else{echo $fet['delivery_date'];} ?></td>
        
    <td><?php if(empty($fet['price'])){echo "<input type='number' required class='form-control frm' placeholder='Cost Of Service' name='cost'>";}else{echo $fet['price'];} ?></td>
    <td><?php echo $fet['post_date']; ?></td>
        <td><input type="submit" name="sb" class="btn btn-danger" value="Fix Service"></td>
            </form>
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
if(isset($_POST['sb']))
{
    $id=$_GET['id'];
    $date=$_POST['ddte'];
    $cost=$_POST['cost'];
    

    $query="UPDATE `service` SET `delivery_date`='$date',`price`='$cost' WHERE id='$id' ";
    $res=mysqli_query($con,$query);
   
    if(!empty($res))
    {
        echo "<script>alert('Success')</script>";
        echo "<script> window.location.href ='service.php';</script>";
    }
    else
    {
        echo "<script>alert('Try Again')</script>";
    }
}
?>   
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
    <h1><u>Loan Details</u></h1>
    <a href="add_loan.php"><button class="btn btn-success pull-right">Add Employee</button></a><br>
   	<table class="table co">
    <tr>
    <th>S.no</th>
    <th>Customer Income</th>
    <th>Car Price Below</th>
    <th>May Get Loan Amount</th>
    <th>Description</th>
   
    <th>Delete</th>
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
    
        <td><a href="loan.php?id=<?php echo $fet['id']; ?>"><button class="btn btn-danger">Delete</button></a></td>
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
    $query="DELETE FROM `loan` WHERE id='$id'";
    $res=mysqli_query($con,$query);
    if(!empty($res))
    {
        echo '<script>window.location.href="loan.php"</script>';
    }
    else
    {
        echo '<script>alert("try again")</script>';

    }
}
?>
        
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
    <h1><u>Manage Employee Details</u></h1>
    <a href="add_employee.php"><button class="btn btn-success pull-right">Add Employee</button></a><br>
   	<table class="table co">
    <tr>
    <th>S.no</th>
    <th>Employee ID</th>
    <th>Name</th>
    <th>Phone</th>
    <th>Address</th>
    <th>Joining Date</th>
    <th>Username</th>
    <th>Password</th>
    <th>Update</th>
    <th>Delete</th>
    </tr>
     <?php
        $count=0;
        $query="SELECT * FROM `employee`";
        $res=mysqli_query($con,$query);
        while($fet=mysqli_fetch_array($res))
        {
        ?> 
    <tr>
        
    <td><?php echo ++$count; ?></td>
    <td><?php echo $fet['emp_id']; ?></td>
    <td><?php echo $fet['name']; ?></td>
    <td><?php echo $fet['phone']; ?></td>
    <td><?php echo $fet['address']; ?></td>
    <td><?php echo $fet['joining_date']; ?></td>
    <td><?php echo $fet['uname']; ?></td>
    <td><?php echo $fet['password']; ?></td>
    <td><a href="update_employee.php?id=<?php echo $fet['id']; ?>"><button class="btn btn-warning">Update</button></a></td>
        <td><a href="employee.php?id=<?php echo $fet['id']; ?>"><button class="btn btn-danger">Delete</button></a></td>
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
    $query="DELETE FROM `employee` WHERE id='$id'";
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
        
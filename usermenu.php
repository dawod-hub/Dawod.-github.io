<!-- <nav class="navbar navbar-fixed-top" style="background-color: #F5F5DC"> -->
<?php

session_start();
$role=$_SESSION['role'];
$role;
if($role!='user')
{
  header('Location: login.php');
}
?>

<?php $email=$_SESSION['emailid']; ?>

<?php     
include "connection.php";
$sql=mysqli_query($db,"SELECT * FROM register WHERE emailid='$email' ");
while ($row=mysqli_fetch_array($sql)) { 
  $image=$row['image'];
}
?>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">

<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
</div>
      
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-left">
<a class="navbar-brand" href="userhome.php"></a>
      <li><a href="userhome.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
      <li><a href="viewitems.php"><i class="fa fa-lemon-o"></i> Items</a></li>
      <li><a href="cart.php"><i class="fa fa-cart-plus"></i> Cart</a></li>
      <li><a href="cartorders.php"><i class="fa fa-sort"></i> Orders</a></li>
      <li><a href="feedback.php"><i class="fa fa-comment"></i> Feedback</a></li>

      <li><a href="usermails.php"><i class="fa fa-envelope"></i> Mails</a></li> 
      <li><a href="userprofile.php"><i class="fa fa-pencil"></i> Profile</a></li> 
     
  </ul>

  <ul class="nav navbar-nav navbar-right">
       <li class="dropdown" >
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color:#ffb31a"><strong>Welcome</strong> <span class="caret"></span></a>
             <ul class="dropdown-menu">
                <li><a href="#" style="color:#ffb31a"><strong><?php echo $email ?> <?php echo '<img src="Users/'.$image.'" style="border-radius: 50%;" height="30"; width="50">' ?></strong></a></li><br/>
                <li><a href="logout.php" style="color:#ffb31a"><i class="fa fa-power-off"></i><strong> Sign Out</strong></a></li>

              </ul>
        </li>
  </ul> 

     </div> 
  </div>
</nav>



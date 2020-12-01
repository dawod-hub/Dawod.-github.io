<?php
session_start();
     
include('connection.php');

$emailid=$_GET['emailid'];
$mobile=$_GET['mobile'];


$sql=mysqli_query($db,"SELECT * FROM register WHERE emailid='$emailid' ");
while ($row=mysqli_fetch_array($sql)) {
 $pass = $row['password'];
} 


$check_email = mysqli_query($db, "SELECT * FROM register WHERE emailid = '$emailid' AND mobile = '$mobile'  ");
if(mysqli_num_rows($check_email) > 0){
      header('Location:fgtpwd.php?error=2 & pwd='.$pass); 
}
else{

      header('Location:fgtpwd.php?error=1 & pwd='.$pass);

}

?>
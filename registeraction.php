
<?php
session_start();
     
include('connection.php');

$fullname=$_POST['fullname'];
$gender=$_POST['gender'];
$emailid=$_POST['emailid'];
$password=$_POST['password'];
$mobile=$_POST['mobile'];
$dob=$_POST['dob'];
$address=$_POST['address'];
$city=$_POST['city'];
$state=$_POST['state'];
$country=$_POST['country'];
$postal=$_POST['postal'];



$name=$_FILES['file']['name'];
move_uploaded_file($_FILES['file']['tmp_name'],"Users/$name");

date_default_timezone_set("Asia/Kolkata");
$regdate= date("Y-m-d") . ' ' . date("H:i:s");


$check_email = mysqli_query($db, "SELECT emailid FROM register WHERE emailid = '$emailid' ");
if(mysqli_num_rows($check_email) > 0){
      header('Location:register.php?error=1'); 
}
else{
    /*if ($_SERVER["REQUEST_METHOD"] == "POST") {*/
   /*mysqli_query($db, "INSERT INTO register(fullname, gender, emailid, password, mobile, image, dob, address, city,
    state, country, postal, role, regdate) VALUES('$fullname', '$gender', '$emailid', '$password', '$mobile', '$name', 
    '$dob', '$address', '$city', '$state', '$country', '$postal', 'user', '$regdate' )");*/
mysqli_query($db, "INSERT INTO register(id, fullname, gender, emailid, password, mobile, image, dob, address,
 city, state, country, postal, role, regdate) (SELECT IFNULL(MAX(ID),0)+1, '$fullname', '$gender', '$emailid',
  '$password', '$mobile', '$name', '$dob', '$address', '$city', '$state', '$country', '$postal', 'user', '$regdate' FROM register)");
/*}*/
   if($mysqli_query_execute->num_rows ===0){
          header('Location:register.php?error=2');
        }
else{ 
          header('Location:register.php?error=3');

         }
}

?>
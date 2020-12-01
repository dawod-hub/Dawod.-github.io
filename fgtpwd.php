<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>
<title>Food</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="css/font-awesome.css"/>
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css"/>
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css"/>
<link rel="stylesheet" type="text/css" href="css/jquery-ui.css"/>

<link rel="stylesheet" type="text/css" href="css/style/style1.css"/>
        <script src="js/jquery-3.2.1.js"></script>
        <script src="js/jquery-ui.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/admin/main.js"></script>    

<style type="text/css">
body{
background-image: url('Images/bg.jpg');

}
</style>

</head>
<?php include "header.php"; ?>
<?php include "topmenu.php"; ?>

<body>
<div class="container-fluid">    
<div class="row">     
<div class="col-xs-12 col-sm-12">


<br><br><br>


<div class="row">
 
    <div class="col-xs-12 col-sm-2"></div>         
            <div class="col-xs-12 col-sm-10 form-group">
           
      <!-- --------------Login Account----------- -->
 
<form method="GET" action="fgtpwdaction.php">

              <div class="row">
                <div class="col-xs-12 col-sm-5 form-group">
                <h4 style="margin-bottom: 5px;color:#0000FF;">
            <label>Enter your details for forgot password</label></h4><br><br>
             <?php
            if(isset($_GET['error'])==true){
                if($_GET['error']==1){
                    
                echo "<b style='color:red'>*&nbsp; Details not matched. </b>";       

                }
                elseif($_GET['error']==2){
                    
                echo "<b style='color:red'>*&nbsp; Your password is ' " . $_GET["pwd"] . " ' . </b>";       

                }
            }
            ?> 
               </div>
            </div>
                   
<div class="row">
  <div class="col-xs-12 col-sm-5 form-group">
   <div class="input-group">
     <span class="input-group-addon"><i class ="fa fa-envelope"></i></span>
    <input type="email" class="form-control" id="emailid" placeholder="Email Id" name="emailid" required>
    </div>
  </div> 
</div> 
<br> 
<div class="row">
  <div class="col-xs-12 col-sm-5 form-group">
    <div class="input-group">
      <span class="input-group-addon"><i class ="fa fa-phone"></i></span>
     <input type="text" class="form-control" id="mobile" placeholder="Contact Number" name="mobile" required maxlength="10" title="The contact number must enter 10 digits number"
        oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
    </div>
  </div> 
</div>
                    
<div class="row btngrp">
<div class="col-xs-12 col-sm-2">
 <a href="Login.php"><button type="button" name="submit" class="btn btn-warning btn-md pull-left"><i class ="fa fa-backward"></i> Login</button></a> 
 </div>   
<div class="col-xs-12 col-sm-3">
  <button type="submit" class="btn btn-success btn-md pull-right"><span> Submit</span></button>       
</div>
          </div>       
        </form>  
     </div>
</div>       

</div>
</div>
</div>


<?php include "footer.php" ?>
</body>
</html>
    

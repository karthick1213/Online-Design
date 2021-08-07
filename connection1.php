<?php
$name=$_POST['sname'];
$password=$_POST['spass'];


 if($name=='Admin' AND $password=='@1213'){
  header("location:admin.php");
 }
 else{
   echo "invalidite user name";
 }


 ?>

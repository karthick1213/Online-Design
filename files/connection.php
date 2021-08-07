<?php
$name=$_POST['name'];
$password=$_POST['password'];

$conn =new mysqli('localhost','root','','login');
if($conn->connect_error){
 echo "$conn->connect_error";
 die("Connection Failed : ". $conn->connect_error);
}
else{
 $stmt = "select * from sign_in where Mail_id='$name' and Password='$password'";
 #$stmt->bind_param("ss", $name, $password);

 $execval=$conn->query($stmt);
 if(mysqli_num_rows($execval)>0){
  header("location:index1.html");
 }
 else{
   echo "invalidite user name";
 }


 mysqli_close($conn);
}
 ?>

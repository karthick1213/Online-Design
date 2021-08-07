<?php
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirmpassword = $_POST['confirmpassword'];
$conn =new mysqli('localhost','root','','login');
if($conn->connect_error){
 echo "$conn->connect_error";
 die("Connection Failed : ". $conn->connect_error);
}
else{
 $stmt = $conn->prepare("insert into sign_in(FirstName,LastName,Mail_id,Password,Confirm_Password)value(?,?,?,?,?)");
 $stmt->bind_param("sssss",$firstname,$lastname,$email,$password,$confirmpassword);
 $execval=$stmt->execute();
 echo $execval;
 header("location:index1.html");
 $stmt->close();
 $conn->close();
}
?>

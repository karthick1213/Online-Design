<?php
$fullname = $_POST['fullname'];
$mobile = $_POST['mobile'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$pincode = $_POST['pincode'];
$cardname = $_POST['cardname'];
$cardnumber = $_POST['cardnumber'];
$expmonth = $_POST['expmonth'];
$expyear = $_POST['expyear'];
$cvv = $_POST['cvv'];
$conn =new mysqli('localhost','root','','login');
if($conn->connect_error){
 echo "$conn->connect_error";
 die("Connection Failed : ". $conn->connect_error);
}
else{
 $stmt = $conn->prepare("insert into payment_details(FullName,MobileNo,Address,City,State,PinCode,CardName,CardNumber,ExpMonth,ExpYear,Cvv)value(?,?,?,?,?,?,?,?,?,?,?)");
 $stmt->bind_param("sssssssssss",$fullname,$mobile,$address,$city,$state,$pincode,$cardname,$cardnumber,$expmonth,$expyear,$cvv);
 $execval=$stmt->execute();
 echo $execval;
 header("location:men.html");
 $stmt->close();
 $conn->close();
}
?>

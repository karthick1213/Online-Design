<html><head></head>
  <body>


    <?php
$conn=mysqli_connect("localhost","root","","login") or die("failed:" . mysqli_connect_error());
$result = mysqli_query($conn,"select * from payment_details");
echo "<table border='1' cellpadding='15' cellspacing='5'>
<tr>
<th>FULLNAME</th>
<th>MOBILE NO</th>
<th>ADDRESS</th>
<th>CITY</th>
<th>STATE</th>
<th>PINCODE</th>
<th>CARDNAME</th>
<th>CARDNUMBER</th>
<th>EXPIRY MONTH</th>
<th>EXPIRY YEAR</th>
<th>CVV</th>
</tr>";
while($row = mysqli_fetch_assoc($result))
  {
  echo "<tr>";
  echo "<td>" . $row['FullName'] . "</td>";
 echo "<td>" . $row['MobileNo'] . "</td>";
echo "<td>" . $row['Address'] . "</td>";
echo "<td>" . $row['City'] . "</td>";
echo "<td>" . $row['State'] . "</td>";
echo "<td>" . $row['PinCode'] . "</td>";
echo "<td>" . $row['CardName'] . "</td>";
echo "<td>" . $row['CardNumber'] . "</td>";
echo "<td>" . $row['ExpMonth'] . "</td>";
echo "<td>" . $row['ExpYear'] . "</td>";
echo "<td>" . $row['Cvv'] . "</td>";
 echo "</tr>";
 }
echo "</table>";


$conn->close();
?>
    </body>
    </html>

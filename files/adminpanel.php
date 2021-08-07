<html>

<head>
  <title>STARK : Admin Panel</title>
  <link rel="icon" href="Starklogo.png" type="image/icon type">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <link rel="stylesheet" href="home.css">
  <link rel="stylesheet" href="photogrid.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <style>
  table {
    font-family: Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
  }

  td,  th {
    border: 1px solid #ddd;
    padding: 8px;
  }

  tr:nth-child(even){background-color: #f2f2f2;}

  tr:hover {background-color: #ddd;}

  th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #000;
    color: white;
  }
  </style></head>
<body>

  <div class="pos-f-t">
    <div class="collapse" id="navbarToggleExternalContent">
      <div class="nav1 p-4">
        <a href="adminpanel.php"><button type="submit" style="background-color:black;border-color:black;" class="btn btn-primary">Signup Details</button></a><br />
        <a href="adminpanel2.php"><button type="submit" style="background-color:black;border-color:black;" class="btn btn-primary">Payment Details</button></a>
      </div>
    </div>
    <nav class="nav1 navbar navbar-dark">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>&nbsp&nbsp
        <a class="navbar-brand" href="index.html" style="color:white;font-family:MontBlack;">STARK.</a><br />
        <a href="index.html"><button type="button" class="btn btn-dark" style="background-color:black;"><i class="bi bi-house-door-fill"></i>&nbspVisit Home Page</button></a>

      </button>
    </nav>
  </div>

  <!-- Container-fluid starts-->
  <div class="container-fluid">
    <div class="page-header">
      <div class="page-header-left">
        <h3 style="text-transform:uppercase;">Users List</h3>
        <small>Stark Admin panel</small>
      </div>
    </div>
  </div>
<br />
  <div class="container-fluid">
      <div class="card">
          <div class="card-header">
              <h5>User Details</h5>
          </div>
          <div class="card-body">
            <center>
            <?php
            $conn=mysqli_connect("localhost","root","","login") or die("failed:" . mysqli_connect_error());
            $result = mysqli_query($conn,"select * from sign_in");
            echo "<table border='1' cellpadding='15' cellspacing='5'>
            <tr>
            <th>FIRSTNAME</th>
            <th>LASTNAME</th>
            <th>MAIL id</th>
            <th>PASSWORD</th>
            <th>CONFIRM PASSWORD</th>
            </tr>";
            while($row = mysqli_fetch_assoc($result))
              {
              echo "<tr>";
              echo "<td>" . $row['FirstName'] . "</td>";
             echo "<td>" . $row['LastName'] . "</td>";
            echo "<td>" . $row['Mail_id'] . "</td>";
            echo "<td>" . $row['Password'] . "</td>";
            echo "<td>" . $row['Confirm_Password'] . "</td>";
             echo "</tr>";
             }
            echo "</table>";
            $conn->close();
            ?>
            </center>
          </div>
      </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>

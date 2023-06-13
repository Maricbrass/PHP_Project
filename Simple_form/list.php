<?php
include 'server.php';
$sql = "SELECT * FROM form1";
if($result = mysqli_query($connect,$sql)){
  if(mysqli_num_rows($result)>0){
    echo' <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">';
 echo '<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>';
echo '<div class="container">';
echo '<table class="table table-dark table-striped-columns">';
echo "<thead>";
echo "<h2><i>Content of Entry Database</i></h2><br>";
echo "<tr>";
    echo "<th>SR</th>";
    echo "<th>Email</th>";
    echo "<th>Name</th>";
    echo "<th>Password</th>";
    echo "<th>Address</th>";
    echo "<th>Gender</th>";
    echo "<th>Operations</th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";

  }
  while($row = mysqli_fetch_array($result)){
    echo "<tr>";
    echo "<td>".$row['ID']."</td>";
    echo "<td>".$row['Name']."</td>";
    echo "<td>".$row['Email']."</td>";
    echo "<td>".$row['Password']."</td>";
    echo "<td>".$row['Address']."</td>";
    echo "<td>".$row['Gender']."</td>";
    echo "<td><a class='btn btn-primary' href='update.php?id=".$row['ID']."'>Update</a>";
    echo "<a class='btn btn-danger' href='delete.php?id=".$row['ID']."'>Delete</a></td>";
  }
}
?>

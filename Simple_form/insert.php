<?php
include 'server.php';

$Name = $_POST['name'];
$Email = $_POST['email'];
$Password = $_POST['password'];
$Address = $_POST['address'];
$Gender = $_POST['gender'];

$sql = "INSERT INTO form1 set name='$Name',email='$Email', password='$Password', address='$Address', gender='$Gender'";
if(mysqli_query($connect,$sql)){
    echo "Data inserted successfully";
}
else{
    echo "Data insertion failed";
}

?>
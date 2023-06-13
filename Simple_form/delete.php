<?php
include 'server.php';
$id = $_GET['id'];
$sql = "DELETE FROM form1 WHERE ID = '$id'";
$result = mysqli_query($connect,$sql);
if($result){
  header('location:list.php');
}
?>

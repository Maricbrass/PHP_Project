<?php
include 'server.php';
$id = $_GET['id'];
$sql = "SELECT * FROM form1 WHERE ID = '$id'";
$result = mysqli_query($connect,$sql);
$row = mysqli_fetch_array($result);
$name = $row['Name'];
$email = $row['Email'];
$password = $row['Password'];
$address = $row['Address'];

if(isset($_POST['update'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $address = $_POST['address'];
  $sql = "UPDATE form1 SET Name = '$name', Email = '$email', Password = '$password', Address = '$address' WHERE ID = '$id'";
  $result = mysqli_query($connect,$sql);
  if($result){
    header('location:list.php');
  }
}
?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
   <title>Update</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 </head>
 <body>
 <div class="container">
   <h2>Update</h2>
   <form action="" method="POST">
     <div class="form-group">
       <label for="name">Name:</label>
       <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" value="<?php echo $name; ?>">
     </div>
     <div class="form-group">
       <label for="email">Email:</label>
       <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="<?php echo $email; ?>">
     </div>
     <div class="form-group">
      <label for="pwd">Password:</label>
       <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password" value="<?php echo $password; ?>">
     </div>
     <div class="form-group">
       <label for="address">Address:</label>
       <input type="text" class="form-control" id="address" placeholder="Enter address" name="address" value="<?php echo $address; ?>">
     </div>
     <button type="submit" class="btn btn-primary" name="update">Update</button>
   </form>
 </div>
 </body>
 </html>

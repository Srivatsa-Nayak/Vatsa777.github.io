<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="rcss.css">
    <title>REGISTER</title>
</head>
<body>
<div class="container">
<form action="register.php" method="POST">
      <h1 class="main_heading">REGISTER FORM</h1>
      <p>Required fields are followed by *</p>
        <h2>---Contact Information---</h2>
        <p>Name:* <input type="text" name="name" placeholder="XXXX YYYY" required></p>
        <p>
            Address:
            <br>
             <textarea name="address" id="address" cols="100" rows="8" placeholder="Enter your address"></textarea>
            </p>
        <p>Email:* <input type="email" name="email" id="email" required></p>
        <p>Phone:* <input type="number" name="phone" id="phone" required></p>
        <p>Password: <input type="password" name="password" id="cvv" required></p>
        <input type="submit" name="submit" value="Register" >
    </form>
</div>
</body>
</html>


<?php
include 'connection1.php';

if(isset($_POST['submit'])){
$Name= $_POST['name'];
$Address= $_POST['address'];
$Email=$_POST['email'];
$Phone=$_POST['phone'];
$Password=$_POST['password'];

$insert_query=" insert into customer(Name,Address,Email,Phone,Password)
      values('$Name','$Address','$Email','$Phone','$Password')";
      
    $res =  mysqli_query($con,$insert_query);
    if($res){
        ?>
        <script>
            alert("Registration Complete");
            </script>
            <?php
    }else{
    ?>
        <script>
            alert("Data not inserted successfully");
            </script>
            <?php
    }
}
?>
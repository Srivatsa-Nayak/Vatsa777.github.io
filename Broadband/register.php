<?php
include 'connection1.php';

error_reporting(0);

if(isset($_POST['submit'])){
$Name= $_POST['name'];
$Address= $_POST['address'];
$Email=$_POST['email'];
$Phone=$_POST['phone'];
$Password= md5($_POST['password']);
$cpassword= md5($_POST['cpassword']);

if($Password == $cpassword) {
    $insert_query=" insert into customer(Name,Address,Email,Phone,Password)
            values('$Name','$Address','$Email','$Phone','$Password')";
            $res =  mysqli_query($con,$insert_query);
          if($res){ 
              echo "<script> alert('Registration Complete')</script>";
              $Name="";
              $Address= "";
              $Email="";
              $Phone="";
              $_POST['password']="";
              $_POST['cpassword']="";
          } else{
              echo "<script> alert('Something went wrong!Please try again.')</script>";
            }
        }
     else {
        echo "<script> alert('Password not matched' )</script>";
    }
}
 ?>
 
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
      <h1 class="main_heading">CUSTOMER REGISTER FORM</h1>
      <p>Required fields are followed by *</p>
        <h2>---Contact Information---</h2>
        <p>Name:* <input type="text" name="name" placeholder="XXXX YYYY" value="<?php echo $Name; ?>" required>
        </p>
        <p>
            Address:
            <br>
             <textarea name="address" id="address" cols="100" rows="8" placeholder="Enter your address"
              value="<?php echo $Address; ?>" ></textarea>
            </p>
        <p>Email:* <input type="email" name="email" id="email" value="<?php echo $Email; ?>" required></p>
        <p>Phone:* <input type="number" name="phone" id="phone" value="<?php echo $Phone; ?>" required></p>
        <p>Password*: <input type="password" name="password" id="password" placeholder="Enter new password"  value="<?php echo $_POST['password']; ?>" required></p>
        <p>Confirm password*: <input type="password" name="cpassword" id="password" placeholder="Enter password"    value="<?php echo $_POST['cpassword']; ?>" required></p>
        <input type="submit" name="submit" value="Register" >
    </form>
</div>
</body>
</html>



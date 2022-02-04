<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Form</title>
    <style>
        <style>
        *{
            box-sizing: border-box;
        }
     body{
font-family: Verdana, Geneva, Tahoma, sans-serif;
margin: 15px 30px;
font-size: 18px;
padding: 8px;
}
.container{
    background-color: #f2f2f2;
    padding: 5px 20px 15px 20px;
    border: 1px solid lightgray;
    border-radius: 4px;
}

input[type="text"],
input[type="email"],
input[type="number"],
input[type="password"],
select,
textarea{
    width: 80%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 5px;
    margin: 10px;
}


.main_heading{
    text-align: center;

}
input[type="submit"]
{
    background-color: green;
    font-size: 18px;
    text-align: center;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    width: 100%;
}
input[type="submit"]:hover{
    background-color: rgb(107, 216, 107);
}
        </style>
    </head>
<body>

<div class="container">
<form action="index.php" method="POST">
      <h1 class="main_heading">PAYMENT FORM</h1>
      <p>Required fields are followed by *</p>
        <h2>---Contact Information---</h2>
           <p>Name: * <input type="text" name="name" placeholder="XXXX YYYY" required></p>
        <p>
            Address:
            <br>
             <textarea name="address"  cols="100" rows="8" placeholder="Enter your address"></textarea>
            </p>
        <p>Email:* <input type="email" name="email"  required></p>
        <p>Pincode:* <input type="number" name="pincode"  required></p>
        <p>
            Card_number:* <input type="number" name="card_number"  required>
        </p>
        <p>
            Expiration_Date:* <input type="date" name="exp_date"  required>
        </p>
        <input type="submit" name="submit" value="Pay Now" >
    </form>
</div>
</body>
</html>

<?php

include 'connection.php';

if(isset($_POST['submit'])){
$Name= $_POST['name'];
$Address= $_POST['address'];
$Email=$_POST['email'];
$Pincode=$_POST['pincode'];
$Card_number=$_POST['card_number'];
$Expiration_Date=$_POST['exp_date'];

$insert_query=" insert into payment_form(Name,Address,Email,Pincode,Card_number,Expiration_Date)
      values('$Name','$Address','$Email','$Pincode','$Card_number','$Expiration_Date')";

    $res =  mysqli_query($con,$insert_query);

    if($res){
        ?>
        <script>
            alert("data inserted successfully");
            </script>
            <?php
    }else{

    ?>
        <script>
            alert("data not inserted successfully");
            </script>
            <?php
    }

}

?>
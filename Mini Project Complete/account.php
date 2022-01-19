<?php 
include 'connection1.php'; 

if(isset($_POST['submit'])){
$Status= $_POST['status'];
$Cust_id=$_POST['id'];
$Plan_no=$_POST['number'];

$insert_query=" insert into account(Status,Cust_id,Plan_no)
      values('$Status','$Cust_id','$Plan_no')";
    $res =  mysqli_query($con,$insert_query);
    if($res){
        ?>
        <script>
            alert("Account has been setup and plan has been chosen!");
            </script>
            <?php
    }else{
    ?>
        <script>
            alert("Woops! error.");
            </script>
            <?php
    }
}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="account.css">
    <title>ACCOUNT</title>
</head>
<body>
<div class="container">
<form action="account.php" method="POST">
      <h1 class="main_heading">FILL THE DETAILS GIVEN BELOW</h1>
      <p>Required fields are followed by *</p>
      <fieldset>
               <legend>Status</legend>
           <p>
           <select name="status" type="text" id="status" required>
           <option value="">---Select status---</option>
                <option value="1 month">one month</option>
                <option value="2 months">two months</option> 
                <option value="3 months">three months</option>
                <option value="4 months">four months</option>
                <option value="5 months">five months</option>
             </select>
           </p>
        </fieldset>
        <p>Your ID:* <input type="number" name="id" id="id"  required></p>
        <p>Plan number:* <input type="number" name="number" id="number"  required></p>
        <input type="submit" name="submit" value="Choose Plan" >
    </form>
</div>
</body>
</html>
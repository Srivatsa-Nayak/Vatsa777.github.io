<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="a1css.css">
    <title>Welcome</title>
</head>
<body>
<?php echo "<h1>Welcome " . $_SESSION['Name'] . "</h1>"; ?>
<?php
        include 'connection1.php';

        $condition="select * from admin";
        
        $conquery=mysqli_query($con,$condition);

        $result=mysqli_fetch_array($conquery);

        $Admin_id=$result['Admin_id'];

        $Name= $_SESSION['Name'];

        //Query to select the Entire table [MAIN QUERY]
        $selectquery=" select  *  from  admin where Name='$Name' " ; 



        //Executing the QUERY
        $query=mysqli_query($con,$selectquery);

        //Iterating through Entire table using while loop
        //Using MYSQLI Fetch fuction to show that table
        while($res=mysqli_fetch_array($query))
        {
     ?>

    <?php echo "<h4>Your Admin ID : " . $res['Admin_id'] . "</h4>"; ?>
            <?php
        }
        ?>
    <hr>
    <br>
    <br>
    <section>
    <a class="hello" href="Display.php" target="_blank">Display Customers</a>
</section>
<br>
<br>
<br>
<section >
    <a class="hello" href="fb.php" target="_blank">View feedback</a>
</section>
    <br>
    <br>
    <br>
    <section >
    <a class="hello" href="plans.php" target="_blank" >Add plans</a>
    </section>
    <br>
    <br>
    <br> 
    <section>
    <a class="hello" href="eplans.php" target="_blank" >Edit plans</a>
    </section>
    <br>
    <br>
    <br> 
    <section>
    <a class="hello" href="custaccount.php" target="_blank" >View customer account</a>
    </section>
    <br>
    <hr>
    <section>
    <a class="bye" href="logout1.php">Logout</a>
    </section>
</body>
</html>
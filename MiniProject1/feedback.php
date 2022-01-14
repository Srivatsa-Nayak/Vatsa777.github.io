<?php include 'connection1.php';

if(isset($_POST['submit'])){
$Review= $_POST['review'];
$Rating= $_POST['rating'];
$Feedback_type=$_POST['feedback_type'];

$insert_query=" insert into feedback(Review,Rating,Feedback_type,Cust_id,Admin_id)
      values('$Review','$Rating','$Feedback_type')";
    $res =  mysqli_query($con,$insert_query);
    if($res){
        ?>
        <script>
            alert("Feedback given successfully");
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
    <link rel="stylesheet" href="css2.css">
    <title>FEEDBACK</title>
</head>
<body>
<div class="container">
<form action="feedback.php" method="POST">
      <h1 class="main_heading">FEEDBACK FORM</h1>
      <p>Required fields are followed by *</p>
        <p>
            Review:
            <br>
             <textarea name="review" id="review" cols="50" rows="8" placeholder="Enter your review">
             </textarea>
            </p>
            <fieldset>
               <legend>RATING*</legend>
           <p>
               1 <input type="radio" name="rating" id="rating" required>
               2 <input type="radio" name="rating" id="rating" required>
               3 <input type="radio" name="rating" id="rating" required>
               4 <input type="radio" name="rating" id="rating" required>
               5 <input type="radio" name="rating" id="rating" required>
           </p>
        </fieldset>
        <p>Feedback_type*:
            <select name="feedback_type" id="feedback_type" required>
                <option value="">---Select feedback type---</option>
                <option value="positive">Positive</option>
                <option value="negaive">Negative</option>
            </select>
        </p>
        <input type="submit" name="submit" value="Give feedback" >
    </form>
</div>
</body>
</html>
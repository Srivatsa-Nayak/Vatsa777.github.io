<?php

$username = "root";
$password="";
$server ='localhost';
$db ='broadband';
$con = mysqli_connect($server,$username,$password,$db);
if($con){
    //echo "Connection successful";
    ?>
<script>
    alert('connection successful');
    </script>
    <?php

}
else{
    echo " connection unsuccessful";
    die("connection unsuccessful" .  mysqli_connect_error());
}
?>
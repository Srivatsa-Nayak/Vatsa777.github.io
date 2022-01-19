<?php

$user = "root";
$pass="";
$server ='localhost';
$db ='broadband';
$con = mysqli_connect($server,$user,$pass,$db);
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
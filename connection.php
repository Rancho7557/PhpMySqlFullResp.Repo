<?php

$username = 'ltm_30838358';
$password = 'Tushar@7557';
$server = 'sql204.ultimatefreehost.in';
$db = 'ltm_30838358_userinfodb';

$con = mysqli_connect($server,$username,$password,$db);
//db = mysqli_select_db($con, $databases);
if($con){
    //echo "Connection Successful";
    ?>
        <script>
            alert('Connection Successful');
        </script>
        <?php
}else{
    //echo "No connection";
    die("no connection with databases" . mysqli_connect_error());
}

?>
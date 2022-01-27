<?php
$con = mysqli_connect('sql204.ultimatefreehost.in','ltm_30838358','Tushar@7557','ltm_30838358_userinfodb');
if(!$con) {
    ?>
    <script type="text/javascript">
        alert('Error: Unable to connect to the database');
        </script>
        <?php
}

if(isset($_POST['submit'])) {
          
    $userf = $_POST['fname'];
    $userm = $_POST['mail'];
    $usern = $_POST['userno'];
    $userg = $_POST['gender'];
    $users = $_POST['typeuc'];
    date_default_timezone_set('Asia/Kolkata');
    $time=date('h:i:s a', time());

   // INSERT INTO `bkinfo`(`userid`, `ubkt`, `ufname`, `udob`, `umob`, `umail`, `ustate`, `ucont`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]')
   // $insertquery = " insert into bkinfo(ubkt, ufname, udob, umob, umail, ustate, ucont) values('$uactype', '$ufullname', '$udob', '$umob', '$umail', '$ustate', '$ucontry') ";
      $query = " insert into detailweb (webuser, webmail, webmob, webgender, websub, time) values ('$userf', '$userm', '$usern', '$userg', '$users', '$time') ";
     $iquery = mysqli_query($con,$query);

     if($iquery){
         ?>
         <script>
             alert("User Data Inserted Succesfully ......  Thank You!");
             window.location.replace("index.php");
             </script>
         <?php
     }else{
         ?>
         <script>
             alert("User Data Not Insert clearly ....Something Went false!");
         </script>
             <?php

     }

}

?>
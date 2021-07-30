<?php
   include("loginteacher.php");
   
   
   $user_check = $_SESSION['login_user1'];
   
   $ses_sql = mysqli_query($db,"SELECT tid from teacher where tid = '$user_check' ");
   $fetchlogin = mysqli_query($db,"SELECT * from teacher where tid='$user_check'");
  // $fetchdata = mysqli_query($db,"SELECT * from teacher where usn='$user_check'");
  // $fetchtotal = mysqli_query($db,"SELECT total from testtable where usn='$user_check'");


   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['tid'];
   
   if(!isset($_SESSION['login_user1'])){
      header("location:loginteacher.php");
      die();
   }
?>
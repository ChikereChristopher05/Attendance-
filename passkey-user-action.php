<?php
include_once("config.php");
$error = 0;
$error_msg = "";
if(isset($_POST['submit'])){   
    $pass = get_post('passkey', $db);
   $check = $db->query("SELECT * FROM passkey WHERE passkey = '$pass'");

   

   if($check->num_rows > 0){
      $check = $check -> fetch_assoc();
      $handle = $check['passkey'];

      if($handle !=  $pass){
         die(header("location:passkey-user.php"));
         $error = 1;
         $error_msg .= "Invalid passkey <br>";
      }
   }else{
      $error = 1;
      $error_msg .= "Passkey does not exit <br>";
   }
}

if($error == 0){
      header("Location:index.php");
   }else{
      set_alert($error_msg, "danger");
      header("Location: passkey-user.php");
   }
?>
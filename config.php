<?php
session_start();
$db = new mysqli("localhost", "root", "", "attendance");


function get_post($field = "", $db){
    if(isset($_POST[$field])){
        return mysqli_real_escape_string($db, trim(strip_tags($_POST[$field])));
    }else{
        return "";
    }
}

function set_alert($msg ="", $type ="danger"){
   $_SESSION['alert_msg']= $msg;
   $_SESSION['alert_type']= $type;
}

function get_alert(){
       if(isset($_SESSION['alert_msg'])){
    ?>
        
        <div class="alert alert-<?=$_SESSION['alert_type']?>" role="alert"><?=$_SESSION['alert_msg']?></div>
    <?php
    $_SESSION['alert_msg']="";
    $_SESSION['alert_type']="";
    }
}

function kick($db, $kick = 1){
    if($kick == 1){
        if(isset($_SESSION['uid'])){
            $uid = $_SESSION['uid'];
            $user = $db->query("SELECT * FROM users WHERE uid = $uid");
            if($user->num_rows > 0){
                $user = $user->fetch_assoc();
                return $user;
            }else{
                die(header("Location:authentication-login.php"));
            }
        }else{
            die(header("Location:authentication-login.php"));
        }
    }else{
         if(isset($_SESSION['uid'])){
            $uid = $_SESSION['uid'];
            $user = $db->query("SELECT * FROM users WHERE uid = $uid");
            if($user->num_rows > 0){
                $user = $user->fetch_assoc();
                return $user;
            }
        }
    }
}
?>
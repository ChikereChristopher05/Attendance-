<?php
include_once ("config.php");

$error = 0;
$error_msg = "";
if(isset($_POST['register'])){
    $email = get_post('email', $db);
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $error = 1;
        $error_msg .= "Invalid email <br>";
    }

    
    $password = get_post('password', $db);
    
 
    $check = $db->query("SELECT * FROM users WHERE email = '$email' ");
    if($check->num_rows > 0){
        $check = $check->fetch_assoc();
        $uid = $check['uid'];
        $type = $check['type'];
        if(!password_verify($password, $check['password'])){
            $error = 1;
            $error_msg .= "Invalid password! <br>";
        }
    }else{
        $error = 1;
        $error_msg .= "Account does not exist! <br>";
    }

        if($error == 0){
                $_SESSION['uid'] = $uid;
                header("Location:passkey-user.php");
            }else{
                set_alert($error_msg, "danger");
                header("Location:authentication-login.php");
            }
}  
?>
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

    $name = get_post('name', $db);
    $password = get_post('password', $db);
    $confirm_password = get_post('confirm_password', $db);
    $type = 5;
    
    if($password != $confirm_password){
        $error = 1;
        $error_msg .= "Passwords don't match <br>";
    }else{
        $password = password_hash($password, PASSWORD_DEFAULT);
    }
 
    $check = $db->query("SELECT * FROM users WHERE email = '$email' ");
    if($check->num_rows > 0){
        $error = 1;
        $error_msg .= "This email already exists <br>";
    }

    if($error == 0){
        $db->query("INSERT INTO users (email, name, password, type) VALUES ('$email', '$name', '$password', '$type')");
        set_alert("Registration Successful", "success");
        header("Location:authentication-login.php");
    }else{
        set_alert($error_msg, "danger");
        header("Location:authentication-register.php");
    }
}
?>
<?php
include_once("config.php");

if(isset($_POST['submit'])){

    function generate(){

        $gen = uniqid();
        return $gen;
    }
 
    echo generate();
    $passkey = generate();
    
}

$db->query("INSERT INTO passkey (passkey) VALUES ('$passkey')");

header("Location:admin.php");


?>
<?php
include_once("config.php");

if(isset($_GET['keyid'])){
    $keyid = $_GET['keyid'];

    $db->query("DELETE FROM passkey WHERE keyid = '$keyid' ");
    header("Location:admin.php");
}
?>
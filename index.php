<?php
include_once ('login.php');


require_once("includes/db.php");
require_once("model/func.php");

$auth_login = about_user($db);

if(isset($_SESSION['name'])){
    header('location: session.php');
}



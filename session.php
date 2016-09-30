<?php
session_start();
include 'includes/db.php';
include 'model/func.php';

if(isset($_GET['exit'])){
    unset($_SESSION['name']);
}
if (isset($_POST['user']) && isset($_POST['pass'])){
    $username = htmlspecialchars(trim($_POST["user"]));
    $password = md5(htmlspecialchars(trim($_POST["pass"])));
    $query = $db->query("SELECT 'name','password' FROM auth_login WHERE name = '$username' AND password = '$password'");
    $result = $query->fetch_assoc();
    if($result){
        $_SESSION['name'] = $username;
    } else echo "Incorrect login or password!";
}
if (isset($_SESSION['name'])){
    $name = $_SESSION['name'];
    $user_info = about_user($db);
    echo "Hello " . $name;
    $templ = $twig->loadTemplate('user_info.html');
    echo $templ->render(array('user'=> $user_info));
    echo "</br> <a class ='exit' href=\"?exit\">EXIT </a>";
}
if (!isset($_SESSION['name'])){
    $templ = $twig->loadTemplate('login_form.html');
    echo $templ->render(array());
}

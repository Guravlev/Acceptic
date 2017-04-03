<?php
session_start();
include 'includes/db.php';
if(isset($_SESSION['name'])){
    header('location: session.php');
}
if(isset($_POST["user"]) && $_POST["f_pass"] && isset($_POST["email"])){
    $username = htmlspecialchars(trim($_POST["user"]));
    $password = md5(htmlspecialchars(trim($_POST["f_pass"])));
    $email = htmlspecialchars(trim($_POST["email"]));
    include_once("includes/db.php");
    $query = $db->query("SELECT name FROM auth_login WHERE name = '$username'");
    $result = $query->fetch_assoc();
        if(!$result) {
            $insert = $db->query("INSERT INTO auth_login (name, password, email) VALUES ('$username', '$password', '$email')");
        } else echo "Login or password incorrect";
            if ($insert) {
                $_SESSION['name'] = $username;
//                $to = "";
//                $from = "";
//                $subject = "Mail from Acceptic";
//                $message = $username . "Thank you for registration!";
//                $headers = "From: $from\r\nReply-to: $from\r\nContent-type: 
//                text/plain; charset=utf-8\r\n";
//                mail($to, $subject, $message, $headers);
            }
//    if (mail == true){
//        echo "На вашу почту" . $email ." отправлено письмо!";
//    }else echo "Ошибка при отправке!";
}
if (!isset($_SESSION['name'])){
    $templ = $twig->loadTemplate('reg_form.html');
    echo $templ->render(array());
}
//qweqweqwe123123Sa

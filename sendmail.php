<?php

$myaddres = "valerieuskova@gmail.com";
$siteName = "Task Modal";
$pagetitle = "Заявка с сайта \"$siteName\"";

$name = trim($_POST["name"]);
$phone = trim($_POST["phone"]);
$email = trim($_POST["email"]);
$message = trim($_POST["message"]);

$name = htmlspecialchars($_POST["name"]);
$phone = htmlspecialchars($_POST["phone"]);
$email = htmlspecialchars($_POST["email"]);
$message = htmlspecialchars($_POST["message"]);

$mess = "Тема: $pagetitle \n\nName: $name \n\nPhone number: $phone \n\nE-mail: $email \n\nMessage: $message";


mail($myaddres, $pagetitle, $mess, "Content-type: text/plain; charset=\"utf-8\"\n From: $email");

?>
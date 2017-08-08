<?php
$name = htmlspecialchars($_POST['name']);
$lname = htmlspecialchars($_POST['lname']);
$web = htmlspecialchars($_POST['web']);
$desk = htmlspecialchars($_POST['desk']);

        $headers = "Тип сайта:" . ": " . $web;
        $subject = "Заказчик" . $name . " " . $lname;
        $message = $web . "! " . $desk;
        $to = "renger4596@gmail.com";
       if(mail( $to, $subject, $message, $headers)){
           echo "Сообщение отправленно";
       } else {
           echo "Сообщение не отпрвленно";
       }
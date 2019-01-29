<?php
    if(isset($_POST['submit'])){
        $name = $_post['name'];
        $email = $_post['email'];
        $stpos = $_post['stpos'];
        $endpos = $_post['endpos'];
        $message = $_post['message'];

        $mymail = "reques@travelville.com"
        $headers = "From: ".$email;
        $text = "You have recevied traveling form from ".$name.

        mail($mymail, $stpos, $endpos, $text);
        header("Location: form.php?mailsend");
    }
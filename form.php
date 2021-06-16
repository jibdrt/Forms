<?php
if(isset($_POST['user_mail'])&& !empty($_POST['user_mail'])){
    $email = $_POST['user_mail'];
    $objet = $_POST['message_topic'];
    $message = $_POST['user_message'];
    $recipient = 'lucie.b.bonjour@gmail.com';
    $send = 'message envoyé par '.$email.' : '.$message;
    $headerFields = array(
      "From: {$email}",
      "MIME-Version: 1.0",
      "Content-Type: text/html;charset=utf-8"
      );
    mail($recipient, $objet, $send, implode("\r\n", $headerFields));
    echo "message envoyé à ".$recipient;
}
else{
  echo 'erreur';
}
?>
<?php
if(isset($_POST['user_mail'])&& !empty($_POST['user_mail'])){

    $raison = $_POST['user_raison'];
    $name = $_POST['user_name'];
    $email = $_POST['user_mail'];
    $adress = $_POST['user_adress'];
    $start = $_POST['user_begin'];
    $end = $_POST['user_end'];
    $number = $_POST['user_number'];
    $language = $_POST['user_language'];
    $country = $_POST['user_country'];
    $theme = $_POST['user_theme'];
    $message = $_POST['user_message'];
    $objet = $_POST['user_topic'];
    $recipient = 'lucie.b.bonjour@gmail.com';

    $send = 'message envoyé par '.$raison.' : '.$name.'<br>'
    .$email.'<br>'.$adress.'<br>'.$start.'<br>'.$end.'<br>'.$number.'<br>'.$language.'<br>'.$country.'<br>'.$theme.'<br>'.$message;



    
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
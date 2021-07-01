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

    $send = 'Raison sociale : '.$raison.'<br>Nom : '.$name.'<br> E-mail : '
    .$email.'<br> Adresse postale : '.$adress.'<br> Entre le : '.$start.'<br> Et le : '.$end.'<br> Nombre de participants : '.$number.'<br> Nationalité : '.$language.'<br> Pays : '.$country.'<br> Thème souhaité : '.$theme.'<br> Message ajouté : '.$message;



    
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
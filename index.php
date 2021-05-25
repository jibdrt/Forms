<?php
if(isset($_POST['user_name'])) {
  $name = $_POST["user_name"];
  $mail = $_POST["user_mail"];
  $msg = $_POST["user_message"];
  echo 'je m\'appelle <span style="color:blue">' .$name. "<br>", "</span> mon e-mail est " .$mail . "<br>", "je vous dit ".$msg . " ";
  $current_date = date('Y');
$birth_date = $_POST['user_birthdate'];
$age = $current_date-$birth_date;
echo 'j\'ai '. $age. 'ans ';

    $humeur = $_POST["mood"];
    if ($humeur == 'bien'){
        echo 'je vais bien';
    }else{
        echo 'je vais super mal';
    };
    
}else{
  echo '♪';
};
?>  


<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="utf-8">
    <title>My test page</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

  <div id="global">
    <form action="index.php" method="post" id="global__form">
    <div>
        <label for="name">Nom :</label>
        <input type="text" value="" id="name" name="user_name">
    </div>
    <div>
        <label for="birth">Année de naissance :</label>
        <input type="birth" value="" id="mail" name="user_birthdate">
    </div>

    <div>
        <label for="mail">E-mail :</label>
        <input type="email" value="" id="mail" name="user_mail">
    </div>
    <div>
        <label for="humeur">humeur :</label>
        <input type="humeur" value="" id="humeur" name="mood">
    </div>


    <div>
        <label for="msg">Message :</label>
        <textarea id="msg" name="user_message"></textarea>
    </div>

    <div class="button">
    <button type="submit">Envoyer</button>
    </div>

  </body>
</html>
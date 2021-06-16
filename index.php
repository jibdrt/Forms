<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>PHP form</title>
  </head>
  <body>
    <form action="form.php" method="post"><!-- action définit l'URL où sont envoyées les données, l'attribut method définit la méthode php utilisée pour envoyer les données (get ou post)-->
        <fieldset>
        <legend>Formulaire</legend>
        <div>
            <label for="topic">Objet</label>
            <input type="text" id='topic' name='message_topic'>
        </div>
        <div>
            <label for="mail">Votre e-mail</label><br>
            <input type="email" id='mail' name='user_mail'>
        </div>
        <div>
            <label for="msg">Message</label>
            <textarea id="msg" name="user_message"></textarea>
        </div>
        <div class="button">
            <button type="reset">Remettre à zéro</button><br>
            <button type="submit">Envoyer</button>
            <!-- <input type="submit"> autre manière de crée un bouton -->
        </div>
        </fieldset>
</form>
  </body>
</html>
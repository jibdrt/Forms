<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>Domaine du Goût</title>
  </head>
  <body>
    <form id="glob" action="form.php" method="post"><!-- action définit l'URL où sont envoyées les données, l'attribut method définit la méthode php utilisée pour envoyer les données (get ou post)-->
        <fieldset>
        <legend>☻ Domaine du Goût ☻</legend>
        <div>
            <label for="input_raisonsociale">Raison sociale : </label>
            <input type="text" id='input_raisonsociale' name='user_raison'>
        </div>
        <br>
        <div>
            <label for="input_name">Nom Prénom : </label>
            <input type="text" id='input_name' name='user_name'>
        </div>
        <br>
        <div>
            <label for="input_mail">Adresse e-mail</label><br>
            <input type="email" id='input_mail' name='user_mail'>
        </div>
        <br>
        <div>
            <label for="input_adress">Adresse postale : </label>
            <input type="text" id='input_adress' name='user_adress'>
        </div>
        <br>
          <div>
            <div>
                <label for="input_begin">Entre le</label>
                <input type="date" id="input_begin" name="user_begin">
            </div>
            <br>
            <div>
                <label for="input_end">Et le</label>
                <input type="date" id="input_end" name="user_end">
            </div>
            <br>
        </div>
        <div>
            <label for="input_number">Nombre de participants : </label>
            <input type="text" id='input_number' name='user_number'>
        </div>
        <br>

        <div>
        <label for="input_language">Langue : </label>
            <select name="user_language" id="input_language" size="1">
              <option value="fr"> Français 
              <option value="en"> Anglais
              <option value="es"> Espagnol
              <option value="it"> Italien
            </select> 
        </div>
        <br>
        <div>
            <label for="input_country">Pays : </label>
            <input type="text" id='input_country' name='user_country'>
        </div>
        <br>
        <label for="input_theme">Thème : </label>
            <select name="user_theme" id="input_theme" size="1">
              <option value="wine"> Vins
              <option value="champagne"> Champagnes
              <option value="spirit"> Spiritueux
            </select> 
        </div>
        <br>
        <div>
            <label for="topic">Objet</label>
            <input type="text" id='topic' name='user_topic'>
        </div>
        <br>
        <div>
            <label for="msg">Message</label>
            <textarea id="msg" name="user_message"></textarea>
        </div>
        <br>
        <div class="button">
            <button type="reset">Remettre à zéro</button><br>
            <button type="submit">Envoyer</button>
            <!-- <input type="submit"> autre manière de crée un bouton -->
        </div>
        </fieldset>
</form>
  </body>
</html>
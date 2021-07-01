<?php
session_start();


    if(isset($_GET['id']) &&!empty($_GET['id'])) {
        require_once('db-connect.php');
        $id = strip_tags($_GET['id']);
        $sql ='SELECT*FROM `topic` WHERE `topic_id`=:id';
        $query = $db->prepare($sql);
        $query->bindValue(':id', $id, PDO::PARAM_STR);
        $query ->execute();
        $result = $query->fetch();

}







?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>viewtopic</title>
</head>
<body>

<h1><?=$result['topic_author']?></h1> <br>
<p>Le sujet porte sur : <?=$result['topic_object']?></p> <br>
<p>Message de l'auteur : <?=$result['topic_text']?></p> <br>



<form action="handler-message.php" method="post">




<div>
        <label for="message_author">Auteur</label>
        <input type="text" id='message_author' name='message_author'>
</div>




<div>
        <label for="message_text">Message</label>
        <input type="textarea" id='message_text' name='message_text'>
</div>
<br>
<input type="submit">
<br>
</form>




<br>
   <a href="index.php"><button>Retour</button></a>

</body>
</html>
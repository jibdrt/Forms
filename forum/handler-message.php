


<?php

if (isset($_POST["message-author"])&&!empty($_POST["message-author"])
&& isset($_POST["topic_id"])&&!empty($_POST["topic_id"])
&& isset($_POST["message-text"])&&!empty($_POST["message-text"])) {

   $message_author =strip_tags($_POST["message-author"]);
   $topic_id =strip_tags($_POST["topic_id"]);
   $message_text =strip_tags($_POST["message-text"]);
   
   require_once("db-connect.php");
   $sql="INSERT INTO message (`message_author`,`topic_id`,`message_text`) value (:message_author,:topic_id,:message_text)";
   $query = $conn ->prepare($sql);
   $query->bindValue(':message_author',$message_author, PDO::PARAM_STR);
   $query->bindValue(':topic_id',$topic_id, PDO::PARAM_STR);
   $query->bindValue(':message_text',$message_text, PDO::PARAM_STR);
   $query->execute();

   echo "<p>Message publié !</p>";
    echo '<a href="view-topic.php?id='.$topic_id.'"><button>Retour</button></a>';

}else{

    echo 'information manquante';
}

<?php
echo "<p>".$_POST["topic_author"]."</p>";
echo "<p>".$_POST["topic_object"]."</p>";
echo "<p>".$_POST["topic_text"]."</p>";



// Ceci est pour obliger les personnes qui remplissent le formulaire à remplir tout les champs
if (isset($_POST["topic_author"])&&!empty($_POST["topic_author"])
&& isset($_POST["topic_object"])&&!empty($_POST["topic_object"])
&& isset($_POST["topic_text"])&&!empty($_POST["topic_text"])) {

require_once("db-connect.php");
$topic_author = strip_tags($_POST['topic_author']);
$topic_object = strip_tags($_POST['topic_object']);
$topic_text = strip_tags($_POST['topic_text']);


$sql="INSERT INTO `topic`(topic_author, topic_object, topic_text) VALUES(:topic_author,:topic_object,:topic_text)";


$query = $db->prepare($sql);
$query->bindValue(':topic_author', $topic_author, PDO::PARAM_STR);
$query->bindValue(':topic_object', $topic_object, PDO::PARAM_STR);
$query->bindValue(':topic_text', $topic_text, PDO::PARAM_STR);
$query->execute();

?>

<a href="index.php"><button>Liste topics</button></a>
<?php
}else{
echo "Remplissez tous les champs";
}
?>

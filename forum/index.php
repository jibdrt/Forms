


<?php
require_once('db-connect.php');
$sql='SELECT * FROM topic';
$query = $db->prepare($sql);
$query ->execute();
$result = $query->fetchAll(PDO::FETCH_ASSOC);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>blog</title>
</head>
<body>
    <a href="form-topic.php"><button>Ajouter un topic</button></a><br>

<?php

foreach ($result as $topic) {
 ?>
 <a href="view-topic.php?id=<?=$topic['topic_id']?>"><br><?=$topic['topic_object']?></a>
    <?php
}
?><br>


</body>
</html>
<?php 
session_start();
include('header.php');
require_once('db-connect.php');
$sql='SELECT * FROM topics';
$query = $db->prepare($sql);
$query ->execute();
$topics = $query->fetchAll(PDO::FETCH_ASSOC);
?>

<?php
if(!empty($_SESSION['error'])){
    echo '<div class="alert alert-danger" role="alert">'.
    $_SESSION['error'].'</div>';
    $_SESSION['error']='';
} 

if(!empty($_SESSION['success'])) {
    echo '<div class="alert alert-success" role="alert">'.
    $_SESSION['success'].'</div>';
    $_SESSION['success']='';
}
?>

<div class="row">
<div class="col-4">Sujet : </div>
<div class="col-4">Auteur : </div>
<div class="col-4">Lien : </div>
<?php foreach($topics as $topic) {?>

    <div class="col-4"><?=$topic['topic_object']; ?></div>
    <div class="col-4"><?=$topic['topic_author']; ?></div>
    <div class="col-4"><a href="view-topic.php?id=<?=$topic['topic_id']; ?>">Voir la discussion</a></div>


<?php
}
?>
</div>

    <a href="form-topic.php"><button type="button" class="btn btn-outline-primary">Ajouter un sujet</button></a>

<?php include('footer.php');?>





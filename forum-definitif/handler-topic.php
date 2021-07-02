<?php
session_start();

if ($_POST) {
    if (
        isset($_POST['data_author'])&& !empty($_POST['data_author'])&&
        isset($_POST['data_object'])&& !empty($_POST['data_object'])&&
        isset($_POST['data_text'])&& !empty($_POST['data_text'])
    ) {

        $author = strip_tags($_POST['data_author']);
        $object = strip_tags($_POST['data_object']);
        $text = strip_tags($_POST['data_text']);
        require_once('db-connect.php');
        $sql='INSERT INTO `topics`(topic_author,topic_object,topic_text) VALUE (:topic_author,:topic_object,:topic_text)';
        $query=$db->prepare($sql);
        $query->bindValue(':topic_author',$author,PDO::PARAM_STR);
        $query->bindValue(':topic_object',$object,PDO::PARAM_STR);
        $query->bindValue(':topic_text',$text,PDO::PARAM_STR);
        $query->execute();
        require_once('close.php');
        $_SESSION['success']='Votre message a été publié!';
        header('Location:index.php');
    
    
    } else {
        $_SESSION['error']='il manque des informations!';
        header('Location:index.php');
    }
} else {
    $_SESSION['error']='vous devez publier quelque chose!';
    header('Location:index.php');
}



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>
    <form action="handler-topic.php" method="post">
    <fieldset>
    <legend>form</legend>
    <div>
        <label for="topic_author">Auteur</label>
        <input type="text" id="topic_author" name="topic_author">
    </div>
    <br>
    <div>
            <label for="topic_object">Sujet</label>
            <input type="text" id='topic_object' name='topic_object'>
    </div>
    </fieldset>
    <br>
    <div>
    <div>
            <label for="topic_text">Message</label>
            <input type="textarea" id='topic_mail' name='topic_text'>
    </div>
    <br>
    <input type="submit">
    <br>
    </form>
</body>
</html>
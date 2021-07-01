<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>
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
</body>
</html>
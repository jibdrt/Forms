<?php include('header.php');?>
    
    <fieldset>
    <legend>Votre sujet</legend>
    <form action="handler-topic.php" method="POST">
    <div>
            <label for="input_author">Auteur : </label>
            <input type="text" class="form-control" id="input_author" name="data_author">
    </div>
    <div>
            <label for="input_object">Sujet : </label>
            <input type="text" class="form-control" id="input_object" name="data_object">
    </div>
    <div>
            <label for="input_text">Votre message : </label>
            <textarea name="data_text" class="form-control" id="input_text"></textarea>
    </div>
    <div>
            <button class="btn btn-outline-primary" type="submit">envoyer</button>
    </div>
    </form>
    </fieldset>

<?php include('footer.php');?>
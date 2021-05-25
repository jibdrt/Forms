<?php

$name = $_POST["user_name"];
$mail = $_POST["user_mail"];
$msg = $_POST["user_message"];
echo 'je m\'appelle <span style="color:blue">' .$name. "<br>", "</span> mon e-mail est " .$mail . "<br>", "je vous dis ".$msg . " ";
$current_date = date('Y');
$birth_date = $_POST['user_birthdate'];
$age = $current_date-$birth_date;
echo 'j\'ai '. $age. 'ans ';

$humeur = $_POST["mood"];
if ($humeur == 'bien'){
    echo 'je vais bien';
}else{
    echo 'je vais super mal';
};

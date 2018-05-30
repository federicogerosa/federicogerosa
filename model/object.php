<?php
function esercenti()
{
$db = require('../database/db.php');
$q = "SELECT nome, email, id_amministratore FROM amministratore";
$r = @mysqli_query($db, $q); // Run the query.
return ($r);
}

function utenti()
{
$db = require('../database/db.php');
$q = "SELECT id_utente, email, punti_accumulati FROM utente";
$r = @mysqli_query($db, $q); // Run the query.
return ($r);
}
function questionari()
{
$db = require('../database/db.php');
$q = "SELECT id_questionario, id_amministratore, nome, punti, metodo_invio FROM questionario";
$r = @mysqli_query($db, $q); // Run the query.
return ($r);
}
function postAddEsercente() {
    $db = require('../database/db.php');
    $jsonObject = json_decode($_POST['esercente']);

    $email = $jsonObject->{'email'};
    $password = $jsonObject->{'password'};
    $nome = $jsonObject->{'nome'};

    $q = "INSERT INTO 'amministratore' (email, password, nome) VALUES ('$email', '$password', '$nome')";
    $r = @mysqli_query($db, $q);
    return($r);
}
?>

<?php 
//-----------------------------------------Functions to define method behavior---------------------------------//
function get($uri){
    $headers = apache_request_headers();
    switch ($uri) {
        case '/':
            index();
            break;
        case '/qualcosa':
            getQualcosa($headers);
            break;
        case '/listaEsercenti':
            getListaEsercenti($headers);
            break;
        case '/listaQuestionari':
            getListaQuestionari($headers);
            break;

        case '/aggiungiEsercente':
            getAggiungiEsercente($headers);
            break;
        case '/listaUtenti':
            getListaUtenti($headers);
            break;

        case '/dashboard':
            getDashboard($headers);
            break;
        default:
            notFound();
            break;
    }
}

function post($uri){
    $headers = apache_request_headers();
    switch ($uri) {
        case '/qualcosa':
            postQualcosa();
            break;

        case '/aggiungiEsercente':
            postAggiungiEsercente();
            break;
        
        default:
            notFound();
            break;
    }
}

function notFound(){
    http_response_code(404);
    echo "404 Classico Not Found";
}

function badRequest(){
    http_response_code(400);
    echo "Method not implemented";
}

//-----------------------------------------Functions to get the work done---------------------------------//

function getQualcosa($headers){
    //risultato della query
    // require /model/object.php
    
    //$r = getQualcosa();
    $r = "ekkelo"; //Risultato della query
    if(strpos($headers["Accept"], 'html') !== false){
        require __DIR__ . '/../view/qualcosa.php';
        visualizza($r);
    }else{
        echo $r;
    }

}

function getListaEsercenti($headers) {
    require __DIR__ . '/../model/object.php';
    $r = esercenti();
    if (strpos($headers["Accept"],"html")) {
        require __DIR__ . '/../view/visualizza.php';
        visualizzaEsercente($r);
    } else {
        echo $r;
    }
}
function getListaUtenti($headers) {
    require __DIR__ . '/../model/object.php';
    $r = utenti();
    if (strpos($headers["Accept"],"html")) {
        require __DIR__ . '/../view/visualizza.php';
        visualizzaUtente($r);
    } else {
        echo $r;
    }
}

function getListaQuestionari($headers) {
    require __DIR__ . '/../model/object.php';
    $r = questionari();
    if (strpos($headers["Accept"], "html")) {
        require __DIR__ . '/../view/visualizza.php';
        visualizzaQuestionario($r);
    } else {
        echo $r;
    }
}

function getDashboard($headers) {
    require __DIR__ . '/../model/object.php';
    $r = questionari();
    if (strpos($headers["Accept"], "html")) {
        require __DIR__ . '/../view/dashboardApertamente.php';
        dashboardina();
    } else {
        echo $r;
    }
}

function getAggiungiEsercente($headers) {
    require __DIR__ . '/../model/object.php';
    if (strpos($headers["Accept"], "html")) {
        require __DIR__ . '/../view/aggiungiEsercente.php';
        visualizzaAggiungiEsercente();
    } else {
        echo "errore";
    }
}

function getCreaQuestionario($headers) {
    require __DIR__ . '/../model/object.php';
    $r = getQuestionari();
    if (strpos($headers["Accept"], "html")) {
        require __DIR__ . '/../view/creaQuestionario.php';
        visualizzaCreaQuestionario($r);
    } else {
        echo $r;
    }
}

function postQualcosa(){
    var_dump($_POST);
    //Qui faccio qualcosa con il coso del post
    echo "<br/>ho fatto la post\n";
}

function postAggiungiEsercente() {
    require __DIR__ . '/../model/object.php';
    postAddEsercente($_POST);
}

?>
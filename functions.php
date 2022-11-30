<?php


if (isset($_GET['numero'])) {
    var_dump($_GET);
    $passCount = $_GET['numero'];
    $noDuplicati = $_GET['duplicati'] === '1' ? true : false;
    $characters = (isset($_GET['characters'])) ? $_GET['characters'] : []; //se è settato metti caratteri se no metti un array vuoto

    $response = generaPassword($passCount, $noDuplicati, $characters);

}
;

function generaPassword($passCount, $noDuplicati, $characters)
{
    $alfabeto = 'abcdefghilmnopqrstuvwxyz';
    $numeri = '0123456789';
    $simboli = '!?&%$<>/()[]{}@#';
    $password = '';
    $result = '';

}
/* faccio una stringa grande con tutti i caratteri  */
$tutticarat = $alfabeto . strtoupper($alfabeto) . $numeri . $simboli; //strtoupper ti rende i caratteri in maiuscolo

//verifichiamo che la lunghezza della password sia impostata e che sia superiore a 0
//empty() considera allo stesso modo sia '' che 0

if (empty($passCount)) {
    $result = 'nessun parametro valido inserito';
} else if ($passCount < 8 || $passCount > 30) {
    $result = 'Errore! la lunghezza della password deve essere compresa fra gli 8 e i 30 caratteri';
} else {
    while (strlen($password) < $passCount) {
        $index = randomNumber(0, strlen($tutticarat)); //STRLEN ti restituisce la lunghezza della stringa
        $char = $tutticarat[index];

        if ($noDuplicati || !str_contains($password, $char)) {
            //aggiungo il carattere alla password
            $password .= $char;
        }
    }
}

session_start();
$_SESSION['password'] = $password;
header('Location: ./index.php');

function randomNumber($min, $max)
{
    return rand($min, $max);
}
?>
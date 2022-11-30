<!-- 
Descrizione
Dobbiamo creare una pagina che permetta ai nostri utenti di utilizzare il nostro generatore di password (abbastanza) sicure.
L’esercizio è suddiviso in varie milestone ed è molto importante svilupparle in modo ordinato.
Milestone 1
-Creare un form che invii in GET la lunghezza(count) della password.
Una nostra funzione utilizzerà questo dato per generare una password casuale [RANDOM] (composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente.
Scriviamo tutto (logica e layout) in un unico file index.php
Milestone 2
Verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file functions.php che includeremo poi nella pagina principale
Milestone 3
Invece di visualizzare la password nella index, effettuare un redirect ad una pagina dedicata che tramite $_SESSION recupererà la password da mostrare all’utente.
Milestone 4 (BONUS)
Gestire ulteriori parametri per la password: quali caratteri usare fra numeri, lettere e simboli. Possono essere scelti singolarmente (es. solo numeri) oppure possono essere combinati fra loro (es. numeri e simboli, oppure tutti e tre insieme).
Dare all’utente anche la possibilità di permettere o meno la ripetizione di caratteri uguali -->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>password</title>
</head>

<body>
    <h1>Genera una password</h1>
    <form action="index.php" method="GET">
        <!-- il form ti da il punsante per hambuger menu -->
        <label for="text">Lunghezza password:</label>
        <input type="number" id="count" name="numero"></input>
        <button type="submit">invia</button>
        <button type="submit">cancella</button>
    </form>
    <div class="col-sm-5">
        <div class="form-check">
            <input type="radio" checked value="1">
            <label for="allow-duplicates" class="form-check-label">Si</label>
        </div>
        <div class="form-check">
            <input type="radio" checked value="0">
            <label for="allow-duplicates" class="form-check-label">No</label>
        </div>
    </div>

    <div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="S" id="characters" name="characters[]">
            <label class="form-check-label" for="characters">
                Simboli
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="N" id="characters" name="characters[]">
            <label class="form-check-label" for="characters">
                Numeri
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="L" id="characters" name="characters[]">
            <label class="form-check-label" for="characters">
                Lettere
            </label>
        </div>
    </div>





</body>

</html>



<?php


?>


<!-- funzione che usa rand() + strpos() 
-->

<!-- milestone 2 -->
include __DIR__ . '/php-strong-password-generator/functions.php';
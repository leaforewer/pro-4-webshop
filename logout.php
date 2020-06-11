<?php 
    // Maak de laden van het $_SESSION array leeg met unset 
    unset($_SESSION["id"]);
    unset($_SESSION["userrole"]);

    // Verwijder het bestand dat wordt gemaakt door de functie session_start() in c:/wamp64/tmp
    session_destroy();

    header("Location: ./index.php?content=message&alert=logout");
    ?>
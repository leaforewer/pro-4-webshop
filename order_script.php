<?php

// Eerst contact maken met de mysql-server
include("./connect_db.php");
// include("./sanitize.php");
include("./functions.php");

// De $_POST["email"] waarde schoonmaken
$postcode = sanitize($_POST["postcode"]);

// Maak de selectie query... 
$sql = "SELECT * FROM `orders` WHERE `postcode` = '{$postcode}'";
// echo $sql; exit();
// Vuur de query af op de database...
$result = mysqli_query($conn, $sql);

if (empty($postcode)) {
    header("Location: ./index.php?content=message&alert=no-postcode");
} else {
    // De functie mk_password_hash_from_microtime() maakt een password hash,
    // haalt de tijd en datum op op basis van de php-functie microtime()
    // en geeft dit terug in $array
    $first_n = sanitize($_POST["first_n"]);
    $last_n = sanitize($_POST["last_n"]);
    $straat = sanitize($_POST["straat"]);
    $stad = sanitize($_POST["stad"]);

    if (strlen($postcode) > 6) {
        header("Location: ./index.php?content=message&alert=no-enough-space-postcode");
    } else {



        $sql = "INSERT INTO `orders` (`order_id`,
                                    `first_n`,
                                    `last_n`,
                                    `straat`,
                                    `stad`,
                                    `postcode`)
                                    VALUES (NULL,
                    '$first_n', 
                    '$last_n', 
                    '$straat',
                    '$stad',
                    '$postcode');";
        // echo $sql;
        // exit();

        //  Vuur de query af op de tabel in de database
        $result = mysqli_query($conn, $sql);
        header("Location: ./index.php?content=message&alert=order-succesvol");
    }
}

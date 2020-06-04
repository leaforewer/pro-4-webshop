<?php

// var_dump($_POST);

if (empty($_POST["email"])) {
    header("Location: ./index.php?content=message&alert=no-email");
} elseif (empty($_POST["username"])) {
    header("Location: ./index.php?content=message&alert=no-username");
} elseif (empty($_POST["password"])) {
    header("Location: ./index.php?content=message&alert=no-password");
} else {
    // Eerst contact maken met de mysql-server
    include("./connect_db.php");
    include("./functions.php");

    // De $_POST["email"] waarde schoonmaken
    $email = sanitize($_POST["email"]);

    // Maak de selectie query... 
    $sql = "SELECT * FROM `users` WHERE `email` = '{$email}'";
    // echo $sql; exit();
    // Vuur de query af op de database...
    $result = mysqli_query($conn, $sql);
    // $record = mysqli_fetch_assoc($result);
    // var_dump($record); exit();
    // echo mysqli_num_rows($result);
    // Hoeveel records zijn er gevonden?
    if (mysqli_num_rows($result)) {
        header("Location: ./index.php?content=message&alert=emailexists");
    } else {
        $username = sanitize($_POST["username"]);
        $email = sanitize($_POST["email"]);
        
        $handteken = sanitize($_POST["handteken"]);
        $nationaliteit = sanitize($_POST["nationaliteit"]);

        // $password = "geheim";
        // $password_hash = password_hash($password, PASSWORD_BCRYPT);
        $array = mk_password_hash_from_microtime();

        $sql = "INSERT INTO `users` (`id`,
                               `username`, 
                               `email`, 
                               `password`,
                               `nationaliteit`,
                               `handteken`,
                               `activated`)
                      values (NULL,
                              '$username',
                              '$email',
                              '{$array["password_hash"]}',
                              '$nationaliteit',
                              '$handteken',
                              0)";
        // echo $query; exit();
        $result = mysqli_query($conn, $sql);

        // Deze functie 
        $id = mysqli_insert_id($conn);

        if ($result) {
            $to = $email;
            $subject = "Uw activatielink voor uw account van adhd.nl";
            $message = '<!DOCTYPE html>
                        <html lang="en">
                        <head>
                            <meta charset="UTF-8">
                            <meta name="viewport" content="width=device-width, initial-scale=1.0">
                            <title>Document</title>
                        </head>
                        <body> 
                            <h1>Beste gebruiker,</h1>
                            <p>U heeft zich zojuist geregistreerd op de site www.adhd.nl</p>
                            <p>Door het klikken op de onderstaande link voltooid u het activatieproces</p>
                            <p>Klik <a href="http://www.adhd.com/index.php?content=activate&id=' . $id . '&pwh=' . $password_hash . '">hier</a> voor activatie</p>
                            <p>Bedankt voor het registreren</p>
                            <p>Met vriendelijke groet,</p>
                            <p>fdfdffdf</p>
                            <p>CEO adhd.nl</p> 
                            <p>'. $array["date"] . ' - ' . $array["time"] . '<p>
                        </body>
                        </html>';
                            

            $headers = "MIME-Version: 1.0\r\n";
            $headers .= "Content-type: text/html; charset=UTF-8\r\n";
            $headers .= "From: admin@adhd.nl\r\n";
            $headers .= "Cc: hoofdinspecteur@belastingdienst.nl\r\n";
            $headers .= "Bcc: politie@politie.nl";
        
            mail($to, $subject, $message, $headers); 
            header("Location: ./index.php?content=message&alert=register-success"); 
        } else {
            header("Location: ./index.php?content=message&alert=insert-mail-error");
        }
        
        // Met de header functie kan je de browser naar een andere pagina laten gaan.
        header("Refresh: 3; index.php?content=users");
        // header("Refresh: 3; index.php?content=create_users");
    }
}


?>
<main class="container">
    <!-- jumbotron -->

    <div class="col-12">
        <div class="jumbotron jumbotron-fluid text-center" id="jumbotron1">
            <div class="container">
                <h1 class="display-4" id="Jumbotron_title">Uw gegevens zijn verwerkt!</h1>
            </div>
        </div>
    </div>

</main>
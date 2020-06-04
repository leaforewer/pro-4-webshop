<?php
    
    // var_dump($_POST);

    if ( empty($_POST["email"])) {
        header("Location: ./index.php?content=message&alert=no-email");
    } else {
        // Eerst contact maken met de mysql-server
        include("./connect_db.php");
        // include("./sanitize.php");
        include("./functions.php");

        // De $_POST["email"] waarde schoonmaken
        $email = sanitize($_POST["email"]);

        // Maak de selectie query... 
        $sql = "SELECT * FROM `register` WHERE `email` = '{$email}'";
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
            // De functie mk_password_hash_from_microtime() maakt een password hash,
            // haalt de tijd en datum op op basis van de php-functie microtime()
            // en geeft dit terug in $array
            $handteken = sanitize($_POST["handteken"]);
            $array = mk_password_hash_from_microtime();

            $sql = "INSERT INTO `register` (`id`,
                                            `email`,
                                            `password`,
                                            `handteken`,
                                            `userrole`,
                                            `activated`)
                                            VALUES (NULL,
                            '$email', 
                            '{$array["password_hash"]}', 
                            '$handteken',
                            'customer',
                             0);";
                            //  echo $sql; exit();

        //  Vuur de query af op de tabel in de database
        $result = mysqli_query($conn, $sql);

        // Deze functie 
        $id = mysqli_insert_id($conn);
        
        if ($result) {
            $to = $email;
            $subject = "Uw activatielink voor uw account van smartwatch.com";

            $message = '<!DOCTYPE html>
                        <html lang="en">
                        <head>
                            <meta charset="UTF-8">
                            <meta name="viewport" content="width=device-width, initial-scale=1.0">
                            <title>Document</title>
                        </head>
                        <body> 
                            <h1>Beste gebruiker,</h1>
                            <p>U heeft zich zojuist geregistreerd op de site www.smartwatch.com</p>
                            <p>Door het klikken op de onderstaande link voltooid u het activatieproces</p>
                            <p>Klik <a href="http://www.smartwatches.com/index.php?content=activate&id=' . $id . '&pwh=' . $array['password_hash'] . '">hier</a> voor activatie</p>
                            <p>Bedankt voor het registreren</p>
                            <p>Met vriendelijke groet,</p>
                            <p>Smartwatches</p> 
                            <p>'. $array["date"] . ' - ' . $array["time"] . '<p>
                        </body>
                        </html>';
                            

            $headers = "MIME-Version: 1.0\r\n";
            $headers .= "Content-type: text/html; charset=UTF-8\r\n";
            $headers .= "From: admin@smartwatches.com\r\n";
            $headers .= "Cc: hoofdinspecteur@belastingdienst.nl\r\n";
            $headers .= "Bcc: politie@politie.nl";
            $headers .= "Datum: '. $d . ' - ' . $t . '";

        
            mail($to, $subject, $message, $headers); 
            header("Location: ./index.php?content=message&alert=register-success"); 
        } else {
            header("Location: ./index.php?content=message&alert=insert-mail-error");
        }
        }
        

    }
?>
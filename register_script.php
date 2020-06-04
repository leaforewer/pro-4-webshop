<?php

if (empty($_POST["email"])) {
    header("Location: ./in1dex.php?content=message&alert=no-email");
} else {
    include("./connect_db.php");
    include("./functions.php");

    // De $_POST waarde schoonmaken     
    $email   = sanitize($_POST["email"]);

    // Maak de selectie query..
    $sql = "SELECT * FROM `register` WHERE `email` = '{$email}'";

    // echo $sql;

    // Vuur de query af op de database..
    $result = mysqli_query($conn, $sql);

    // Hoeveel records zijn er gevonden?

    if (mysqli_num_rows($result)) {
        header("Location: ./index.php?content=message&alert=emailexists");
    } else {

        $handteken = sanitize($_POST["handteken"]);
        $array = mk_password_hash_from_microtime();


        $sql = "INSERT INTO `register` 
                            (`id`, 
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

        // echo $sql;exit();
        $result = mysqli_query($conn, $sql);

        if ($result) {
            $id = mysqli_insert_id($conn);
            $to = $email;
            $subject = "Activatielink voor uw account van My Guitar Hero.com";
            // include("./alt-email.php");
            $msg = '<!DOCTYPE html>
                    <html lang="en">
            
                    <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>MyGuitarHero</title>
                    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
                    <style>
                        body {
                            background-color: #dddddd;
                            font-size: 1.3em;
                        }
                    </style>
                    </head>
                    <body>
                        <h2>' . $array["date"] . ' - ' . $array["time"] . '</h2>
                        <h1>Beste gebruiker, </h1>
                        <hr/>
                        <p>U heeft zich zojuist geregisteerd op de site www.myguitarhero.com</p>
                        <p>Door het klikken op de onderstaande voltooid u het activatieprocess</p>
                        <p>Klik <a href="http://www.myguitarhero.com/index.php?content=activate&id=' . $id . '&pwh=' . $array['password_hash'] . '">hier</a> voor activatie</p>
                        <p>Bedankt voor het registereren</p>
                        <p>Met vriendelijke groet,</p>
                        <p>A. Cemal Erdogan</p>
                        <p>CEO MyGuitarHero.com</p>
                    </body>
                    </html>';
            $headers =  "MIME-Version: 1.0\r\n";
            $headers .= "Content-type: text/html; charset-UTF-8\r\n";
            $headers .= "From: admin@myguitarhero.com\r\n";
            $headers .= "Cc: hoofdinspecteur@belanstingdienst.nl\r\n";
            $headers .= "Bcc: politie@politie.nl";
            mail($to, $subject, $msg, $headers);
            header("Location: ./index.php?content=message&alert=register-success");
        } else {
            header("Location: ./index.php?content=message&alert=insert-mail-error");
        }
    }
}

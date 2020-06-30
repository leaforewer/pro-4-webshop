
<?php 
include("./functions.php");

$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];
$to = 'admin@smartwatches.com';
$name = $_POST["name"];
$array = mk_password_hash_from_microtime();
if (empty($_POST["email"])) {
    header("Location: ./index.php?content=message&alert=no-email2");
}else {

    $realmessage = '<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contact Formulier</title>
    </head>
    <body> 
        <h4>Beste Klantservice,</h4>

        <p>' .$message .'</p>
        
        <h4>Met vriendelijke groet,</h4>

        <i>' . $name . '</i>
        <p>'. $array["date"] . ' - ' . $array["time"] . '<p>
    </body>
    </html>';
    
    
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=UTF-8\r\n";
    $headers .= "From: $email\r\n";
    $headers .= "Cc: elektronica.nl\r\n";
    $headers .= "Bcc: reparatie.nl";
    
    mail($to, $subject, $realmessage, $headers); 

    header("Location: ./index.php?content=message&alert=contact-success");
}


?>
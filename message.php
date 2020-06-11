<?php
 $alert = (isset($_GET["alert"]))? $_GET["alert"]: "default";
 $id = (isset($_GET["id"]))? $_GET["id"]: "";
 $pwh = (isset($_GET["pwh"]))? $_GET["pwh"]: "";
 $email = (isset($_GET["email"]))? $_GET["email"]: "";
 
    switch ($alert) {
        case 'no-email': 
            echo'<div class="alert alert-info w-50 mx-auto mt-5" name="alert" role="alert">
            <h4 class="alert-heading">Geen e-mailadres ingevuld!</h4>
            <p>U bent verplicht uw e-mailadres in te vullen voor het registreren. Na het registreren krijgt u een activatiemail binnen</p>
            <hr>
            <p class="mb-0">Probeer het opnieuw</p>
            </div>';
            header("Refresh: 3; ./index.php?content=register");
        break;
        case 'no-email2': 
            echo'<div class="alert alert-info w-50 mx-auto mt-5" name="alert" role="alert">
            <h4 class="alert-heading">Geen e-mailadres ingevuld!</h4>
            <p>U bent verplicht uw e-mailadres in te vullen voor het maken van contact met klantservice.</p>
            <hr>
            <p class="mb-0">Probeer het opnieuw</p>
            </div>';
            header("Refresh: 3; ./index.php?content=contact");
        break;
        case 'emailexists':
            echo'<div class="alert alert-danger w-50 mx-auto mt-5" name="alert" role="alert">
            <h4 class="alert-heading">E-mailadres bestaat al!</h4>
            <p>Het door u ingevulde e-mailadres bestaat al in de database. Kies om nieuw e-mailadres</p>
            <hr>
            <p class="mb-0">U wordt teruggestuurd naar de registratiepagina</p>
            </div>';
            header("Refresh: 3; ./index.php?content=register");
        break;
        case 'insert-mail-error':
            echo'<div class="alert alert-danger w-50 mx-auto mt-5" name="alert" role="alert">
            <h4 class="alert-heading">Het registratie proces is afgebroken!</h4>
            <p>Probeer het opnieuw. Wanneer u deze melding opnieuw krijgt, neem dan contact op met de databasebeheerder.</p>
            <hr>
            <p class="mb-0">U wordt teruggestuurd naar de registratiepagina</p>
            </div>';
            header("Refresh: 3; ./index.php?content=register");
        break;
        case 'register-success':
            // $time = 6;
            // $page = "inloggen";
            echo'<div class="alert alert-success w-50 mx-auto mt-5" name="alert" role="alert">
            <h4 class="alert-heading">Activatiemail verstuurd!</h4>
            <p>U bent succesvol geregistreerd in de database. U ontvangt een e-mail met daarin een activatielink. Na het klikken
            op de link kunt u een password instellen. </p>
            <hr>
            <p class="mb-0">U wordt teruggestuurd naar de inlogpagina</p>
            </div>';
            header("Refresh: 3; ./index.php?content=login");
        break;
        case 'contact-success':
            // $time = 6;
            // $page = "inloggen";
            echo'<div class="alert alert-success w-50 mx-auto mt-5" name="alert" role="alert">
            <h4 class="alert-heading">Uw opmerkingen zijn verstuurd!</h4>
            <p>U heeft succesvol uw opmerkingen gestuurd en in een paar dagen gekeken wordt naar uw mail. U ontvangt een e-mail met daarin een reactie van ons. </p>
            <p>Dank u wel voor uw feedback!</p>
            <hr>
            <p class="mb-0">U wordt teruggestuurd naar de homepagina</p>
            </div>';
            header("Refresh: 3; ./index.php?content=home");
        break;
        case 'hacker-alert':
            // $time = 6;
            // $page = "home";
            echo'<div class="alert alert-danger w-50 mx-auto mt-5" name="alert" role="alert">
            <h4 class="alert-heading">U heeft geen rechten op deze pagina!</h4>
            <p>U wordt teruggestuurd naar de homepagina</p>
            <hr>
            </div>';
            header("Refresh: 3; ./index.php?content=home");
        break;
        case 'password-empty':
            echo'<div class="alert alert-danger w-50 mx-auto mt-5" name="alert" role="alert">
            <h4 class="alert-heading">U heeft een van beide wachtwoordvelden niet ingevuld! Probeer het opnieuw.</h4>
            <p>U wordt teruggestuurd naar de wachtwoord pagina</p>
            <hr>
            </div>';
            header("Refresh: 3; ./index.php?content=activate&id=$id&pwh=$pwh");
        break;
        case 'nomatch-password':
            echo'<div class="alert alert-danger w-50 mx-auto mt-5" name="alert" role="alert">
            <h4 class="alert-heading">Uw ingevulde wachtwoorden zijn niet gelijk! Probeer het opnieuw.</h4>
            <p>U wordt teruggestuurd naar de wachtwoord pagina</p>
            <hr>
            </div>';
            header("Refresh: 3; ./index.php?content=activate&id=$id&pwh=$pwh");
        break;
        case 'no-id-pwh-match':
            echo'<div class="alert alert-danger w-50 mx-auto mt-5" name="alert" role="alert">
            <h4 class="alert-heading">U bent niet geregistreerd in de database, u wordt doorgestuurd naar de registratiepagina.</h4>
            <p>U wordt teruggestuurd naar de wachtwoord pagina</p>
            <hr>
            </div>';
            header("Refresh: 3; ./index.php?content=register");
        break;
        case 'update-success':
            echo'<div class="alert alert-success w-50 mx-auto mt-5" name="alert" role="alert">
            <h4 class="alert-heading">U bent succesvol geregistreerd, u wordt doorgestuurd naar de inlogpagina... </h4>
            <hr>
            </div>';
            header("Refresh: 3; ./index.php?content=login");
        break;
        case 'update-error':
            echo'<div class="alert alert-danger w-50 mx-auto mt-5" name="alert" role="alert">
            <h4 class="alert-heading">Het registratieproces is niet gelukt, kies een nieuw wachtwoord</h4>
            <hr>
            </div>';
            header("Refresh: 3; ./index.php?content=activate&id=$id&pwh=$pwh");
        break;
        case 'already-active':
            echo'<div class="alert alert-danger w-50 mx-auto mt-5" name="alert" role="alert">
            <h4 class="alert-heading">Uw account is al actief, log in met uw zelfgekozen wachtwoord en emailadres.</h4>
            <hr>
            </div>';
            header("Refresh: 3; ./index.php?content=login");
        break;
        case 'no-match-pwh':
            echo'<div class="alert alert-danger w-50 mx-auto mt-5" name="alert" role="alert">
            <h4 class="alert-heading">Uw activatielinkgegevens zijn niet correct, registreer opnieuw</h4>
            <hr>
            </div>';
            header("Refresh: 3; ./index.php?content=register");
        break;
        case 'loginform-empty':
            echo'<div class="alert alert-danger w-50 mx-auto mt-5" name="alert" role="alert">
            <h4 class="alert-heading">U heeft een beide velden niet ingevuld, probeer het opnieuw...</h4>
            <hr>
            </div>';
            header("Refresh: 3; ./index.php?content=login");
        break;
        case 'email-unknown':
            echo'<div class="alert alert-danger w-50 mx-auto mt-5" name="alert" role="alert">
            <h4 class="alert-heading">Het door u ingevulde e-mailadres is bij ons niet bekend, probeer het opnieuw...</h4>
            <hr>
            </div>';
            header("Refresh: 3; ./index.php?content=login");
        break;
        case 'not-activated':
            echo'<div class="alert alert-danger w-50 mx-auto mt-5" name="alert" role="alert">
            <h4 class="alert-heading">Uw accont is nog niet geactiveerd. Check uw e-mail <span class="badge badge-danger p-2">' . $email . '</span> voor het klikken op de activatielink...</h4>
            <hr>
            </div>';
            header("Refresh: 3; ./index.php?content=login");
        break;
        case 'no-pw-match':
            echo'<div class="alert alert-danger w-50 mx-auto mt-5" name="alert" role="alert">
            <h4 class="alert-heading">Uw ingevulde wachtwoord voor het e-mailadres <span class="badge badge-danger p-2">' . $email . '</span> is niet correct, probeer het opnieuw</h4>
            <hr>
            </div>';
            header("Refresh: 3; ./index.php?content=login");
        break;
        case 'logout':
            echo'<div class="alert alert-danger w-50 mx-auto mt-5" name="alert" role="alert">
            <h4 class="alert-heading">U bent uitgelogd, u wordt doorgestuurd naar de homepage...</h4>
            <hr>
            </div>';
            header("Refresh: 3; ./index.php?content=home");
        break;
        default:

    break;
    }

// if ($_GET["alert"] == 'no-email') {
//     echo'<div class="alert alert-info w-50 mx-auto mt-5" name="alert" role="alert">
//     <h4 class="alert-heading">Geen e-mailadres ingevuld!</h4>
//     <p>U bent verplicht uw e-mailadres in te vullen voor het registreren. Na het registreren krijgt u een activatiemail binnen</p>
//     <hr>
//     <p class="mb-0">Probeer het opnieuw</p>
//     </div>';
// } elseif ($_GET["alert"] == 'emailexists' {
//     echo'<div class="alert alert-danger w-50 mx-auto mt-5" name="alert" role="alert">
//     <h4 class="alert-heading">E-mailadres bestaat al!</h4>
//     <p>Het door u ingevulde e-mailadres bestaat al in de database. Kies om nieuw e-mailadres</p>
//     <hr>
//     <p class="mb-0">U wordt teruggestuurd naar de registratiepagina</p>
//     </div>';

// }

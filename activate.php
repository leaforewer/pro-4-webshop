<?php
if (!(isset ($_GET["content"]) && isset ($_GET["id"]) && isset ($_GET["pwh"]))){
    header("Location: ./index.php?content=message&alert=hacker-alert");
} 
?>

<div class="row">
    <div class="col-12" style="text-align: center;" id="activate">
        <h3>Kies een wachtwoord<h3>
    </div>
    <div class="col-6 " style="padding: 80px;">
        <form action="./index.php?content=activate_script" method="post">

            <div class="form-group">
                <label for="inputPassword">Wachtwoord</label>
                <input type="password" name="password" class="form-control" id="inputPassword" aria-describedby="passwordHelp" autofocus>
                <small id="passwordHelp" class="form-text text-muted">Kies een veilig wachtwoord</small>
            </div>
            <div class="form-group">
                <label for="inputPasswordCheck">Voer het wachtwoord opnieuw in</label>
                <input type="password" name="passwordCheck" class="form-control" id="inputPasswordCheck" aria-describedby="passwordHelp">
                <small id="passwordHelp" class="form-text text-muted">Controle voor het eerder gekozen wachtwoord</small>
            </div>
            <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
            <input type="hidden" name="pwh" value="<?php echo $_GET['pwh']; ?>">

            <div class="col-12" style="padding: 15px;">
                <button type="submit" class="btn btn-primary submit">Versturen</button>
            </div>
        </form>
    </div>
    <div class="col-6">
        <img src="./img/registreren.jpg" style="width: 450px; height: 450px; " alt="registreren">
        <!-- <img src="./img/registreren.jpg" style="width: 450px; height: 450px; " alt="registreren"> -->
    </div>
</div>
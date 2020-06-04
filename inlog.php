<div class="col-12">
        <h3>Inloggen<h3>
    </div>
    <div class="col-6 abc">
    <form action="./index.php?content=inloggen_script" method="post">
        <form action="" method="post">
            <div class="form-group">
                <label for="firstname">Gebruikersnaam</label>
                <input type="text" class="form-control" id="firstname" aria-describedby="firstnameHelp" name="firstname">
                <small id="fistnameHelp" class="form-text text-muted">*Vul hier uw gebruikersnaam in.</small>
            </div>
            <div class="form-group">
                <label for="infix">E-mailadres</label>
                <input type="text" class="form-control" id="infix" aria-describedby="infixHelp" name="infix">
                <small id="infixHelp" class="form-text text-muted">*Vul hier uw e-mailadres in.</small>
            </div>
            <div class="form-group">
                <label for="lastname">Wachtwoord</label>
                <input type="text" class="form-control" id="lastname" aria-describedby="lastnameHelp" name="lastname">
                <small id="lastnameHelp" class="form-text text-muted">*Vul hier uw wachtwoord in.</small>
            </div>
            <div class="col-12" style="padding: 15px;">
                <button type="submit" class="btn btn-primary submit">Versturen</button>
            </div>

        </form>
    </div>
    <div class="col-12" style="padding: 15px;">
        <div class="form-group">
            <span style="padding-right: 1px;"> Not a member?</span>
            <a class="link" href="./index.php?content=register">Create a new account!<span id="create" style="padding-right: 5px;"></span></a>
        </div>
    </div>
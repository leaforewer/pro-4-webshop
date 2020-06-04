<div class="row">
    <div class="col-12">
        <h3>Aanmelden</h3>
    </div>
    <div class="col-6 abc">
        <form action="./index.php?content=register_script" method="post">

            <div class="form-group">
                <label for="firstname">Gebruikersnaam</label>
                <input type="text" class="form-control" id="username" aria-describedby="usernameHelp" name="username">
                <small id="Help" class="form-text ">*Verplicht veld</small>
            </div>
            <div class="form-group">
                <label for="infix">E-mailadres</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
                <small id="Help" class="form-text ">*Verplicht veld</small>
            </div>
            
            <div class="form-group">

                <input type="hidden" value="No" class="form-control" id="handtekenHidden" aria-describedby="handtekenHelp" name="handteken">
                <div style="font-size: 14px; padding-left: 15px;">
                    <p>
                        <input  class="form-check-input" type="checkbox" value="Yes" class="form-control" id="handteken" aria-describedby="handtekenHelp" name="handteken">
                        Ik stem in met de <a href="/files/Algemene_voorwaarden_123" download="Algemene voorwaarden.pdf">voorwaarden en bepalingen</a>
                    </p>
                </div>
                <small id="Help" class="form-text text-muted">*Selecteer hier uw forum handtekening.</small>
            </div>
            <div class="col-12" style="padding: 15px;">
                <button type="submit" class="btn btn-primary submit">Versturen</button>
            </div>
        </form>
    </div>
    <div class="col-6">
        <img src="./img/registreren1.png" style="width: 450px; height: 450px; " alt="aanmelden">
    </div>
</div>

<div class="row">
    <div class="col-3"></div>
    <div class="col-6">
        <h3>Aanmelden</h3>
    </div>
</div>
    
<div class="row">
    <div class="col-3"></div>
    <div class="col-6 abc">
        <form action="./index.php?content=register_script" method="post">
            <div class="form-group">
                <label for="firstname">Gebruikersnaam</label>
                <input type="text" class="form-control" id="username" aria-describedby="usernameHelp" name="username" autofocus>
                <small id="Help" class="form-text " style="color: black;">*Verplicht veld</small>
            </div>
            <div class="form-group">
                <label for="infix">E-mailadres</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
                <small id="Help" class="form-text " style="color: black;">*Verplicht veld</small>
            </div>
            
            <div class="form-group">
                <input type="hidden" value="No" class="form-control" id="handtekenHidden" aria-describedby="handtekenHelp" name="handteken">
                <div id="voorwaarden">
                    <p>
                        <input  class="form-check-input" type="checkbox" value="Yes" class="form-control" id="handteken" aria-describedby="handtekenHelp" name="handteken">
                        Ik accepteer de <a href="/files/Algemene_voorwaarden_123" download="Algemene voorwaarden.pdf">voorwaarden en bepalingen</a>
                    </p>
                </div>
                <small id="Help" class="form-text text-muted">*Selecteer hier uw forum handtekening.</small>
            </div>

            <div class="col-12" id="registerButton">
                <button type="submit" class="btn btn-primary">versturen</button>
            </div>
        </form>
    </div>

</div>
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
                <label for="lastname">Wachtwoord</label>
                <input type="password" class="form-control" id="password" aria-describedby="passwordHelp" name="password">
                <small id="Help" class="form-text ">*Verplicht veld</small>
            </div>
            <div class="form-group">
                <label style="padding-right: 350px; padding-bottom: 5px;" for="lastname">Nationaliteit</label>
                <select id="nationaliteit" name="nationaliteit" style="padding-left: 30px; padding-top: 2px; padding-bottom: 2px;">
                    <option value='belgiscsh'>Belgisch</option>
                    <option value='nederlands'>Nederlands</option>
                    <option value='chinees'>Chinees</option>
                    <option value='italiaans'>Italiaans</option>
                    <option value='indiaans'>Indiaas</option>
                    <option value='spaans'>Spaans</option>
                    <option value='duits'>Duits</option>
                    <option value='amerikaans'>Amerikaans</option>
                    <option value='turks'>Turks</option>
                    <option value='grieks'>Grieks</option>
                    <option value='frans'>Frans</option>
                    <option value='iraans'>Iraans</option>
                    <option value='brits'>Brits</option>
                    <option value='russisch'>Russisch</option>
                    <option value='pools'>Pools</option>
                    <option value='portugees'>Portugees</option>
                    <option value='braziliaans'>Braziliaans</option>
                    <option value='vietnaamees'>Vietnaamees</option>
                    <option value='roemeens'>Roemeens</option>
                    <option value='egyptisch'>Egyptisch</option>
                    <option value='taiwanees'>Taiwanees</option>
                    <option value='canadees'>Canadees</option>
                    <option value='colombiaans'>Colombiaans</option>
                    <option value='oekraniens'>Oekraniens</option>
                    <option value='pakistaans'>Pakistaans</option>
                    <option value='japans'>Japans</option>
                    <option value='mexicaans'>Mexicaans</option>
                    <option value='koreaans'>Koreaans</option>
                    <option value='filippijns'>Filippijns</option>
                    <option value='marokkaans'>Marokkaans</option>
                    <option value='zweeds'>Zweeds</option>
                    <option value='syrisch'>Syrisch</option>
                    <option value='bulgaars'>Bulgaars</option>
                    <option value='australisch'>Australisch</option>
                    <option value='fins'>Fins</option>
                    <option value='Noors'>Noors</option>
                    <option value='zwitsers'>Zwitsers</option>
                    <option value='luxemburgs'>Luxemburgs</option>
                    <option value='iraaks'>Iraaks</option>
                </select>
                <small id="Help" class="form-text text-muted">*Vul hier uw Nationaliteit in.</small>
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

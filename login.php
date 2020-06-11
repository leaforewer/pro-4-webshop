<div class="row">
    <div class="col-3"></div>
    <div class="col-6">
        <h3>Inloggen<h3>
    </div>   
</div>

<div class="row">
    <div class="col-3"></div>
    <div class="col-6 abc">
        <form action="./index.php?content=login_script" method="post">        
            <div class="form-group">
                <label for="infix">E-mailadres</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
                <small id="emailHelp" class="form-text text-muted">*Vul hier uw e-mailadres in.</small>
            </div>
            <div class="form-group">
                <label for="lastname">Wachtwoord</label>
                <input type="password" class="form-control" id="password" aria-describedby="passwordHelp" name="password">
                <small id="passwordHelp" class="form-text text-muted">*Vul hier uw wachtwoord in.</small>
            </div>                       
        </form>
         
        <div class="row">
            <div class="col-12" id="loginButton">
                <button type="button" class="btn btn-primary">versturen</button>
            </div>
        </div>           
    </div>
    
</div>
 
<div class="row">
    <div class="col-3"></div>
    <div class="col-6" id="notMember">
        <div class="form-group">
            <span style="padding-right: 1px;"> Not a member?</span>
            <a class="link" href="./index.php?content=register">Create a new account!<span id="create"></span></a>
        </div>
    </div>
</div>

<div class="col-12">
        <h3>Inloggen<h3>
    </div>
    <div class="col-6 abc">
    <form action="./index.php?content=login_script" method="post">
        <form action="" method="post">
            <div class="form-group">
                <label for="infix">E-mailadres</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
                <small id="emailHelp" class="form-text text-muted">Vul hier uw e-mailadres in.</small>
            </div>
            <div class="form-group">
                <label for="lastname">Wachtwoord</label>
                <input type="password" class="form-control" id="password" aria-describedby="passwordHelp" name="password">
                <small id="passwordHelp" class="form-text text-muted">*Vul hier uw wachtwoord in.</small>
            </div> 
            
            <div class="col-12" id="loginButton">                
                <button type="button" class="btn btn-primary">versturen</button>                              
            </div>                      
        </form>        
            
                   
    </div>
    <div class="col-12" style="padding: 15px;">
        <div class="form-group">
            <span style="padding-right: 1px;"> Not a member?</span>
            <a class="link" href="./index.php?content=register">Create a new account!<span id="create" style="padding-right: 5px;"></span></a>
        </div>
    </div>
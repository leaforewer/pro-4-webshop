<?php
$id = $_GET["id"];

include("./connect_db.php");

$sql = "SELECT * FROM `users` WHERE `id` = $id";

$result = mysqli_query($conn, $sql);

$record = mysqli_fetch_assoc($result);

echo "<pre>";
// var_dump($record);
echo "</pre>";
?>

<body>
    <div class="row">
        <div class="col-12">
            <h3>Aanmelden</h3>
        </div>
        <div class="col-6 abc">
            <form action="./index.php?content=update_script_users" method="post">

                <div class="form-group">
                    <label for="firstname">Gebruikersnaam</label>
                    <input type="text" class="form-control" id="username" aria-describedby="usernameHelp" name="username" value="<?php echo $record["username"]; ?>">
                    <small id="Help" class="form-text ">*Verplicht veld</small>
                </div>
                <div class="form-group">
                    <label for="infix">E-mailadres</label>
                    <input type="text" class="form-control" id="email" aria-describedby="emailHelp" name="email" value="<?php echo $record["email"]; ?>">
                    <small id="Help" class="form-text ">*Verplicht veld</small>
                </div>
                <div class="form-group">
                    <label for="lastname">Wachtwoord</label>
                    <input type="text" class="form-control" id="password" aria-describedby="passwordHelp" name="password" value="<?php echo $record["password"]; ?>">
                    <small id="Help" class="form-text ">*Verplicht veld</small>
                </div>
                <div class="form-group">
                    <label for="lastname">Handtekening</label>
                    <input type="text" class="form-control" id="handteken" aria-describedby="handtekenHelp" name="handteken" value="<?php echo $record["handteken"]; ?>">
                    <small id="Help" class="form-text text-muted">*Vul hier uw forum handtekening in.</small>
                </div>
                <div class="form-group">
                    <label for="lastname">Nationaliteit</label>
                    <input type="text" class="form-control" id="nationaliteit" aria-describedby="nationaliteitHelp" name="nationaliteit" value="<?php echo $record["nationaliteit"]; ?>">
                    <small id="Help" class="form-text text-muted">*Vul hier uw Nationaliteit in.</small>
                </div>
                <div class="col-12" style="padding: 15px;">
                    <input type="hidden" value="<?php echo $id; ?>" name="id">
                    <button type="submit" class="btn btn-primary submit">Versturen</button>
                </div>
            </form>
        </div>
        <div class="col-6">
            <img src="./img/registreren.jpg" style="width: 450px; height: 450px; " alt="aanmelden">
        </div>
    </div>
</body>
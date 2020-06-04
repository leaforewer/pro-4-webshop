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
                <label for="infix">E-mailadres</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
                <small id="Help" class="form-text ">*Verplicht veld</small>
            </div>
            <div class="col-12" style="padding: 15px;">
                <button type="submit" class="btn btn-primary submit">Versturen</button>
            </div>
            </form>
        </div>
        <div class="col-6">
            <img src="./img/registreren.jpg" style="width: 450px; height: 450px; " alt="aanmelden">
        </div>
    </div>
</body>
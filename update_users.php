<?php
$id = $_GET["id"];

include("./connect_db.php");

$sql = "SELECT * FROM `register` WHERE `id` = $id";

$result = mysqli_query($conn, $sql);

$record = mysqli_fetch_assoc($result);

echo "<pre>";
// var_dump($record);
echo "</pre>";
?>

<body style="background-color: gray;">
    <div class="row">
        <div class="col-4 offset-4">
            <h3 style="padding-top: 30px;">Verander User Email & Role</h3>

            <br /><br />
        </div>
        <div style="padding-top: 30px;background-color: #262935;" class="col-4 offset-4 abc">
            <form action="./index.php?content=update_script_users" method="post">
                <div class="form-group">
                    <label style="color: whitesmoke;" for="infix">E-mailadres</label>
                    <input type="text" class="form-control" id="email" aria-describedby="emailHelp" name="email" value="<?php echo $record["email"]; ?>">
                    <small style="padding-top: 10px;" id="Help" class="form-text ">*Verplicht veld</small>
                </div>
                <div class="form-group">
                    <input type="hidden" class="form-control disabled" id="password" aria-describedby="passwordHelp" name="password" value="<?php echo $record["password"]; ?>">
                </div>
                <div class="form-group">
                    <input type="hidden" id="handteken" aria-describedby="handtekenHelp" name="handteken" value="<?php echo $record["handteken"]; ?>">
                </div>
                <div class="form-group">
                    <label style=" color: whitesmoke;" for="userrole">UserRole</label><br />
                    <select id="userrole" name="userrole" style="padding-left: 5px; padding-top: 2px; padding-bottom: 2px;">
                        <option value='customer'>Customer</option>
                        <option value='admin'>Admin</option>
                        <option value='root'>Root</option>
                    </select>
                    <small style="padding-top: 10px;" id="Help" class="form-text ">*Selecteer role</small>
                </div>
                <div class="col-12" style="padding-left: 475px; padding-top: 40px; padding-bottom: 40px;">
                    <input type="hidden" value="<?php echo $record["activated"]; ?>" name="activated">
                    <input type="hidden" value="<?php echo $id; ?>" name="id">
                    <button type="submit" class="btn btn-warning ">Submit</button>
                </div>
            </form>

        </div>
</body>
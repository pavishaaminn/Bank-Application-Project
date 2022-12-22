<?php
require(__DIR__ . "/../../partials/nav.php");

if (is_logged_in(true)) {
}

$id = get_user_id();
$db = getDB();

try{
    if(isset($_POST["choose_account"])){
        $acc = se($_POST, "choose_account", "", false);

        $db = getDB();
        $stmt = $db->prepare("SELECT balance FROM Accounts WHERE id = :accsource");
        $stmt->execute([":accsource"=>$acc]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        $balance = (int)$result['balance'];

        switch($balance){
            case $balance > 0:
                flash("There is still a balance, please transfer/withdraw all funds before closing.");
                break;
            case $balance < 0:
                flash("Account under 0, please deposit $" . $balance . " to close account");
                break;
            case $balance = 0:
                accountsClose($acc);   
                break;
        }
        header( "refresh:2;url=accountsOwn.php" );
    }
    $stmt = $db->prepare("SELECT id, account_number, balance FROM Accounts WHERE user_id = :user_id");
    $accounts = [];
    $stmt->execute([":user_id"=>$id]);
    $r = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $accounts = $r;
} 
catch(PDOException){
    error_log(var_export($e, true));
}  
?>

<link rel="stylesheet" href="styles.css">
<h1>Close an Account</h1>

<div class ="container-fluid">
    <form onsubmit="return validate(this)" method="POST">

        <div class="mb-3">
            <label class="form-label" for="account">Choose Account</label>
            <select id="choose_account" name="choose_account">
                <?php foreach($accounts as $account_number): ?>
                <option value ="<?php se($account_number['id']) ?>" >
                <?php se($account_number['account_number']); se(" $" . $account_number['balance']); endforeach; ?>
            </option>
            </select>
        </div>
        <input type="submit" class="mt-3 btn btn-primary" value="Submit">
    </form>
</div>
<a href= "dashboard.php" class="sideP">Go Back</a>

<script>
    function validate(form){
        return true;
    }
</script>

<?php
require(__DIR__ . "/../../partials/flash.php");
?>
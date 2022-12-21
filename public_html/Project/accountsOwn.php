<?php
require(__DIR__ . "/../../partials/nav.php");
?>
<h1>Home</h1>
<?php

if (is_logged_in(true)) {
}

// $id = get_user_id();
// $db = getDB();

// $query = "SELECT * FROM Accounts WHERE user_id = $id";
// $stmt = $db->prepare($query);
//$stmt->execute();

$id = get_user_id();
$db = getDB();

$stmt = $db->prepare("SELECT * FROM Accounts where user_id = :user_id");
$accounts = [];

try{
  $stmt->execute([":user_id"=>$id]);
  $r = $stmt->fetchAll(PDO::FETCH_ASSOC);
  if($r){ ?>

<link rel="stylesheet" href="styles.css">

<table class='accounts' cellspacing='0'>
    <tr>
        <td class='hed'>All Accounts</td>
    </tr>
    <tr>
        <th>Account Number</th>
        <th>Balance</th>
        <th>Account Type</th>
    </tr>

<?php  
    $accounts = $r;
    $i = 0;
    foreach($accounts as $row){
        $acc = $row['account_number'];
        $bal = $row['balance'];
        $created = $row['created'];
        $acctype = $row['account_type'];
        echo "<tr> \n";
        echo "<td> <a href= 'accountsTransaction.php?account_number=$acc&balance=$bal&account_type=$acctype&created=$created'>" . print_r($row['account_number'], true) . "</a></td>";
        echo "<td>" .  print_r($row['balance'], true) . "</td>";
        echo "<td>" .  print_r($row['account_type'], true) . "</td>";
        echo "</tr>";

        if($i++ > 5) break;
    }
  }
}
catch(PDOException $e){
  error_log(var_export($e, true));
}

?>

</table>

<?php
require(__DIR__ . "/../../partials/flash.php");
?>
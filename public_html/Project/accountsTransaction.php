<?php
require(__DIR__ . "/../../partials/nav.php");
?>
<h1>Account Information</h1>
<?php

if (is_logged_in(true)) {
}


$id = get_user_id();
$db = getDB();

// we want AccountSrc (##) to equal account (00000##)
$stmt = $db->prepare("SELECT A.account_number AS AccountSrc, B.account_number AS AccountDest,
                    BalanceChange, TransactionType, Memo, ExpectedTotal
                    FROM Transactions
                    JOIN Accounts A ON Transactions.AccountSrc = A.id
                    JOIN Accounts B ON Transactions.AccountDest = B.id
                    WHERE AccountSrc = :acc LIMIT 10");
$transactions = [];

try{
  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
  if($result){ ?>

<link rel="stylesheet" href="styles.css">

<h3>Account Number: <?=$acc?> </h3> 
<h3>Account Balance: $<?=$bal?> </h3>
<h3>Account Type: <?=$acctype?> </h3>
<h3>Account Created: <?=$created?> </h3>

<table border='4' class='accounts' cellspacing='0'>
    <tr>
        <td class='hed' colspan='8' align="center">Transaction History</td>
    </tr>
    <tr>
        <th>AccountSrc</th>
        <th>AccountDest</th>
        <th>BalanceChange</th>
        <th>TransactionType</th>
        <th>Memo</th>
        <th>ExpectedTotal</th>
    </tr>

<?php    
    $transactions = $result;
    foreach($transactions as $row){
        $acc = $row['account_number'];
        $bal = $row['balance'];
        $acctype = $row['account_type'];
        $created = $row['created'];
        $stmt->execute([":account_type"=>$acc]);
        echo "<tr> \n";
        echo "<td>" . print_r($row['AccountSrc'], true) . "</td>";
        echo "<td>" .  print_r($row['AccountDest'], true) . "</td>";
        echo "<td>" .  print_r($row['BalanceChange'], true) . "</td>";
        echo "<td>" .  print_r($row['TransactionType'], true) . "</td>";
        echo "<td>" .  print_r($row['Memo'], true) . "</td>";
        echo "<td>" .  print_r($row['ExpectedTotal'], true) . "</td>";
        echo "</tr>";
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
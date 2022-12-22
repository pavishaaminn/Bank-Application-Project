<?php
function accounts_transaction($cashflow, $transaction_type, $accountsrc, $accountdest, $memo = ""){
    if($cashflow > 0){

        $query1 = "SELECT balance FROM Accounts WHERE id = :accountsrc";
        $db = getDB();
        $stmt = $db->prepare($query1);
        $stmt->execute([":accountsrc" => $accountsrc]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        $total1 = (int)$result["balance"];

        $acc1change = $cashflow*-1;
        $expectedtotal1 = $total1 + $acc1change;

        $query2 = "SELECT balance FROM Accounts WHERE id = :accountdest";
        $db = getDB();
        $stmt = $db->prepare($query2);
        $stmt->execute([":accountdest" => $accountdest]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        $total2 = (int)$result["balance"];

        $acc2change = $cashflow;
        $expectedtotal2 = $total2 + $acc2change;

        $query = "INSERT INTO Transactions (AccountSrc, AccountDest, BalanceChange, TransactionType, Memo, ExpectedTotal)
        VALUES (:acc1, :accd1, :acc1change, :reason, :memo, :expectedtotal1),
        (:acc2, :accd2, :acc2change, :reason, :memo, :expectedtotal2)";
        $params[":acc1"] = $accountsrc;
        $params[":accd1"] = $accountdest;
        $params[":reason" ] = $transaction_type;
        $params[":memo" ] = $memo;
        $params[":acc1change"] = $acc1change;
        $params[":expectedtotal1"] = $expectedtotal1;
        $params[":acc2"] = $accountdest;
        $params[":accd2" ] = $accountsrc;
        $params[":acc2change"] = $acc2change;
        $params[":expectedtotal2"] = $expectedtotal2;
        $db = getDB();
        $stmt = $db->prepare($query);
        try{
            $stmt->execute($params);
            accounts_balance($accountsrc);
            accounts_balance($accountdest);
            flash("Transaction Successful!");

        } catch (PDOException $e){
            error_log(var_export($e, true));
        }
    }
}
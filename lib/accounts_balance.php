<?php 
function accounts_balance($account_id){
    if(is_logged_in(true)){
        $query = "UPDATE Accounts set balance = (SELECT IFNULL(SUM(BalanceChange),0)
        from Transactions WHERE AccountSrc = :accountsrc WHERE id = :accountsrc";
        $db = getDB();
        $stmt = $db -> prepare($query);
        try{
            $stmt->execute([":accountsrc" => $account_id]);
        } catch (PDOException $e){
            error_log(var_export($e, true));
        }
    }
}
<?php
function accounts_creating(){
    if(isset($_POST["account_type"]) && isset($_POST["deposit"])){
    $type = se($_POST, "account_type", "", false);
    $deposit = se($_POST, "deposit", 0, false);
    $transaction_type = "deposit";

        if(!empty($type) && $deposit >= 5){
            $query = "INSERT INTO Accounts (user_id, account_type) VALUES (:user_id, :account_type)";
            $db = getDB();
            $stmt = $db->prepare($query);
            $stmt->execute([":user_id"=>get_user_id(), ":account_type"=>$type]);

            $id = $db->lastInsertId();
            $account_number = str_pad($id, 12, "0", STR_PAD_LEFT);
            $query2 = "UPDATE Accounts SET account_number = :account_number, balance = :balance WHERE id = $id";
            //$query2 = "UPDATE Accounts SET account_number = :account_number WHERE id = :id";
            $stmt = $db->prepare($query2);

            try {
                $stmt->execute([":account_number" => $account_number, ":balance" => $deposit]);
               // $stmt->execute([":account_number"=>$account_number, ":id"=>$id]);
                accounts_transaction($deposit, $transaction_type, -1, $id, "");
                flash("Successfully Created!");
            } 
            catch (Exception $e) {
                flash("Not Created Successfully");
            }
        }
    }
}
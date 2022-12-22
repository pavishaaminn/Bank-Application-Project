<?php
function accountsClose($acc){
    $db = getDB();
    $query = "UPDATE Accounts SET isActive = 0 WHERE id = :acc";
    $stmt = $db->prepare($query);

    try{
        $stmt->execute(["acc"=>$acc]);
        flash("Account Successfully Closed!");
        header("Location: accountsOwn.php");
        exit();
    } catch (Exception $e) {
        flash("Account Closure Unsuccessful!");
    }
}
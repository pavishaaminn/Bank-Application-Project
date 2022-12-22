<?php
function paginate($query, $params = [], $per_page = 10){
    global $page;
    if (isset($_GET["page"])){
        try{
            $page = (int)$_GET["page"];
        }
        catch(Exception $e){
            $page = 1;
        }
    } else{
        $page = 1;
    }
    $db = getDB();
    $stmt = $db->prepare($query);
    $stmt->execute($params);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    $total = 0;
    
    if($result){
        $total = (int)$result["total"];
    }
    global $total_pages;
    $total_pages = ceil($total / $per_page);
    global $offset;
    $offset = ($page = 1) * $per_page;
}
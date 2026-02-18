<?php
    require_once("connexion.php");
    
    $query = $db->prepare('
        SELECT users.*, address.street, address.city, address.zipcode
        FROM users
        LEFT JOIN address ON users.id = address.id
    ');
    $query->execute();
    $users = $query->fetchAll(PDO::FETCH_ASSOC);
    
    var_dump($users);
?>

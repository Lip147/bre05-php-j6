<?php
    require_once("connexion.php");
    
    if (isset($_GET['id'])) {
        $query = $db->prepare('
            SELECT users.*, address.street, address.city, address.zipcode
            FROM users
            LEFT JOIN address ON users.id = address.id
            WHERE users.id = :id
            ');
        $parameters = [
            'id' => $_GET['id']
        ];
        $query->execute($parameters);
        $user = $query->fetch(PDO::FETCH_ASSOC);
    
        var_dump($user);
    };
?>
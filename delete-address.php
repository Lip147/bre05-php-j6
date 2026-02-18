<?php
    require_once("connexion.php");
    
    if (isset($_POST['id'])) {
        $query = $db->prepare("DELETE FROM address WHERE id = :id");
        $parameters = [
            'id' => $_POST['id']
        ];
        
        $query->execute($parameters);
    }
?>

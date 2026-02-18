<?php
    $host = "db.3wa.io";
    $port = "3306";
    $dbname = "jonasvivier_phpj6";
    $connexionString = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8";
    
    $user = "jonasvivier";
    $password = "e00a941c2593ab6705b70c1d7b8083ea";
    

    $db = new PDO(
        $connexionString,
        $user,
        $password
    );
    
    var_dump($db);

?>
<?php
DEFINE("USER", "root");
DEFINE("PASSWORD", "root");

try {
    $verbinding = new
    PDO("mysql:host=localhost;dbname=webshop", USER_PASSWORD);
    $verbinding->setAttribute
    (PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION );
}catch(PDOException $e) {
    echo $e->getMessage();
    echo "Kon geen verbinding maken.";
}

?>

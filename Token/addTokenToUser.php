<?php


require('../bd/connexionDB.php'); 

$UserPath = "KEY@9f556c159daad28cff5aca44345cc06bc317bdf60eebd922bfc2286d1b579542";

$oldUser = "serveur";

for ($a = $argv[1]; $a <= $argv[2]; $a++) {

        
    $DB->insert("UPDATE token SET owner = ?, oldowner = ? 

        WHERE id = ?",

        array($UserPath, $oldUser, $a));
    
    echo $a . PHP_EOL;

}


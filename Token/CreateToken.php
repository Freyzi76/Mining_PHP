<?php


require('../bd/connexionDB.php'); 

$TokenCreate = array();


for ($a = $argv[1]; $a <= $argv[2]; $a++) {

    $TokenKey =  hash("sha256", $a);

/*
    $json = [

            'id' => $a,
            'hash' => "NWS@" . $TokenKey,
            'owner' => "NOOWNER",
            'oldowner' => "NOOWNER",
    ];*/
                    
    $DB->insert("INSERT INTO token (id, hash, owner, oldowner) VALUES 
                    (?, ?, ?, ?)", 
                    array($a, "NWS@" . $a . "@" . $TokenKey, "NOOWNER", "NOOWNER")
                );
    
    echo $a . PHP_EOL;
}


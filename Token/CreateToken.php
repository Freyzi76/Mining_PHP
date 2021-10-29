<?php

$TokenCreate = array();


for ($a = 0; $a <= $argv[1]; $a++) {

    $TokenKey =  hash("sha256", $a);


    $json = [

            'id' => $a,
            'hash' => "NWS@" . $TokenKey,
            'owner' => "NOOWNER",
            'oldowner' => "NOOWNER",
    ];
                    
    array_push($TokenCreate, $json);

//var_dump( json_encode($json));
}



file_put_contents('Token.json', json_encode($TokenCreate));

//var_dump(json_encode($TokenCreate));


//$obj = json_decode(file_get_contents('Token.json'), true);

//var_dump($obj);
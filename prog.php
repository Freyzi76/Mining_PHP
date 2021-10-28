<?php

if($argv[1] == "create" && $argv[2] == "wallet") {

    if(isset($argv[3])) {

        $createRandomKey = $argv[3] . rand(0, mt_getrandmax());
        
        $privateKey =  hash("sha256", $createRandomKey);

        $publicKey =  hash("sha256", $privateKey);

        $construct->privateKey = $privateKey;
        $construct->publicKey = $publicKey;


        file_put_contents($argv[3] . '.json', json_encode($construct));

    } else {

        echo "Valeur manquante";

    }

}
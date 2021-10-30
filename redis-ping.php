<?php 
   require './vendor/autoload.php';




   //Connecting to Redis server on localhost 
   $redis = new Predis\Client(); 
   $redis->connect('127.0.0.1', 6379); 
   echo "Connection to server sucessfully"; 
   // Get the stored data and print it 
   echo "Stored string in redis:: " .$redis->get("tutorial-name"); 
?>
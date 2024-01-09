<?php

try{
    $pdo = new PDO('mysql:host=localhost;dbname=sourcecodester_posdb','root','');
    //echo 'Connection Successfull';
}catch(PDOException $error){
    echo $error->getmessage();
}


?>
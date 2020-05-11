<?php

$link ='mysql:host=sql212.byethost.com;dbname=b14_25730300_vd'; 
$usuario='b14_25730300';
$pass='954162';

try{

$pdo= new ($link,$usuario,$pass);

echo 'conectado'; 

}catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}

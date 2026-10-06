<?php

require "config.php";

function connect($host, $dbname, $user, $pass){
    try {
        # MySQL
        $dbh= new PDO("mysql:host=$host;dbname=$dbname",$user, $pass);

        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $dbh;
    }
    catch(PDOException $e) {
        echo $e->getMessage();
        return null; 
    }
}

$dbh = connect($host, $dbname, $user, $pass);

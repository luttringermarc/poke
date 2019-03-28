<?php

function sql_connect(){

    include(ROOT_DIR . 'dbenv.php');
       
    try {
        $pdo_options[PDO::MYSQL_ATTR_INIT_COMMAND] = 'SET NAMES utf8';
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password, $pdo_options);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    }
    catch(PDOException $e){
        echo "Connection failed: " . $e->getMessage();
    }

}

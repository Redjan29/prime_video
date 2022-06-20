<?php 
    try 
    {
        // $bdd = new PDO("mysql:host=localhost;dbname=apweb;charset=utf8", 'root', '');
        $bdd = new PDO("mysql:host=192.190.190.52;dbname=rredjane;charset=utf8", 'rredjane', 'azerty');
    }
    catch(PDOException $e)
    {
        die('Erreur : '.$e->getMessage());
    }

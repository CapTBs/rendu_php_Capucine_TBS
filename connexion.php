<?php
    
    try{

    $database = new PDO('mysql:host=localhost;dbname=rendu_php','root','');

    } catch (Exception $e) {

        die('Erreur:' . $e->getMessage());
    }

?> 
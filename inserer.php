<?php
    require_once 'connexion.php';

    if($_POST['content'] != '') {
        $data = [
            'content' => $_POST['content'],
            'date' => date('Y-m-d H:i:s')
        ];

        $requete = $database->prepare('INSERT INTO articles (content, date) VALUES (:content, :date)');
        $requete->execute($data);

        if($requete) {
            header ('Location: index.php');
        } else {
            echo 'une erreur est survenue';
        }
    } else {
        echo 'Veuillez remplir tous les champs';

    }

?>  

//php + sql
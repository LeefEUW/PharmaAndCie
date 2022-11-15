<?php
    //import
    include './utils/connectBdd.php';
    include './model/model_article.php';
    include './manager/manager_article.php';
    include './vue/view_show_all_article.php';
    //message 
    $message = ""; 
    //instance de l'objet ManagerArticle
    $art = new ManagerPr(null, null);
    //stocker le résultat de la méthode showAllArticle
    $liste = $art->showAllArticle($bdd);
    //test si le tableau d'article est vide
    if(empty($liste)){
        $message = '<a href="/secu/createArticle">Veuillez ajouter un article</a>';
    }
    //test sinon (tableau est rempli)
    else{
        //parcourir le tableau (version tableau associatif)
        foreach($liste as $value){
            echo "";
        }
    }
    echo $message;

    //exemple si on souhaite stocker le résultat d'un article dans un objet
    // $art->setIdArt($liste[0]['id_article']);
    // $art->setNomArt($liste[0]['nom_article']);
    // $art->setPrixArt($liste[0]['prix_article']);
    // var_dump($art);
?>
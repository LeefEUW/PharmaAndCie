<?php
    //session start
    session_start();
    //Analyse de l'URL avec parse_url() et retourne ses composants
    $url = parse_url($_SERVER['REQUEST_URI']);
    //test soit l'url a une route sinon on renvoi à la racine
    $path = isset($url['path']) ? $url['path'] : '/';
    /*--------------------------ROUTER -----------------------------*/
    //test de la valeur $path dans l'URL et import de la ressource

    include './view/viewNavbar.php';




    switch($path){
        //route /PharmaAndCie -> ./controller/controllerAccueil.php
        case $path === "/PharmaAndCie":
            include './controller/controlerAccueil.php';
		    break ;
        //route /evalmvc/showArticle -> ./controler/controler_show_all_article.php
        case $path === "/PharmaAndCie/connexion":
            include './controller/controlerConnexion.php';
		    break ;
        //route /evalmvc/showArticle -> ./controler/controler_show_all_article.php
        case $path === "/PharmaAndCie/ajouter-produit":
            include './controller/controllerAddProd.php';
		    break ;
        //route /evalmvc/modifyArticle -> ./controler/controler_modify_article.php
        case $path === "/PharmaAndCie/modifyArticle": 
            include './controller/controler_modify_article.php';
		    break ;
        //route /evalmvc/deleteArticle -> ./controler/controler_delete_article.php
        case $path === "/PharmaAndCie/deleteArticle":
            include './controller/controler_delete_article.php';
		    break ;
        //route /evalmvc/getApi -> ./api/api.php
        case $path === "/PharmaAndCie/getApi":
            include './api/api.php';
		    break ;
        //route /evalmvc/apiAllArticle -> ./controler/controler_api_all_article.php
        case $path === "/PharmaAndCie/apiAllArticle":
            include './controler/controler_api_all_article.php';
		    break ;
        
        //route /evalmvc/error -> ./error.php
        case $path === "/pharma/error":
            include './error.php';
		    break ;
        //route en cas d'erreur
        // default:
        //     include './controler/controler_show_all_article.php';
		//     break ;
    }
?>
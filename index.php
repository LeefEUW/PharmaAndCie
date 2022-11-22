<?php
    //session start
    session_start();
    //Analyse de l'URL avec parse_url() et retourne ses composants
    $url = parse_url($_SERVER['REQUEST_URI']);
    //test soit l'url a une route sinon on renvoi à la racine
    $path = isset($url['path']) ? $url['path'] : '/';
    /*--------------------------ROUTER -----------------------------*/
    //test de la valeur $path dans l'URL et import de la ressource

    switch($path){
        //route /PharmaAndCie -> ./controller/controllerAccueil.php
        case $path === "/PharmaAndCie":
            include './controller/controlerAccueil.php';
		    break ;
        //route /PharmaAndCie/connexion -> ./controller/controllerConnexion.php
        case $path === "/PharmaAndCie/connexion":
            include './controller/controlerConnexion.php';
		    break ;
        //route /PharmaAndCie/addProduit -> ./controller/controllerAddProd.php
        case $path === "/PharmaAndCie/addProduit":
            include './controller/controllerAddProd.php';
		    break ;        
            // route /PharmaAndCie/produits -> ./controller/controllerAllProduit.php
        case $path === "/PharmaAndCie/produits":
            include './controller/controllerAllProduit.php';
		    break ;
        //route /PharmaAndCie/error -> ./error.php
        case $path === "/PharmaAndCie/error":
            include './error.php';
		    break ;
        //route en cas d'erreur
        // default:
        //     include './controler/controler_show_all_article.php';
		//     break ;
    }
?>
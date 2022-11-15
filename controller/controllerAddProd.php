<?php
    //import
    include '../utils/connectBdd.php';
    include '../utils/functions.php';
    include '../model/modelProduit.php';
    include '../view/viewAddProduit.php';
    //message 
    $message = "";    
    //test si le bouton submit est cliqué
    if(isset($_POST['create'])){
        //test si les champs sont remplis
        if($_POST['nom_produit'] !="" AND $_POST['prix_produit'] !="" AND $_POST['image_produit'] !="" AND $_POST['id_categorie'] !="" AND $_POST['desc_produit'] !=""){
            //sécurisation des variables POST
            $nom = cleanInput($_POST['nom_produit']);
            $prix = cleanInput($_POST['prix_produit']);
            $desc = cleanInput($_POST['desc_produit']);
            //instancier l'objet
            $prod = new Produit($nom, $prix, $img, $categorie, $desc);
            $prod->createProduit($bdd);
            var_dump("salut");
            $message = mb_strtoupper($prod->getNomProd())." a été ajouté en BDD";
        }
        //test sinon les champs sont vides
        else{
            $message = 'Les champs sont vides';
        }
    }
    //test sinon le bouton n'est pas cliqué
    else{
        $message = 'Pour ajouter un article cliquez sur ajouter';
    }
    //affichage du message d'erreur
    echo $message;

?>
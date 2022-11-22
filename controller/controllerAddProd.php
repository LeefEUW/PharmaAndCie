<?php
    //import
    include './utils/connectBdd.php';
    include './utils/functions.php';
    include './model/modelProduit.php';
    include './model/modelCategorieProduit.php';

    
    //message 
    $message = "";    
    //test si le bouton submit est cliqué
    if(isset($_POST['create'])){
        //test si les champs sont remplis
        if($_POST['nom_produit'] !="" AND $_POST['prix_produit'] !="" AND $_POST['categorie'] !="" AND $_POST['desc_produit'] !=""){
            //sécurisation des variables POST
            $nom = cleanInput($_POST['nom_produit']);
            $prix = cleanInput($_POST['prix_produit']);
            $desc = cleanInput($_POST['desc_produit']);
            $categorie = cleanInput($_POST['categorie']);
            // $img = cleanInput($_POST['image_produit']);
            foreach ($_FILES as $key => $value) {
                // je souhaite déplacer les images
                $target_dir = "./assets/produits/";
                $target_file = $target_dir .basename($_FILES[$key]["name"]);
                move_uploaded_file($_FILES[$key]["tmp_name"], $target_file);
            }
            $img = $target_file;
            //instancier l'objet
            $prod = new Produit($nom, $prix, $img, $categorie, $desc);
            $prod->createProduit($bdd);
            $message = 'Le produit à été ajouté';
        }
                //test sinon les champs sont vides
                else{
                    $message = 'Tous les champs ne sont pas remplis';
                }
        
    }
        // récupérer cat en bdd
    $modelCatProduit = new CategorieProduit(null);
    $liste = $modelCatProduit->getAllCat($bdd);
    include './view/viewAddProduit.php';

?>
<?php
//import
include './utils/connectBdd.php';
include './model/modelCategorieProduit.php';
include './model/modelProduit.php';


$produit = new Produit(null,null,null,null,null);
if(isset ($_POST['tri'])){
    header('Location: /PharmaAndCie/produits?cat='.$_POST['category'].'');

}
if(isset($_GET['cat'])){
    if($_GET['cat'] == 0){
        $data = $produit->showAllProduits($bdd);
    }
    else{
        // echo $_GET['cat'];
        $data = $produit->ShowByCat($bdd,$_GET['cat']);
    }

}
else{
    // echo $_GET['cat'];
    $data = $produit->showAllProduits($bdd);
}

$modelCatProduit = new CategorieProduit(null);
$liste = $modelCatProduit->getAllCat($bdd);
include './view/viewAllProduit.php';

?>
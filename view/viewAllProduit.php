<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/style/allproduit.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <title>Pharma & Cie - Nos produits</title>
</head>
<body>
<header>
    <?php include './view/viewNavbar.php'?>
</header>
<div class="containerHaut">
        <div class="titre">
            <h1>Nos produits</h1>
        </div>
        <div class="categorie">
            <form method="POST">
                <select name="category">
                    <option value="0"> -- Séléctionnez une catégorie</option>
                    <?php foreach($liste as $key => $value) :?>
                        <option value="<?=$value->id_cat_prod?>"><?=$value->nom_cat?>
                        <?php endforeach;?>
                    </option>
                </select>
                <button type="submit" name="tri">Valider</button>
            </form>
            </div>
    </div>
    <div class="containerBas">
        <?php foreach($data as $produit): ?>
            <div class="card">
                    <img src="<?=$produit->image_produit?>" alt="">
                    <hr>
                    <h3><?=$produit->nom_produit?></h3>
                    <h4><?=$produit->prix_produit?>€</h4>
                    <p><?=$produit->desc_produit?></p>
                </div>
                <?php endforeach;?>
    </div>
            
</div>
<footer>
    <?php include './view/viewFooter.php'?>
</footer>
</body>
</html>
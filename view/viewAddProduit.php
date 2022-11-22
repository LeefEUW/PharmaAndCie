<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pharma & Cie - Ajouter un produit</title>
    <link rel="stylesheet" href="./assets/style/addproduit.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    
</head>
<body>
    <header>
    <?php include './view/viewNavbar.php'; ?>
        </header>
        <div class="container">
            <div class="image">
                <img src="./assets/image/connexion.jpg" alt="Image pharmacie" id="img_pharma">
            </div>
            <div class="formulaire">
                <h3> Ajout de produit</h3>
                <form method="POST" enctype="multipart/form-data">
                    <p> Nom du produit :</p>
                    <input type="text" placeholder="Doliprane" name="nom_produit">
                    <p> Prix du produit :</p>
                    <input type="number" min="0.00" max="10000.00" step="0.01" placeholder="9,99"  name="prix_produit">
                    <p> Image du produit :</p>
                    <input type="file" accept="image/png, image/jpeg" name="image_produit">
                    <p> Catégorie du produit :</p>
                    <select name="categorie">
                        <option>-- Choisissez une catégorie </option>
                    <?php foreach($liste as $key => $value) :?>
                        <option value="<?=$value->id_cat_prod?>"><?=$value->nom_cat?></option>
                    <?php endforeach;?>
                    </select>
                    <p> Description du produit :</p>
                    <textarea name="desc_produit" id="desc" cols="30" rows="7" placeholder="Ceci est une description" maxlength="255"></textarea>
                    <br>
                    <div class="btn">
                        <button name="create">Enregistrer</button>
                    </div>
                </form>
                <div>
                    <p id="message"><?php echo $message ?></p>
                </div>
            </div>
        </div>
        <footer> 
            <?php include './view/viewFooter.php' ?>
        </footer>
</body>
</html>

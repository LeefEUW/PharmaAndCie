<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pharma & Cie - Ajouter un produit</title>
    <link rel="stylesheet" href="../assets/style/addproduit.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
</head>
<body>
    <header>
        <?php include '../view/viewNavbar.php' ?>
        </header>
        <div class="container">
            <div class="image">
                <img src="../assets/image/connexion.jpg" alt="Image pharmacie" id="img_pharma">
            </div>
            <div class="formulaire">
                <h3> Ajout de produit</h3>
                <form method="POST">
                    <p> Nom du produit :</p>
                    <input type="text" placeholder="Doliprane" name="nom_produit" required>
                    <p> Prix du produit :</p>
                    <input type="number" min="0.00" max="10000.00" step="0.01" placeholder="9,99"  name="prix_produit" required>
                    <p> Image du produit :</p>
                    <input type="file" accept="image/png, image/jpeg" name="image_produit" required>
                    <p> Catégorie du produit :</p>
                    <select name="id_categorie">
                    <?php foreach($liste as $value)
                    echo "<option value=".$value[0]['id_cat_prod']."> ".$value[0]['nom_produit']."</option>"; ?>
                    </select>
                    <p> Description du produit :</p>
                    <textarea name="desc_produit" id="desc" cols="30" rows="7" placeholder="Ceci est une description"></textarea>
                    <br>
                    <div class="btn">
                        <button type="submit" name="create">Enregistrer</button>
                    </div>
                </form>
            </div>
        </div>
        <footer> 
            <?php include '../view/viewFooter.php' ?>
        </footer>
</body>
</html>
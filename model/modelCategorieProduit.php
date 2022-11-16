<?php
class CategorieProduit {
  private $id;
  private $nom_cat_produit;


  public function __construct($nom_cat_produit) {
    $this->nom_cat_produit = $nom_cat_produit;
  }

  // Getter and setter

  public function getId():int{
    return $this -> id_prod;
  }

  public function getNomCatProduit():string{
    return $this->nom_cat_produit; 
  }

  // methode
  public function getAllCat($bdd){
    try {
      $req = $bdd->prepare('SELECT * FROM categorie_produit');
      $req->execute();
      $data = $req->fetchAll(PDO::FETCH_OBJ);
      return $data;
    } catch (Exception $e) {
      die('Erreur : ' .$e->getMessage());
    }
  }

}
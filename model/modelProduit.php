<?php
class Produit {
  private $id_produit;
  private $nom_produit;
  private $prix_produit;
  private $image_produit;
  private $id_cat_prod;
  private $desc_produit;

  public function __construct($nom,$prix,$img,$categorie,$desc) {
    $this->nom_produit = $nom;
    $this->prix_produit = $prix;
    $this->image_produit =$img;
    $this->id_cat_prod =$categorie;
    $this->desc_produit =$desc;  
  }

 // Getter and setter

  public function getId():int{
  return $this->id_produit;
}
public function getNomProd():string{
  return $this->nom_produit; 
}
public function getPrixProd():float{
  return $this->prix_produit;
}
public function getImgProd():string{
  return $this->image_produit;
}
public function getCategorieProd():string{
  return $this->id_cat_prod;
}
public function getDescProd():string{
  return $this->desc_produit;
}
public function setId($id):void{
  $this->id_produit = $id;
}
public function setNomProd($nom):void{
  $this->nom_produit = $nom;
}
public function setPrixProd($prix):void{
$this->prix_produit = $prix;
}
public function setImageProd($img):void{
  $this->image_produit = $img;
  }
public function setCatProd($categorie):void{
$this->id_cat_prod = $categorie;
}
public function setDescProd($desc):void{
$this->desc_produit = $desc;
}
  public function __get($property) {
    if(property_exists($this, $property)) {
      return $this->$property;
    }
  }
  public function __set($property, $value) {
    if(property_exists($this, $property)) {
      $this->$property = $value; 
    }
  }
  public function createProduit($bdd){
    try{
        $req = $bdd->prepare('INSERT INTO produit(nom_produit,prix_produit,image_produit,id_cat_prod,desc_produit) VALUES (:nom_produit,:prix_produit,:image_produit,:id_cat_prod,:desc_produit)');
        $req->execute(array(
            'nom_produit' => $this->getNomProd(),
            'prix_produit' => $this->getPrixProd(),
            'image_produit' => $this->getImgProd(),
            'id_cat_prod' => $this->getCategorieProd(),
            'desc_produit' => $this->getDescProd(),
            ));
    }
    catch(Exception $e)
    {
        //affichage d'une exception en cas d’erreur
        die('Erreur : '.$e->getMessage());
    }

    return true;
}
public function findProdById($bdd) {
    try{
      $req = $bdd->prepare('SELECT * FROM produit
      WHERE id_prod = :id_prod');
      $req->execute(array(
          'id_prod' => $this->__get('id'),
          ));
      $data = $req->fetchAll(PDO::FETCH_ASSOC);
      return $data;
  }
  catch(Exception $e)
  {
      //affichage d'une exception en cas d’erreur
      die('Erreur : '.$e->getMessage());
  }
  }

public function showAllProduits($bdd) {
  try{
    $req = $bdd->prepare('SELECT nom_produit, prix_produit, image_produit,desc_produit FROM produit');
    $req->execute();
    $data = $req->fetchAll(PDO::FETCH_OBJ);
    return $data;
}
catch(Exception $e)
{
    //affichage d'une exception en cas d’erreur
    die('Erreur : '.$e->getMessage());
}
}
public function ShowByCat($bdd, $categorie) {
  try{
    $req = $bdd->prepare('SELECT nom_produit, prix_produit, image_produit, desc_produit FROM produit WHERE id_cat_prod = :id_cat_prod');
    $req->execute(array(
        'id_cat_prod' => $categorie
        ));
    $data = $req->fetchAll(PDO::FETCH_OBJ);
    return $data;
}
catch(Exception $e)
{
    //affichage d'une exception en cas d’erreur
    die('Erreur : '.$e->getMessage());
}
}
}
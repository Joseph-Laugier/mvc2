<?php
class Voiture { 
 private $marque;
 private $couleur;
 private $immatriculation;

 // getter
 public function getMarque() {
 return $this->marque;
 }

public function getCouleur() {
 return $this->couleur;
 }

 public function getImmatriculation() {
 return $this->immatriculation;
 }

  public static function getAllVoitures(){
    require_once "Model.php";
    $bdd = Model::Init();
    $rep = $bdd-> query("SELECT * FROM Voiture");
    $rep ->setFetchMode(PDO::FETCH_CLASS,'Voiture');
    $tab_voit = $rep->fetchAll();

      foreach ($tab_voit as $row) {
        $row->afficher();
      }
  }

 // setter
 public function setMarque($marque2) {
 $this->marque = $marque2;
 }

  public function setCouleur($couleur2) {
 $this->marque= $marque2;
 }

 public function setImmatriculation($immatriculation2) {
 if(strlen($immatriculation) ==8)
{
  $this->immatriculation = $immatriculation2;

}else{
	echo"une plaque d'immatriculation doit avoir 8 characters";
}
}



 //un constructeur
 public function __construct($m = NULL, $c = NULL, $i = NULL) {
    if(!is_null($m) && !is_null($c) && !is_null($i)) {
       $this->marque = $m;
       $this->couleur = $c;
       $this->immatriculation = $i;
    }
 
 }


 // une methode d'affichage.
 public function afficher() {
 echo'
  Info:
  <ul>
      <li> Marque: '.$this->getMarque().'</li>
      <li> Couleur: '.$this->getCouleur().'</li>
      <li> Immatriculation: '.$this->getImmatriculation().'</li>
  </ul>

 ';


 }
}

?>

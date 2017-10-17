<?php



class Lille
{
  public $town;
  public $departement ;

public function __construct($town ,$departement)
{
  $this->town = $town ;
  $this->departement = $departement;
}
}
$ville = new Lille('lille','nord');
$dept = new Lille('roubaix','nord');

echo 'la ville '. $ville->town .' est dans le departement'.' ' .$dept->departement."\n" ;

/**
 *
 */
class personne
{
  public $nom;
  public $prenom;
  public $adresse;

  public function __construct($nom , $prenom , $adresse)
  {
    $this->setNom($nom) ;
    $this->setPrenom ($prenom) ;
    $this->setAdresse($adresse)  ;
  }
  public function __destruct()
  {
    $this->nom ;
    $this->prenom;
    $this->adresse;
  }
  public function setNom($nom)
  {
    $this->nom = $nom;

  }
  public function setPrenom ($prenom)
  {
  $this->prenom =$prenom;
  }
public function setAdresse($adresse)
{
  $this->adresse = $adresse ;
}
public function getNom($nom)
{
  return $this->nom ;
}
public function getPrenom($prenom)
{
  return $this->prenom ;
}
public function getAdresse($adresse)
{
  return $this->adresse ;
}
}

$personne1 = new personne ('bzioui','morad', ' avenue de la banane');

echo 'la personne est '.$personne1->nom .' ' .$personne1->prenom .' '.'est habite au'. $personne1->adresse ;

 ?>

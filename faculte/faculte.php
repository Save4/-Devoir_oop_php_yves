<?php
    class faculte{
      private $nom_fac;
      private $non_depart;
      private $annee_aca;
      private $periode_inscr;

      public function __construct()
      {
      }
      public function getNom_fac()
      {
        return  $this->nom_fac;
      }
      public function setNom_fac($nom_fac)
      {
        return  $this->nom_fac=$nom_fac;
      }

       public function getNom_depart()
      {
        return  $this->nom_depart;
      }
      public function setNom_depart($nom_depart)
      {
        return $this->nom_depart=$nom_depart;
      }

      public function getAnnee_aca()
      {
        return $this->annee_aca;
      }
      public function setAnnee_aca($annee_aca)
      {
        return $this->annee_aca=$annee_aca;
      }

      public function getPeriode_inscr()
      {
        return $this->periode_inscr;
      }
      public function setPeriode_inscr($periode_inscr)
      {
        return $this->periode_inscr=$periode_inscr;
      }

      public function AfficherInfo()
{


    echo "</br> L'universite annonce la periode des inscription de l'annee academique " . $this->getAnnee_aca(). "</br> durant la periode du  ".$this->getPeriode_inscr() . "</br>  dans la faculte de  " . $this->getNom_fac(). "</br> et le departement de ".$this->getNom_depart();

}
    }
 ?>

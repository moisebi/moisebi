<?php
/**
 * class Humain
 */
class Humain
{
    /**
     * mettre une propiétè en visiblilité
     * "private",c'est encapsulé les données
     * c'est à dire ,les securiser
     */
/**
     * Visibilité
     * ---
     * public => Permet d'accéder aux propriétés et méthodes en dehors 
     *           de la classe.
     * 
     * private => Ne permet pas d'accéder à la propriété en dehors de la classe, 
     *            mais seulement à l'intérieur de celle-ci.
     */
    /**taille de notre bonhomme*/

    private $taille;
    /**  poids de notre bonhomme*/

    private $poids;

    /**
     * constructeur
     */

    public function __construct ($taille, $poids)
    {
       $this->setTaille ($taille);
       $this->setPoids ($poids);
    }
    /**
     * setter
     * permet d'affecter une valeur a notre propriété $taille
     */
    public function setTaille($value)
    {
        if(is_numeric($value))
        {
        $this->taille= $value;
        }
    }

    public function getTaille()
    {
        return $this->taille;
    }

  public function setPoids($value)
{
    if(is_numeric($value))
    {
        $this->poids = $value;
    }
}
    public function getPoids()
    {
        return $this->poids;
    }
}
?>
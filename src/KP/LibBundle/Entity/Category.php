<?php

namespace KP\LibBundle\Entity;

/**
 * Category
 */
class Category
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $nom;

    /**
     * @var int
     */
    private $idLivre;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Category
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set idLivre
     *
     * @param integer $idLivre
     *
     * @return Category
     */
    public function setIdLivre($idLivre)
    {
        $this->idLivre = $idLivre;

        return $this;
    }

    /**
     * Get idLivre
     *
     * @return int
     */
    public function getIdLivre()
    {
        return $this->idLivre;
    }
}


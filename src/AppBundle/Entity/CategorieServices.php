<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CategorieServices
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Entity\CategorieServicesRepository")
 */
class CategorieServices
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=255)
     */
    private $libelle;

    /**
     * @var string
     *
     * @ORM\Column(name="descriprtion", type="string", length=255)
     */
    private $descriprtion;

    /**
     * @var string
     *
     * @ORM\Column(name="picto", type="string", length=255)
     */
    private $picto;

    /**
     * @var string
     *
     * @ORM\Column(name="banniere", type="string", length=255)
     */
    private $banniere;

    /**
     * @var string
     *
     * @ORM\Column(name="slug", type="string", length=255)
     */
    private $slug;

    /**
     * @var boolean
     *
     * @ORM\Column(name="state", type="boolean")
     */
    private $state;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set libelle
     *
     * @param string $libelle
     * @return CategorieServices
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return string 
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set descriprtion
     *
     * @param string $descriprtion
     * @return CategorieServices
     */
    public function setDescriprtion($descriprtion)
    {
        $this->descriprtion = $descriprtion;

        return $this;
    }

    /**
     * Get descriprtion
     *
     * @return string 
     */
    public function getDescriprtion()
    {
        return $this->descriprtion;
    }

    /**
     * Set picto
     *
     * @param string $picto
     * @return CategorieServices
     */
    public function setPicto($picto)
    {
        $this->picto = $picto;

        return $this;
    }

    /**
     * Get picto
     *
     * @return string 
     */
    public function getPicto()
    {
        return $this->picto;
    }

    /**
     * Set banniere
     *
     * @param string $banniere
     * @return CategorieServices
     */
    public function setBanniere($banniere)
    {
        $this->banniere = $banniere;

        return $this;
    }

    /**
     * Get banniere
     *
     * @return string 
     */
    public function getBanniere()
    {
        return $this->banniere;
    }

    /**
     * Set slug
     *
     * @param string $slug
     * @return CategorieServices
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string 
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set state
     *
     * @param boolean $state
     * @return CategorieServices
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return boolean 
     */
    public function getState()
    {
        return $this->state;
    }
}

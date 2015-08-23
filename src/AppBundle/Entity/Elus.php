<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Elus
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Entity\ElusRepository")
 */
class Elus
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
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="biographie", type="string", length=255)
     */
    private $biographie;

    /**
     * @var string
     *
     * @ORM\Column(name="photo", type="string", length=255)
     */
    private $photo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="debut_mandat", type="date")
     */
    private $debutMandat;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fin_mandat", type="date")
     */
    private $finMandat;

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
     * Set nom
     *
     * @param string $nom
     * @return Elus
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
     * Set biographie
     *
     * @param string $biographie
     * @return Elus
     */
    public function setBiographie($biographie)
    {
        $this->biographie = $biographie;

        return $this;
    }

    /**
     * Get biographie
     *
     * @return string 
     */
    public function getBiographie()
    {
        return $this->biographie;
    }

    /**
     * Set photo
     *
     * @param string $photo
     * @return Elus
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get photo
     *
     * @return string 
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set debutMandat
     *
     * @param \DateTime $debutMandat
     * @return Elus
     */
    public function setDebutMandat($debutMandat)
    {
        $this->debutMandat = $debutMandat;

        return $this;
    }

    /**
     * Get debutMandat
     *
     * @return \DateTime 
     */
    public function getDebutMandat()
    {
        return $this->debutMandat;
    }

    /**
     * Set finMandat
     *
     * @param \DateTime $finMandat
     * @return Elus
     */
    public function setFinMandat($finMandat)
    {
        $this->finMandat = $finMandat;

        return $this;
    }

    /**
     * Get finMandat
     *
     * @return \DateTime 
     */
    public function getFinMandat()
    {
        return $this->finMandat;
    }

    /**
     * Set state
     *
     * @param boolean $state
     * @return Elus
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

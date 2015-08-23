<?php

namespace CMA\tarificateurEntrepriseBundle\Entity;

use CMA\UtilBundle\Entity\AbstractDatableEntity;

use Doctrine\ORM\Mapping as ORM;
use mageekguy\atoum\tests\units\asserters\integer;

class EntrepriseEntity extends AbstractDatableEntity
{
    /*
     * @var integer
     */
    private $id_entreprise;

    /**
     * @var integer
     * @ORM\Column(name="", type="", nullable=true)
     */
    private $id_dossier;

    /**
     * @var integer
     * @ORM\Column(name="", type="", nullable=true)
     */
    private $id_adresse;

    /**
     * @var sring
     * @ORM\Column(name="", type="", nullable=true)
     */
    private $nom_entreprise;

    /**
     * @var string
     * @ORM\Column(name="", type="", nullable=true)
     */
    private $forme_juridique;

    /**
     * @var integer
     * @ORM\Column(name="", type="", nullable=true)
     */
    private $effectif;

    /**
     * @var string
     * @ORM\Column(name="", type="", nullable=true)
     */
    private $code_naf;

    /**
     * @var string
     * @ORM\Column(name="", type="", nullable=true)
     */
    private $siret;

    /**
     * @var string
     * @ORM\Column(name="", type="", nullable=true)
     */
    private $ccn;

    /**
     * @var date
     * @ORM\Column(name="", type="", nullable=true)
     */
    private $date_crea;

    /**
     * @var integer
     * @ORM\Column(name="", type="", nullable=true)
     */
    private $user_crea_id;

    /**
     * @var date
     * @ORM\Column(name="", type="", nullable=true)
     */
    private $dt_maj;

    /**
     * @var integer
     * @ORM\Column(name="", type="", nullable=true)
     */
    private $user_maj_id;

    /**
     * @param string $ccn
     */
    public function setCcn($ccn)
    {
        $this->ccn = $ccn;
    }

    /**
     * @return string
     */
    public function getCcn()
    {
        return $this->ccn;
    }

    /**
     * @param string $code_naf
     */
    public function setCodeNaf($code_naf)
    {
        $this->code_naf = $code_naf;
    }

    /**
     * @return string
     */
    public function getCodeNaf()
    {
        return $this->code_naf;
    }

    /**
     * @param \CMA\tarificateurEntrepriseBundle\Entity\date $date_crea
     */
    public function setDateCrea($date_crea)
    {
        $this->date_crea = $date_crea;
    }

    /**
     * @return \CMA\tarificateurEntrepriseBundle\Entity\date
     */
    public function getDateCrea()
    {
        return $this->date_crea;
    }

    /**
     * @param \CMA\tarificateurEntrepriseBundle\Entity\date $dt_maj
     */
    public function setDtMaj($dt_maj)
    {
        $this->dt_maj = $dt_maj;
    }

    /**
     * @return \CMA\tarificateurEntrepriseBundle\Entity\date
     */
    public function getDtMaj()
    {
        return $this->dt_maj;
    }

    /**
     * @param int $effectif
     */
    public function setEffectif($effectif)
    {
        $this->effectif = $effectif;
    }

    /**
     * @return int
     */
    public function getEffectif()
    {
        return $this->effectif;
    }

    /**
     * @param string $forme_juridique
     */
    public function setFormeJuridique($forme_juridique)
    {
        $this->forme_juridique = $forme_juridique;
    }

    /**
     * @return string
     */
    public function getFormeJuridique()
    {
        return $this->forme_juridique;
    }

    /**
     * @param int $id_adresse
     */
    public function setIdAdresse($id_adresse)
    {
        $this->id_adresse = $id_adresse;
    }

    /**
     * @return int
     */
    public function getIdAdresse()
    {
        return $this->id_adresse;
    }

    /**
     * @param int $id_dossier
     */
    public function setIdDossier($id_dossier)
    {
        $this->id_dossier = $id_dossier;
    }

    /**
     * @return int
     */
    public function getIdDossier()
    {
        return $this->id_dossier;
    }

    /**
     * @param mixed $id_entreprise
     */
    public function setIdEntreprise($id_entreprise)
    {
        $this->id_entreprise = $id_entreprise;
    }

    /**
     * @return mixed
     */
    public function getIdEntreprise()
    {
        return $this->id_entreprise;
    }

    /**
     * @param \CMA\tarificateurEntrepriseBundle\Entity\sring $nom_entreprise
     */
    public function setNomEntreprise($nom_entreprise)
    {
        $this->nom_entreprise = $nom_entreprise;
    }

    /**
     * @return \CMA\tarificateurEntrepriseBundle\Entity\sring
     */
    public function getNomEntreprise()
    {
        return $this->nom_entreprise;
    }

    /**
     * @param string $siret
     */
    public function setSiret($siret)
    {
        $this->siret = $siret;
    }

    /**
     * @return string
     */
    public function getSiret()
    {
        return $this->siret;
    }

    /**
     * @param int $user_crea_id
     */
    public function setUserCreaId($user_crea_id)
    {
        $this->user_crea_id = $user_crea_id;
    }

    /**
     * @return int
     */
    public function getUserCreaId()
    {
        return $this->user_crea_id;
    }

    /**
     * @param int $user_maj_id
     */
    public function setUserMajId($user_maj_id)
    {
        $this->user_maj_id = $user_maj_id;
    }

    /**
     * @return int
     */
    public function getUserMajId()
    {
        return $this->user_maj_id;
    }

}
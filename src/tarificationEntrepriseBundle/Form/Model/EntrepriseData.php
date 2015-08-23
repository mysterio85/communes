<?php

namespace tarificateurEntrepriseBundle\Form\Model;


class EntrepriseData
{
    private $college;
    private $effectif;
    private $ageMoyen;
    private $nbreCadre;
    private $ageMoyenCadre;
    private $nbreNCadre;
    private $ageMoyenNCadre;
    private $codePostal;

    /**
     * @return mixed
     */
    public function getCollege()
    {
        return $this->college;
    }

    /**
     * @param mixed $college
     */
    public function setCollege($college)
    {
        $this->college = $college;
    }

    /**
     * @return mixed
     */
    public function getEffectif()
    {
        return $this->effectif;
    }

    /**
     * @param mixed $effectif
     */
    public function setEffectif($effectif)
    {
        $this->effectif = $effectif;
    }

    /**
     * @return mixed
     */
    public function getAgeMoyen()
    {
        return $this->ageMoyen;
    }

    /**
     * @param mixed $ageMoyen
     */
    public function setAgeMoyen($ageMoyen)
    {
        $this->ageMoyen = $ageMoyen;
    }

    /**
     * @return mixed
     */
    public function getNbreCadre()
    {
        return $this->nbreCadre;
    }

    /**
     * @param mixed $nbreCadre
     */
    public function setNbreCadre($nbreCadre)
    {
        $this->nbreCadre = $nbreCadre;
    }

    /**
     * @return mixed
     */
    public function getAgeMoyenCadre()
    {
        return $this->ageMoyenCadre;
    }

    /**
     * @param mixed $ageMoyenCadre
     */
    public function setAgeMoyenCadre($ageMoyenCadre)
    {
        $this->ageMoyenCadre = $ageMoyenCadre;
    }

    /**
     * @return mixed
     */
    public function getNbreNCadre()
    {
        return $this->nbreNCadre;
    }

    /**
     * @param mixed $nbreNCadre
     */
    public function setNbreNCadre($nbreNCadre)
    {
        $this->nbreNCadre = $nbreNCadre;
    }

    /**
     * @return mixed
     */
    public function getAgeMoyenNCadre()
    {
        return $this->ageMoyenNCadre;
    }

    /**
     * @param mixed $ageMoyenNCadre
     */
    public function setAgeMoyenNCadre($ageMoyenNCadre)
    {
        $this->ageMoyenNCadre = $ageMoyenNCadre;
    }

    /**
     * @return mixed
     */
    public function getCodePostal()
    {
        return $this->codePostal;
    }

    /**
     * @param mixed $codePostal
     */
    public function setCodePostal($codePostal)
    {
        $this->codePostal = $codePostal;
    }






}
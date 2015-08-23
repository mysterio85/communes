<?php

namespace tarificationEntrepriseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use tarificateurEntrepriseBundle\Form\Model\EntrepriseData;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $entrepriseData = new EntrepriseData();
        $form           = $this->createForm('salarieInfos', $entrepriseData);

        if ($form->isValid()) {

        }

        return $this->render('tarificationEntrepriseBundle:Default:index.html.twig',array(
            'form' => $form->createView()
        ));
    }
}

<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="accueil")
     * @Template("AppBundle::index.html.twig")
     */
    public function indexAction()
    {
        return array();
    }

    /**
     * @Route("/contact", name="contact")
     * @Template("AppBundle::contact.html.twig")
     */
    public function contactAction()
    {
        return array();
    }

    /**
     * @Route("/actualite", name="actualite")
     * @Template("AppBundle::actualite.html.twig")
     */
    public function actualiteAction()
    {
        return array();
    }

    /**
     * @Route("/actualite/{slug}", name="detailActualite")
     * @Template("AppBundle::contact.html.twig")
     */
    public function detailActualiteAction()
    {
        return array();
    }

    /**
     * @Route("/services", name="services")
     * @Template("AppBundle::services.html.twig")
     */
    public function servicesAction()
    {
        return array();
    }

    /**
     * @Route("/services/{slug}", name="detailService")
     * @Template("AppBundle::contact.html.twig")
     */
    public function serviceDetailAction()
    {
        return array();
    }

    /**
     * @Route("/communes", name="communes")
     * @Template("AppBundle::communes.html.twig")
     */
    public function communesAction()
    {
        return array();
    }

    /**
     * @Route("/communes/{slug}", name="detailCommune")
     * @Template("AppBundle::communes.html.twig")
     */
    public function communeDetailAction()
    {
        return array();
    }

    /**
     * @Route("/elus", name="elus")
     * @Template("AppBundle::communes.html.twig")
     */
    public function elusAction()
    {
        return array();
    }

    /**
     * @Route("/elus/{slug}", name="detailElu")
     * @Template("AppBundle::communes.html.twig")
     */
    public function eluDetailAction()
    {
        return array();
    }
}

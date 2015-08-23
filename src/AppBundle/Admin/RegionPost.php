<?php
/**
 * Created by PhpStorm.
 * User: essoagenial
 * Date: 06/07/2015
 * Time: 23:51
 */

namespace AppBundle;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\DoctrineORMAdminBundle\Builder\DatagridBuilder;

class RegionPost extends Admin
{

    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('libelle', 'text', array('label'=>'Libelle'))
            ->add('chef_lieu', 'text', array('label'=>'Chef Lieu'))
            ->add('decription', 'text', array('label'=>'Description'))
            ->add('district', 'text', array('label'=>'District'))
            ->add('slug', 'text', array('label'=>'Slug'))
            ->add('state', 'text', array('label'=>'State'))
            ;
    }

    protected  function  configureDatagridFilters(datagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('libelle')
            ->add('chef_lieu')
            ->add('district')
            ->add('slug')
            ->add('state')
            ;
    }

    protected  function  configureListeFields(listMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('libelle')
            ->add('chef_lieu')
            ->add('district')
            ->add('slug')
            ->add('state')
        ;
    }
}
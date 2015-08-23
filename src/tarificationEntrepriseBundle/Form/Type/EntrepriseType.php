<?php
/**
 * Created by PhpStorm.
 * User: alptis
 * Date: 04/08/15
 * Time: 17:25
 */

namespace tarificateurEntrepriseBundle\Form\Type;

use Symfony\Component\Form\FormBuilderInterface;

class EntrepriseType extends AbstractType
{
    public  function buildForm(FormBuilderInterface $builder, array $option)
    {
        $builder
            ->add('college',
                'choice', array(
                'choices'   => array('Ensemble du personnel' => true, 'Cadre / non-Cadre' => false),
                'required'  => false,
                )
            )
            ->add(
                'effectif',
                'text',
                array(
                    'required' => false,
                    'error_bubbling' => true
                )
            )
            ->add(
                'nbreNCadre',
                'text',
                array(
                    'required' => false,
                    'error_bubbling' => true
                )
            )
            ->add(
                'ageMoyenNCadre',
                'text',
                array(
                    'required' => false,
                    'error_bubbling' => true
                )
            )

            ->add(
                'nbreCadre',
                'textarea',
                array(
                    'required' => false,
                    'error_bubbling' => true
                )
            )

            ->add(
                'ageMoyenCadre',
                'textarea',
                array(
                    'required' => false,
                    'error_bubbling' => true
                )
            )

            ->add(
                'codePostal',
                'textarea',
                array(
                    'required' => false,
                    'error_bubbling' => true
                )
            )
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'tarificateurEntrepriseBundle\Form\Model\EntrepriseData',
            'csrf_protection'   => true,
        ));
    }
    /**
     * @return string
     */
    public function getName()
    {
        return 'entreprise';
    }
}
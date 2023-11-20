<?php

namespace DirectorioBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TareaType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('usuario')
            ->add('tarea')
            ->add('fecha')
            ->add('componente')
            ->add('telefono')
            ->add('direccion')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'DirectorioBundle\Entity\Tarea'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'directoriobundle_tarea';
    }
}

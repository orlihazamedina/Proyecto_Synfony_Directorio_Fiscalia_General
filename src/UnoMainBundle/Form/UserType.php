<?php

namespace UnoMainBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UserType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username')
            ->add('nombre')
            ->add('password','password')
                 ->add('role','choice', array( 'choices' => array('ROLE_ADMIN' => 'ADMINISTRADOR', 'ROLE_USER' => 'USUARIO','ROLE_SUPERADMIN'=>'ROLE_SUPERADMIN')))
                ->add('municipio','choice', array( 'choices' =>array('Provincia'=>'Provincia','cerro' => 'Cerro', 'plaza' => 'Plaza','playa' => 'Playa','marianao' => 'Marianao','lisa' => 'Lisa','boyeros' => 'Boyeros','guanabacoa' => 'Guanabacoa','hvieja' => 'Habana Vieja','centrohabana' => 'Centro Habana','arroyo' => 'Arroyo Naranjo',
               '10Octubre' => '10 de Octubre','sanmiguel' => 'San Miguel','cotorro' => 'Cotorro','regla' => 'Regla','h.este' => 'Habana del Este','divico' => 'Divico')))
            ->add('isActive')
                ->add('Guardar', 'submit')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'UnoMainBundle\Entity\User'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'unomainbundle_user';
    }
}

<?php

namespace ProductBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProductType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre')
            ->add('description')
            ->add('prix')
            ->add('quantity')
            //->add('dateCreate')
            //->add('active')
            ->add('promotion')
            ->add('vaccine', 'choice', array(
                    'choices' => array(
                        0 => 'non',
                        1 => 'oui'
                     )
                )
            )
            ->add('puce', 'choice', array(
                    'choices' => array(
                        0 => 'non',
                        1 => 'oui'
                     )
                )
            )
            ->add('category')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ProductBundle\Entity\Product'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'productbundle_product';
    }
}

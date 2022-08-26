<?php

namespace App\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AffordabilityType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $storagesType = [
            'Types' => [
            'Master' => 'Master',
            'Main' => 'Main',
            'Intermediate MTR' => 'Intermediate MTR',
            'Intermediate MTRAN' => 'Intermediate MTRAN',
            'Campaign' => 'Campaign',
            'Showroom' => 'Showroom',
            'Regional Warehouse' => 'Regional Warehouse',
            'Return' => 'Return',
            'Auto Invoice' => 'Auto Invoice',
            'Supplier' => 'Supplier',
            'Consignment' => 'Consignment',
            'Customer Order Reserve' => 'Customer Order Reserve',
            'Customer Order Sell' => 'Customer Order Sell',
            'RTS Auxiliary Storage' => 'RTS Auxiliary Storage',
            'STO intermediate' => 'STO intermediate',
            'MIN STO Storage' => 'MIN STO Storage',
            'RTS Consignment' => 'RTS Consignment',
        ]
        ];


        $builder
            ->setMethod('PUT')
            ->add('file', null,
                ['label' => 'Bank Statement'],

            );

    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'csrf_protection' => false
        ));
    }

}
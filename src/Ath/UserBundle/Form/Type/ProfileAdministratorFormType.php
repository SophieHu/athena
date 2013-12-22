<?php

namespace Ath\UserBundle\Form\Type;

use Symfony\Component\Form\FormBuilderInterface;
use Ath\UserBundle\Form\Type\ProfileFormType as BaseType;

class ProfileAdministratorFormType extends BaseType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);

        // add your custom field
        //$builder->add('username');
    }

    public function getName()
    {
        return 'ath_administrator_profile';
    }
}

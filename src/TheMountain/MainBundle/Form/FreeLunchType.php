<?php

namespace TheMountain\MainBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class FreeLunchType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name');
        $builder->add('email', 'email');
        $builder->add('phone');
        $builder->add('workplace');
        $builder->add('workplaceaddy');
        $builder->add('workplacetotal');
        $builder->add('whywin', 'textarea');
    }

    public function getName()
    {
        return 'freelunchcontact';
    }
}

?>
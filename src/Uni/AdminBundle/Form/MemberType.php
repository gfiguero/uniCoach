<?php

namespace Uni\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class MemberType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('member_firstname', null, array(
                'label' =>  'member_firstname',
            ))
            ->add('member_lastname', null, array(
                'label' =>  'member_lastname',
            ))
            ->add('member_email', null, array(
                'label' =>  'member_email',
            ))
            ->add('member_phonenumber', null, array(
                'label' =>  'member_phonenumber',
            ))
            ->add('member_birthdate', null, array(
                'label' =>  'member_birthdate',
            ))
            ->add('member_admissiondate', null, array(
                'label' =>  'member_admissiondate',
            ))
            ->add('member_active', null, array(
                'label' =>  'member_active',
            ))
            ->add('member_photo_path', null, array(
                'label' =>  'member_photo_path',
            ))
            ->add('member_photo_file', null, array(
                'label' =>  'member_photo_file',
            ))
            ->add('member_role', null, array(
                'label' =>  'member_role',
            ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Uni\AdminBundle\Entity\Member'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'uni_adminbundle_member';
    }
}

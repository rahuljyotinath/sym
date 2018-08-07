<?php

/**
 * all code by me
 *
 * @copyright  Stefan H.G. Buchhofer
 * @version    Release: 1.0.0
 * @link       www.ilenvo-media.de
 * @email      ilenvo@me.com
 * @year       2018
 */

namespace Crm\InvoiceBundle\Form\Backend\Invoice;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Lexik\Bundle\FormFilterBundle\Filter\Form\Type as Filters;

/**
 * Class InvoiceFilterType
 * @package Crm\InvoiceBundle\Form\Backend\Invoice
 */
class InvoiceTemplateFilterType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('templateName', Filters\TextFilterType::class)
            ->add('company', Filters\ChoiceFilterType::class,[
            	  'choices' =>  array_flip($options['data']),
                  'label' => 'Company',
            	   'placeholder' => '--Select Company--',
             ]);
    }

    /**
     * @return string
     */
    public function getBlockPrefix()
    {
        return 'crm_template_filter';
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'csrf_protection' => false,
            'validation_groups' => array('filtering')
        ));
    }
}

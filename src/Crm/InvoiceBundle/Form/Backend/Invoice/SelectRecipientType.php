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

use Crm\InvoiceBundle\Entity\InvoiceRecipient;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type as FormType;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Class RecipientType
 * @package Crm\InvoiceBundle\Form\Backend\Invoice
 */
class SelectRecipientType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('user', FormType\ChoiceType::class, array(
            'choices' => $options['users'],
            ))
            ->add('company', FormType\ChoiceType::class, array(
                'choices' => $options['company'],
            ))
            ->add('individual', FormType\ChoiceType::class, array(
                'choices' => $options['individuals'],
            ));
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'users' => [],
            'company' => [],
            'individuals' => [],
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'invoice_bundle_invoice_select_recipient';
    }
}

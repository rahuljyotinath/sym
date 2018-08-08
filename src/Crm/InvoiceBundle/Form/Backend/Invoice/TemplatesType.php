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

use AppBundle\Entity\Company;
use Crm\InvoiceBundle\Entity\Templates;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type as FormType;
use Symfony\Component\OptionsResolver\OptionsResolver;


/**
 * Class RecipientType
 * @package Crm\InvoiceBundle\Form\Backend\Invoice
 */
class TemplatesType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder->add('templateName', FormType\TextType::class)
            ->add('template', FormType\ChoiceType::class, array(
                'choices' => $options['invoice_templates']
            ))
            ->add('company', EntityType::class, array(
                'class' => Company::class,
                'choice_label' => 'name'
            ));
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Templates::class,
            'invoice_templates' => []
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'invoice_template';
    }
}

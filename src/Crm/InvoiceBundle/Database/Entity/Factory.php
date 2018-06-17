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

namespace Crm\InvoiceBundle\Database\Entity;

use Crm\InvoiceBundle\Entity\Invoice;
use Crm\InvoiceBundle\Entity\InvoicePosition;
use Crm\InvoiceBundle\Entity\InvoiceRecipient;
use Crm\InvoiceBundle\Entity\NumberRange;
use Crm\InvoiceBundle\Entity\Templates;

/**
 * Class Factory
 * @package Crm\InvoiceBundle\Database\Entity
 */
class Factory
{
    /**
     * @return Invoice
     */
    public function invoice(): Invoice
    {
        return new Invoice();
    }

    /**
     * @return InvoicePosition
     */
    public function invoicePosition(): InvoicePosition
    {
        return new InvoicePosition();
    }

    /**
     * @return InvoiceRecipient
     */
    public function invoiceRecipient(): InvoiceRecipient
    {
        return new InvoiceRecipient();
    }

    /**
     * @return NumberRange
     */
    public function numberRange(): NumberRange
    {
        return new NumberRange();
    }

    /**
     * @return Templates
     */
    public function templates(): Templates
    {
        return new Templates();
    }
}

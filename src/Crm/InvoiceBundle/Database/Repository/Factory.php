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

namespace Crm\InvoiceBundle\Database\Repository;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityRepository;

/**
 * Class Factory
 * @package Crm\InvoiceBundle\Database\Repository
 */
class Factory
{
    /**
     * @var array
     */
    private $setter;

    /**
     * @var EntityManager
     */
    private $ormEm;

    /**
     * Factory constructor.
     * @param ObjectManager $ormEm
     */
    public function __construct(EntityManager $ormEm)
    {
        $this->ormEm = $ormEm;
    }

    /**
     * @return EntityRepository
     */
    public function invoice(): EntityRepository
    {
        if (!isset($this->setter[__FUNCTION__])) {
            $this->setter[__FUNCTION__] = $this->ormEm->getRepository('CrmInvoiceBundle:Invoice');
        }

        return $this->setter[__FUNCTION__];
    }

    /**
     * @return EntityRepository
     */
    public function invoicePosition(): EntityRepository
    {
        if (!isset($this->setter[__FUNCTION__])) {
            $this->setter[__FUNCTION__] = $this->ormEm->getRepository('CrmInvoiceBundle:InvoicePosition');
        }

        return $this->setter[__FUNCTION__];
    }

    /**
     * @return EntityRepository
     */
    public function invoiceRecipient(): EntityRepository
    {
        if (!isset($this->setter[__FUNCTION__])) {
            $this->setter[__FUNCTION__] = $this->ormEm->getRepository('CrmInvoiceBundle:InvoiceRecipient');
        }

        return $this->setter[__FUNCTION__];
    }

    /**
     * @return EntityRepository
     */
    public function numberRange(): EntityRepository
    {
        if (!isset($this->setter[__FUNCTION__])) {
            $this->setter[__FUNCTION__] = $this->ormEm->getRepository('CrmInvoiceBundle:NumberRange');
        }

        return $this->setter[__FUNCTION__];
    }

    /**
     * @return EntityRepository
     */
    public function templates(): EntityRepository
    {
        if (!isset($this->setter[__FUNCTION__])) {
            $this->setter[__FUNCTION__] = $this->ormEm->getRepository('CrmInvoiceBundle:Templates');
        }

        return $this->setter[__FUNCTION__];
    }
}

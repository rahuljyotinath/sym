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

namespace Crm\InvoiceBundle\Database\Data;

use Crm\InvoiceBundle\Database\Data\FormHelper\Helper;
use Doctrine\Bundle\DoctrineBundle\Registry as DoctrineRegistry;


/**
 * Class Factory
 * @package Crm\InvoiceBundle\Database\Data
 */
class Factory
{
    /**
     * @var array
     */
    private $setter;

    /**
     * @var DoctrineRegistry
     */
    private $doctrineRegistry;

    /**
     * Factory constructor.
     * @param DoctrineRegistry $doctrineRegistry
     */
    public function __construct(DoctrineRegistry $doctrineRegistry)
    {
        $this->doctrineRegistry = $doctrineRegistry;
    }

    /**
     * @return Helper
     */
    public function formHelper(){
        if (!isset($this->setter[__FUNCTION__])) {
            $this->setter[__FUNCTION__] = new Helper($this->doctrineRegistry);
        }

        return $this->setter[__FUNCTION__];
    }
}
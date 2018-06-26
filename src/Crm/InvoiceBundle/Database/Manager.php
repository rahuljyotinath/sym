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

namespace Crm\InvoiceBundle\Database;

use Doctrine\Bundle\DoctrineBundle\Registry as DoctrineRegistry;
use Doctrine\ORM\EntityManager;

/**
 * Class Manager
 * @package Crm\InvoiceBundle\Database
 */
class Manager
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
     * @var EntityManager
     */
    private $ormEm;

    /**
     * Manager constructor.
     * @param DoctrineRegistry $doctrineRegistry
     */
    public function __construct(DoctrineRegistry $doctrineRegistry)
    {
        $this->doctrineRegistry = $doctrineRegistry;
        $this->ormEm = $this->doctrineRegistry->getManager();
    }

    /**
     * @return Repository\Factory
     */
    public function repository(): Repository\Factory
    {
        if (!isset($this->setter[__FUNCTION__])) {
            $this->setter[__FUNCTION__] = new Repository\Factory($this->ormEm);
        }

        return $this->setter[__FUNCTION__];
    }

    /**
     * @return Entity\Factory
     */
    public function entity(): Entity\Factory
    {
        if (!isset($this->setter[__FUNCTION__])) {
            $this->setter[__FUNCTION__] = new Entity\Factory();
        }

        return $this->setter[__FUNCTION__];
    }

    /**
     * @return Data\Factory
     */
    public function data(): Data\Factory
    {
        if (!isset($this->setter[__FUNCTION__])) {
            $this->setter[__FUNCTION__] = new  Data\Factory($this->doctrineRegistry);
        }

        return $this->setter[__FUNCTION__];
    }


    /**
     * @return EntityManager
     */
    public function entityManager(): EntityManager
    {
        return $this->ormEm;
    }
}
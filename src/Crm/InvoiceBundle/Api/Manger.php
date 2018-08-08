<?php
/**
 * Created by PhpStorm.
 * User: minduser
 * Date: 08.08.18
 * Time: 11:14
 */

namespace Crm\InvoiceBundle\Api;


use Crm\InvoiceBundle\Api\Files\Parser;
use Symfony\Component\DependencyInjection\ContainerInterface;

class Manger
{
    /**
     * @var array
     */
    private $setter;

    /**
     * @var ContainerInterface
     */
    private $container;

    /**
     * Manger constructor.
     * @param ContainerInterface $container
     */
    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    /**
     * @return Parser
     */
    public function fileParser()
    {
        if (!isset($this->setter[__FUNCTION__])) {
            $this->setter[__FUNCTION__] = new Parser();
        }
        return $this->setter[__FUNCTION__];
    }
}
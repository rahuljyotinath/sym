<?php

/**
 * all code by me
 *
 * @copyright  Stefan H.G. Buchhofer
 * @version    Release: 1.0.0
 * @link       www.ilenvo-media.de
 * @email      ilenvo@me.com
 * @year       2017
 */

namespace Pim\ProductBundle\Services\Tag\Show\Version1\Response;

use AppBundle\Rest\Api\Response\ResponseInterface;
use JMS\Serializer\Annotation as Serializer;
use Pim\ProductBundle\Services\Common\ResponseTrait;

/**
 * Class Response
 * @Serializer\AccessorOrder("custom", custom={"code","status","message","date","scriptTimeSeconds","errors"})
 * @package Pim\ProductBundle\Services\AttributeSet\Lists\Version1\Response
 */
class Response implements ResponseInterface
{
    use ResponseTrait;

    /**
     * @var string
     * @Serializer\SerializedName("uuid")
     * @Serializer\Type("string")
     */
    private $uuid;

    /**
     * @var string
     * @Serializer\SerializedName("name")
     * @Serializer\Type("string")
     */
    private $name;

    /**
     * @var string
     * @Serializer\SerializedName("description")
     * @Serializer\Type("string")
     */
    private $description;

    /**
     * @var \DateTime
     * @Serializer\SerializedName("created")
     * @Serializer\Type("DateTime")
     */
    private $created;

    /**
     * @var \DateTime
     * @Serializer\SerializedName("updated")
     * @Serializer\Type("DateTime")
     */
    private $updated;

    /**
     * @return string
     */
    public function getUuid(): string
    {
        return $this->uuid;
    }

    /**
     * @param string $uuid
     * @return Response
     */
    public function setUuid(string $uuid): Response
    {
        $this->uuid = $uuid;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Response
     */
    public function setName(string $name): Response
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return Response
     */
    public function setDescription(string $description): Response
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreated(): \DateTime
    {
        return $this->created;
    }

    /**
     * @param \DateTime $created
     * @return Response
     */
    public function setCreated(\DateTime $created): Response
    {
        $this->created = $created;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getUpdated(): \DateTime
    {
        return $this->updated;
    }

    /**
     * @param \DateTime $updated
     * @return Response
     */
    public function setUpdated(\DateTime $updated): Response
    {
        $this->updated = $updated;
        return $this;
    }
}

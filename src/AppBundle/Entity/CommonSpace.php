<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="common_space")
 */
class CommonSpace
{
    /**
     * @ORM\Id
     * @ORM\Column(name="id", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * Many Private space have one business center.
     * @ORM\ManyToOne(targetEntity="BusinessCenter", inversedBy="center")
     */
    private $center;

    /**
     * @ORM\Column(name="doorID", type="integer")
     * @var int
     */
    private $doorID;

    /**
     * @ORM\Column(name="doorDescription", type="string", length=255, nullable=true)
     * @var string|null
     */
    private $doorDescription;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $center
     * @return CommonSpace
     */
    public function setCenter($center)
    {
        $this->center = $center;
        return $this;
    }

    /**
     * @return int
     */
    public function getCenter()
    {
        return $this->center;
    }

    /**
     * @param int $doorID
     * @return CommonSpace
     */
    public function setDoorID($doorID)
    {
        $this->doorID = $doorID;
        return $this;
    }

    /**
     * @return int
     */
    public function getDoorID()
    {
        return $this->doorID;
    }

    /**
     * @param string|null $doorDescription
     * @return CommonSpace
     */
    public function setDoorDescription($doorDescription = null)
    {
        $this->doorDescription = $doorDescription;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDoorDescription()
    {
        return $this->doorDescription;
    }
}

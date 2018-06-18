<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="private_space")
 */
class PrivateSpace
{
    /**
     * @ORM\Id
     * @ORM\Column(name="id", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="BusinessCenter", inversedBy="center")
     */
    private $center;

    /**
     * @ORM\Column(name="roomNumber", type="integer")
     * @var int
     */
    private $roomNumber;

    /**
     * @ORM\Column(name="doorId", type="integer", nullable=true)
     * @var int|null
     */
    private $doorId;

    /**
     * @ORM\Column(name="typeOfRoom", type="string", length=255, nullable=true)
     * @var string|null
     */
    private $typeOfRoom;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $centerId
     * @return privateSpace
     */
    public function setCenter($center)
    {
        $this->center = $center;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCenter()
    {
        return $this->center;
    }

    /**
     * @param int $roomNumber
     * @return privateSpace
     */
    public function setRoomNumber($roomNumber)
    {
        $this->roomNumber = $roomNumber;

        return $this;
    }

    /**
     * @return int
     */
    public function getRoomNumber()
    {
        return $this->roomNumber;
    }

    /**
     * @param int|null $doorId
     * @return privateSpace
     */
    public function setDoorId($doorId = null)
    {
        $this->doorId = $doorId;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getDoorId()
    {
        return $this->doorId;
    }

    /**
     * @param string|null $typeOfRoom
     * @return privateSpace
     */
    public function setTypeOfRoom($typeOfRoom = null)
    {
        $this->typeOfRoom = $typeOfRoom;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getTypeOfRoom()
    {
        return $this->typeOfRoom;
    }
}
